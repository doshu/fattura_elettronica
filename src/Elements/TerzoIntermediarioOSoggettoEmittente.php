<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;

    class TerzoIntermediarioOSoggettoEmittente extends Element {

        protected $_name = "TerzoIntermediarioOSoggettoEmittente";

        protected $_children = [
            'datiAnagrafici'
        ];

        public function __construct(DatiAnagrafici $datiAnagrafici) {
            $this->setDatiAnagrafici($datiAnagrafici);
        }

        public function setDatiAnagrafici(DatiAnagrafici $datiAnagrafici) {
            parent::setDatiAnagrafici($datiAnagrafici);
            return $this;
        }
    }