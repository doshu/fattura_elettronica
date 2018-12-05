<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;

    class CessionarioCommittente extends Element {

        protected $_name = "CessionarioCommittente";

        protected $_children = [
            'datiAnagrafici',
            'sede',
            'stabileOrganizzazione',
            'rappresentanteFiscale',
        ];

        public function __construct(DatiAnagrafici $datiAnagrafici, Sede $sede) {
            $this->setDatiAnagrafici($datiAnagrafici);
            $this->setSede($sede);
        }

        public function setDatiAnagrafici(DatiAnagrafici $datiAnagrafici) {
            parent::setDatiAnagrafici($datiAnagrafici);
            return $this;
        }

        public function setSede(Sede $sede) {
            parent::setSede($sede);
            return $this;
        }

        public function setStabileOrganizzazione(StabileOrganizzazione $stabileOrganizzazione) {
            parent::setStabileOrganizzazione($stabileOrganizzazione);
            return $this;
        }

        public function setRappresentanteFiscale(RappresentanteFiscaleCessionarioCommittente $rappresentanteFiscale) {
            parent::setRappresentanteFiscale($rappresentanteFiscale);
            return $this;
        }

        
    }