<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class Contatti extends Element {

        protected $_name = "Contatti";

        protected $_children = [
            'telefono',
            'email',
            'fax'
        ];

        /**
         * @Filter(type="normalizedString")
         */
        public function setTelefono($telefono) {
            parent::setTelefono($telefono);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setFax($fax) {
            parent::setFax($fax);
            return $this;
        }

        public function setEmail($email) {
            parent::setEmail($email);
            return $this;
        }

    }