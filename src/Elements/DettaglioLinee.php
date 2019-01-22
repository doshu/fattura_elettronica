<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DettaglioLinee extends Element {

        protected $_name = "DettaglioLinee";
        
        const TIPO_SCONTO = "SC";
        
        const TIPO_PREMIO = "PR";
        
        const TIPO_ABBUONO = "AB";
        
        const TIPO_SPESA_ACCESSORIA = "AC";

        protected $_children = [
            'numeroLinea',
            'tipoCessionePrestazione',
            'codiceArticolo',
            'descrizione',
            'quantita',
            'unitaMisura',
            'dataInizioPeriodo',
            'dataFinePeriodo',
            'prezzoUnitario',
            'scontoMaggiorazione',
            'prezzoTotale',
            'aliquotaIVA',
            'ritenuta',
            'natura',
            'riferimentoAmministrazione',
            'altriDatiGestionali',
        ];
        
        public function __construct($numeroLinea, $descrizione, $prezzoUnitario, $prezzoTotale, $aliquotaIVA) {
            $this->setNumeroLinea($numeroLinea);
            $this->setDescrizione($descrizione);
            $this->setPrezzoUnitario($prezzoUnitario);
            $this->setPrezzoTotale($prezzoTotale);
            $this->setAliquotaIVA($aliquotaIVA);
        }

        public function setNumeroLinea($numeroLinea) {
            parent::setNumeroLinea($numeroLinea);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setDescrizione($descrizione) {
            parent::setDescrizione($descrizione);
            return $this;
        }

        /**
         * @Filter(type="decimal", options={"decimal":8})
         */
        public function setPrezzoUnitario($prezzoUnitario) {
            parent::setPrezzoUnitario($prezzoUnitario);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setPrezzoTotale($prezzoTotale) {
            parent::setPrezzoTotale($prezzoTotale);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setAliquotaIVA($aliquotaIVA) {
            parent::setAliquotaIVA($aliquotaIVA);
            return $this;
        }

        public function setTipoCessionePrestazione($tipoCessionePrestazione) {
            parent::setTipoCessionePrestazione($tipoCessionePrestazione);
            return $this;
        }

        public function addCodiceArticolo(CodiceArticolo $codiceArticolo) {
            parent::addCodiceArticolo($codiceArticolo);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setQuantita($quantita) {
            parent::setQuantita($quantita);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setUnitaMisura($unitaMisura) {
            parent::setUnitaMisura($unitaMisura);
            return $this;
        }

        public function setDataInizioPeriodo(\DateTimeInterface $dataInizioPeriodo) {
            parent::setDataInizioPeriodo($dataInizioPeriodo);
            return $this;
        }

        public function setDataFinePeriodo(\DateTimeInterface $dataFinePeriodo) {
            parent::setDataFinePeriodo($dataFinePeriodo);
            return $this;
        }

        public function addScontoMaggiorazione(ScontoMaggiorazione $scontoMaggiorazione) {
            parent::addScontoMaggiorazione($scontoMaggiorazione);
            return $this;
        }

        public function setRitenuta($ritenuta) {
            parent::setRitenuta($ritenuta);
            return $this;
        }

        public function setNatura($natura) {
            parent::setNatura($natura);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setRiferimentoAmministrazione($riferimentoAmministrazione) {
            parent::setRiferimentoAmministrazione($riferimentoAmministrazione);
            return $this;
        }

        public function addAltriDatiGestionali(AltriDatiGestionali $altriDatiGestionali) {
            parent::addAltriDatiGestionali($altriDatiGestionali);
            return $this;
        }
    }
