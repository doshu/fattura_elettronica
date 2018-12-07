<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class ScontoMaggiorazione extends Element {

        protected $_name = "ScontoMaggiorazione";
        
        public const TIPO_SCONTO = 'SC';
        
        public const TIPO_MAGGIORAZIONE = 'MG';

        protected $_children = [
            'tipo',
            'percentuale',
            'importo'
        ];

        public function __construct($tipo) {
            $this->setTipo($tipo);
        }

        public function setTipo($tipo) {
            parent::setTipo($tipo);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setPercentuale($percentuale) {
            parent::setPercentuale($percentuale);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setImporto($importo) {
            parent::setImporto($importo);
            return $this;
        }

    }
