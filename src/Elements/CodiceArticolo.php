<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class CodiceArticolo extends Element {

        protected $_name = "CodiceArticolo";

        protected $_children = [
            'codiceTipo',
            'codiceValore',
        ];
        
        public function __construct($codiceTipo, $codiceValore) {
            $this->setCodiceTipo($codiceTipo);
            $this->setCodiceValore($codiceValore);
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setCodiceTipo($codiceTipo) {
            parent::setCodiceTipo($codiceTipo);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setCodiceValore($codiceValore) {
            parent::setCodiceValore($codiceValore);
            return $this;
        }

    }
