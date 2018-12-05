<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;

    class DatiGenerali extends Element {

        protected $_name = "DatiGenerali";

        protected $_children = [
            'datiGeneraliDocumento',
            'datiOrdineAcquisto',
            'datiContratto',
            'datiConvenzione',
            'datiRicezione',
            'datiFattureCollegate',
            'datiSAL',
            'datiDDT',
            'datiTrasporto',
            'fatturaPrincipale',
        ];

        public function __construct(DatiGeneraliDocumento $datiGeneraliDocumento) {
            $this->setDatiGeneraliDocumento($datiGeneraliDocumento);
        }

        public function setDatiGeneraliDocumento(DatiGeneraliDocumento $datiGeneraliDocumento) {
            parent::setDatiGeneraliDocumento($datiGeneraliDocumento);
            return $this;
        }

        public function addDatiOrdineAcquisto(DatiOrdineAcquisto $datiOrdineAcquisto) {
            parent::addDatiOrdineAcquisto($datiOrdineAcquisto);
            return $this;
        }

        public function addDatiContratto(DatiContratto $datiContratto) {
            parent::addDatiContratto($datiContratto);
            return $this;
        }

        public function addDatiConvenzione(DatiConvenzione $datiConvenzione) {
            parent::addDatiConvenzione($datiConvenzione);
            return $this;
        }

        public function addDatiRicezione(DatiRicezione $datiRicezione) {
            parent::addDatiRicezione($datiRicezione);
            return $this;
        }

        public function addDatiFattureCollegate(DatiFattureCollegate $datiFattureCollegate) {
            parent::addDatiFattureCollegate($datiFattureCollegate);
            return $this;
        }

        public function addDatiSAL(DatiSAL $datiSAL) {
            parent::addDatiSAL($datiSAL);
            return $this;
        }

        public function addDatiDDT(DatiDDT $datiDDT) {
            parent::addDatiDDT($datiDDT);
            return $this;
        }

        public function setDatiTrasporto(DatiTrasporto $datiTrasporto) {
            parent::setDatiTrasporto($datiTrasporto);
            return $this;
        }

        public function setFatturaPrincipale(FatturaPrincipale $fatturaPrincipale) {
            parent::setFatturaPrincipale($fatturaPrincipale);
            return $this;
        }

    }