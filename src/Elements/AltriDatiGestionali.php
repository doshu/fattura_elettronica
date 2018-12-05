<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class AltriDatiGestionali extends Element {

        protected $_name = "AltriDatiGestionali";

        protected $_children = [
            'tipoDato',
            'riferimentoTesto',
            'riferimentoNumero',
            'riferimentoData',
        ];
        
        public function __construct($tipoDato) {
            $this->setTipoDato($tipoDato);
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setTipoDato($tipoDato) {
            parent::setTipoDato($tipoDato);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setRiferimentoTesto($riferimentoTesto) {
            parent::setRiferimentoTesto($riferimentoTesto);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setRiferimentoNumero($riferimentoNumero) {
            parent::setRiferimentoNumero($riferimentoNumero);
            return $this;
        }

        public function setRiferimentoData(\DateTimeInterface $riferimentoData) {
            parent::setRiferimentoData($riferimentoData);
            return $this;
        }

    }