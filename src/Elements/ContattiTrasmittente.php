<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class ContattiTrasmittente extends Element {

        protected $_name = "ContattiTrasmittente";

        protected $_children = [
            'telefono',
            'email'
        ];
        
        public function __construct($telefono, $email) {
            $this->setTelefono($telefono);
            $this->setEmail($email);
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setTelefono($telefono) {
            parent::setTelefono($telefono);
            return $this;
        }

        public function setEmail($email) {
            parent::setEmail($email);
            return $this;
        }


    }