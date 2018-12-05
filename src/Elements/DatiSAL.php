<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;

    class DatiSAL extends Element {

        protected $_name = "DatiSAL";

        protected $_children = [
            'riferimentoFase',
        ];

        public function __construct($riferimentoFase) {
            $this->setRiferimentoFase($riferimentoFase);
        }

        public function setRiferimentoFase($riferimentoFase) {
            parent::setRiferimentoFase($riferimentoFase);
            return $this;
        }

    }