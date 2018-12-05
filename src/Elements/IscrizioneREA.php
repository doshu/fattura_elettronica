<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;


    class IscrizioneREA extends Element {

        protected $_name = "IscrizioneREA";

        protected $_children = [
            'ufficio',
            'numeroREA',
            'statoLiquidazione'
        ];

        public function __construct($ufficio, $numeroREA, $statoLiquidazione) {
            $this->setUfficio($ufficio);
            $this->setNumeroREA($numeroREA);
            $this->setStatoLiquidazione($statoLiquidazione);
        }

        public function setUfficio($ufficio) {
            parent::setUfficio($ufficio);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setNumeroREA($numeroREA) {
            parent::setNumeroREA($numeroREA);
            return $this;
        }

        public function setStatoLiquidazione($statoLiquidazione) {
            parent::setStatoLiquidazione($statoLiquidazione);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setCapitaleSociale($capitaleSociale) {
            parent::setCapitaleSociale($capitaleSociale);
            return $this;
        }

        public function setSocioUnico($socioUnico) {
            parent::setSocioUnico($socioUnico);
            return $this;
        }

    }