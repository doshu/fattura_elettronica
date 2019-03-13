<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiRiepilogo extends Element {

        protected $_name = "DatiRiepilogo";

        protected $_children = [
            'aliquotaIVA',
            'natura',
            'speseAccessorie',
            'arrotondamento',
            'imponibileImporto',
            'imposta',
            'esigibilitaIVA',
            'riferimentoNormativo'
        ];

        public function __construct($aliquotaIVA, $imponibileImporto, $imposta) {
            $this->setAliquotaIVA($aliquotaIVA);
            $this->setImponibileImporto($imponibileImporto);
            $this->setImposta($imposta);
        }

        /**
         * @Filter(type="decimal")
         */
        public function setAliquotaIVA($aliquotaIVA) {
            parent::setAliquotaIVA($aliquotaIVA);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setImponibileImporto($imponibileImporto) {
            parent::setImponibileImporto($imponibileImporto);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setImposta($imposta) {
            parent::setImposta($imposta);
            return $this;
        }
        
        public function setNatura($natura) {
            parent::setNatura($natura);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setSpeseAccessorie($speseAccessorie) {
            parent::setSpeseAccessorie($speseAccessorie);
            return $this;
        }

        /**
         * @Filter(type="decimal", options={"decimal":8})
         */
        public function setArrotondamento($arrotondamento) {
            parent::setArrotondamento($arrotondamento);
            return $this;
        }

        public function setEsigibilitaIVA($esigibilitaIVA) {
            parent::setEsigibilitaIVA($esigibilitaIVA);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setRiferimentoNormativo($riferimentoNormativo) {
            parent::setRiferimentoNormativo($riferimentoNormativo);
            return $this;
        }

    }
