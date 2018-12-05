<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;

    class IdFiscaleIVA extends Element {

        protected $_name = "IdFiscaleIVA";

        protected $_children = [
            'idPaese',
            'idCodice'
        ];

        public function __construct($idPaese, $idCodice) {
            $this->setIdPaese($idPaese);
            $this->setIdCodice($idCodice);
        }

        public function setIdPaese($idPaese) {
            parent::setIdPaese($idPaese);
            return $this;
        }

        public function setIdCodice($idCodice) {
            parent::setIdCodice($idCodice);
            return $this;
        }

    }