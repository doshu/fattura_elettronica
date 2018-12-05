<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;

    class FatturaPrincipale extends Element {

        protected $_name = "FatturaPrincipale";

        protected $_children = [
            'numeroFatturaPrincipale',
            'dataFatturaPrincipale',
        ];

        
        public function __construct($numeroFatturaPrincipale, \DateTimeInterface $dataFatturaPrincipale) {
            $this->setNumeroFatturaPrincipale($numeroFatturaPrincipale);
            $this->setDataFatturaPrincipale($dataFatturaPrincipale);
        }

        public function setNumeroFatturaPrincipale($numeroFatturaPrincipale) {
            parent::setNumeroFatturaPrincipale($numeroFatturaPrincipale);
            return $this;
        }

        public function setDataFatturaPrincipale(\DateTimeInterface $dataFatturaPrincipale) {
            parent::setDataFatturaPrincipale($dataFatturaPrincipale);
            return $this;
        }
        
    }