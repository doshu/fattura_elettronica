<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class IndirizzoResa extends Element {

        protected $_name = "IndirizzoResa";

        protected $_children = [
            'indirizzo',
            'numeroCivico',
            'CAP',
            'comune',
            'provincia',
            'nazione',
        ];

        
        public function __construct($indirizzo, $CAP, $comune, $nazione) {
            $this->setIndirizzo($indirizzo);
            $this->setCAP($CAP);
            $this->setComune($comune);
            $this->setNazione($nazione);
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setIndirizzo($indirizzo) {
            parent::setIndirizzo($indirizzo);
            return $this;
        }

        public function setCAP($CAP) {
            parent::setCAP($CAP);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setComune($comune) {
            parent::setComune($comune);
            return $this;
        }

        public function setNazione($nazione) {
            parent::setNazione($nazione);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setNumeroCivico($numeroCivico) {
            parent::setNumeroCivico($numeroCivico);
            return $this;
        }

        public function setProvincia($provincia) {
            parent::setProvincia($provincia);
            return $this;
        }
        
    }