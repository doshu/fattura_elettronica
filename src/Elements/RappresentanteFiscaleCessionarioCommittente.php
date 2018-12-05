<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class RappresentanteFiscaleCessionarioCommittente extends Element {

        protected $_name = "RappresentanteFiscale";

        protected $_children = [
            'idFiscaleIVA',
            'denominazione',
            'nome',
            'cognome',
        ];

        public function __construct($idFiscaleIVA) {
            $this->setIdFiscaleIVA($idFiscaleIVA);
        }

        public function setIdFiscaleIVA($idFiscaleIVA) {
            parent::setIdFiscaleIVA($idFiscaleIVA);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setDenominazione($denominazione) {
            parent::setDenominazione($denominazione);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setNome($nome) {
            parent::setNome($nome);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setCognome($cognome) {
            parent::setCognome($cognome);
            return $this;
        }

    }