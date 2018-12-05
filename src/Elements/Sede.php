<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class Sede extends Element {

        protected $_name = "Sede";

        protected $_children = [
            'indirizzo',
            'CAP',
            'comune',
            'nazione',
            'numeroCivico',
            'provincia',
        ];

        public function __construct($indirizzo, $cap, $comune, $nazione) {
            $this->setIndirizzo($indirizzo);
            $this->setCAP($cap);
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

        public function setCAP($cap) {
            parent::setCAP($cap);
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