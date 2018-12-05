<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class Anagrafica extends Element {

        protected $_name = 'Anagrafica';

        protected $_children = [
            'denominazione',
            'nome',
            'cognome',
            'titolo',
            'codEORI'
        ];

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

        /**
         * @Filter(type="normalizedString")
         */
        public function setTitolo($titolo) {
            parent::setTitolo($titolo);
            return $this;
        }

        public function setCodEORI($codEORI) {
            parent::setCodEORI($codEORI);
            return $this;
        }

    }