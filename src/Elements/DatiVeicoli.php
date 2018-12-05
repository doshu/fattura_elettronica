<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiVeicoli extends Element {

        protected $_name = "DatiVeicoli";

        protected $_children = [
            'data',
            'totalePercorso',
        ];
        
        public function __construct(\DateTimeInterface $data, $totalePercorso) {
            $this->setData($data);
            $this->setTotalePercorso($totalePercorso);
        }

        public function setData(\DateTimeInterface $data) {
            parent::setData($data);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setTotalePercorso($totalePercorso) {
            parent::setTotalePercorso($totalePercorso);
            return $this;
        }
    }