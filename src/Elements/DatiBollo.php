<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiBollo extends Element {

        protected $_name = "DatiBollo";

        protected $_children = [
            'bolloVirtuale',
            'importoBollo'
        ];

        public function __construct($bolloVirtuale, $importoBollo) {
            $this->setBolloVirtuale($bolloVirtuale);
            $this->setImportoBollo($importoBollo);
        }

        public function setBolloVirtuale($bolloVirtuale) {
            parent::setBolloVirtuale($bolloVirtuale);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setImportoBollo($importoBollo) {
            parent::setImportoBollo($importoBollo);
            return $this;
        }

    }