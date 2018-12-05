<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiRitenuta extends Element {

        protected $_name = "DatiRitenuta";

        protected $_children = [
            'tipoRitenuta',
            'importoRitenuta',
            'aliquotaRitenuta',
            'causalePagamento',
        ];

        public function __construct($tipoRitenuta, $importoRitenuta, $aliquotaRitenuta, $causalePagamento) {
            $this->setTipoRitenuta($tipoRitenuta);
            $this->setImportoRitenuta($importoRitenuta);
            $this->setAliquotaRitenuta($aliquotaRitenuta);
            $this->setCausalePagamento($causalePagamento);
        }

        public function setTipoRitenuta($tipoRitenuta) {
            parent::setTipoRitenuta($tipoRitenuta);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setImportoRitenuta($importoRitenuta) {
            parent::setImportoRitenuta($importoRitenuta);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setAliquotaRitenuta($aliquotaRitenuta) {
            parent::setAliquotaRitenuta($aliquotaRitenuta);
            return $this;
        }

        public function setCausalePagamento($causalePagamento) {
            parent::setCausalePagamento($causalePagamento);
            return $this;
        }

    }