<?php

    require_once('../vendor/autoload.php');

    use Inoma\FatturaElettronicaPR;

    FatturaElettronicaPR\FatturaElettronicaPR::init();

    $datiTrasmissione = new FatturaElettronicaPR\Elements\DatiTrasmissione(
        new FatturaElettronicaPR\Elements\IdTrasmittente('IT', '00000'),
        1,
        '0000000'
    );
    $datiTrasmissione
        ->setContattiTrasmittente(
            new FatturaElettronicaPR\Elements\ContattiTrasmittente('015015015', 'thomas.schiavello@inoma.it')
        )
        ->setPECDestinatario('inoma@pec.it');


    $cedentePrestatore = new FatturaElettronicaPR\Elements\CedentePrestatore(
        new FatturaElettronicaPR\Elements\DatiAnagrafici(
            new FatturaElettronicaPR\Elements\IdFiscaleIVA('IT', '0000'),
            (new FatturaElettronicaPR\Elements\Anagrafica())->setDenominazione('Inoma'),
            'RF01'
        ),
        new FatturaElettronicaPR\Elements\Sede(
            'via asd',
            13902,
            'Biella',
            'IT'
        )
    );

    $cedentePrestatore
        ->setIscrizioneRea(
            new FatturaElettronicaPR\Elements\IscrizioneREA('BI', '1111', 'LN')
        )
        ->setContatti(
            (new FatturaElettronicaPR\Elements\Contatti)->setEmail('info@inoma.it')
        );

    
    $rappresentanteFiscale = new FatturaElettronicaPR\Elements\RappresentanteFiscale(
        new FatturaElettronicaPR\Elements\DatiAnagrafici(
            new FatturaElettronicaPR\Elements\IdFiscaleIVA('IT', '0000'),
            (new FatturaElettronicaPR\Elements\Anagrafica())->setDenominazione('Inoma'),
            null
        )
    );

    $cessionarioCommittente = new FatturaElettronicaPR\Elements\CessionarioCommittente(
        new FatturaElettronicaPR\Elements\DatiAnagrafici(
            new FatturaElettronicaPR\Elements\IdFiscaleIVA('IT', '0001'),
            (new FatturaElettronicaPR\Elements\Anagrafica())->setDenominazione('Cliente'),
            null
        ),
        new FatturaElettronicaPR\Elements\Sede(
            'via pippo',
            13901,
            'Biella',
            'IT'
        )
    );

    $cessionarioCommittente->setRappresentanteFiscale(
        (new FatturaElettronicaPR\Elements\RappresentanteFiscaleCessionarioCommittente(
            new FatturaElettronicaPR\Elements\IdFiscaleIVA('IT', '0001')
        ))->setDenominazione('test')
    );


    $datiGenerali = new FatturaElettronicaPR\Elements\DatiGenerali(
        (new FatturaElettronicaPR\Elements\DatiGeneraliDocumento('TD01', 'EUR', new \DateTime(), 1))
            ->setImportoTotaleDocumento(10.00)
            ->addScontoMaggiorazione((new FatturaElettronicaPR\Elements\ScontoMaggiorazione('SC'))->setImporto(5.00))
    );
            
    $datiGenerali
        ->addDatiOrdineAcquisto(
            (new FatturaElettronicaPR\Elements\DatiOrdineAcquisto('id_documento'))
        )
        ->addDatiOrdineAcquisto(
            (new FatturaElettronicaPR\Elements\DatiOrdineAcquisto('id_documento_2'))
        )
        ->setDatiTrasporto(
            (new FatturaElettronicaPR\Elements\DatiTrasporto())
                ->setDatiAnagraficiVettore(
                    new FatturaElettronicaPR\Elements\DatiAnagraficiVettore(
                        new FatturaElettronicaPR\Elements\IdFiscaleIVA('IT', '1234'),
                        (new FatturaElettronicaPR\Elements\Anagrafica())->setDenominazione('Brt')
                    )
                )
                ->setDataOraConsegna(new \DateTime())
        )
        ->setFatturaPrincipale(new FatturaElettronicaPR\Elements\FatturaPrincipale('00001', new \DateTime()));

    
    $datiBeniServizi = new FatturaElettronicaPR\Elements\DatiBeniServizi();
    $datiBeniServizi
        ->addDettaglioLinee(
            (new FatturaElettronicaPR\Elements\DettaglioLinee(1, 'prodotto1', 10.00, 10.00, 22.00))
                ->addScontoMaggiorazione((new FatturaElettronicaPR\Elements\ScontoMaggiorazione('SC'))->setImporto(5.00))                
        )
        ->addDatiRiepilogo(new FatturaElettronicaPR\Elements\DatiRiepilogo(22, 8, 2));

    $fattura = new FatturaElettronicaPR\FatturaElettronicaPR(
        $datiTrasmissione,
        $cedentePrestatore,
        $cessionarioCommittente,
        $datiGenerali,
        $datiBeniServizi
    );

    $fattura
        ->setRappresentanteFiscale($rappresentanteFiscale)
        ->addDatiPagamento(
            (new FatturaElettronicaPR\Elements\DatiPagamento("TP02"))
                ->addDettaglioPagamento(new FatturaElettronicaPR\Elements\DettaglioPagamento("MP01", 10.00))
        );

    $dom = $fattura->build();
    $dom->formatOutput = true;
    
    $errors = $fattura->errors();
    if(empty($errors)) {
        file_put_contents($fattura->getFilename(), $dom->saveXML());
    }
