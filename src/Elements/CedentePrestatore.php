<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class CedentePrestatore extends Element {

        protected $_name = "CedentePrestatore";

        protected $_children = [
            'datiAnagrafici',
            'sede',
            'stabileOrganizzazione',
            'iscrizioneREA',
            'contatti',
            'riferimentoAmministrazione'
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

        public function setIscrizioneRea(IscrizioneREA $iscrizioneREA) {
            parent::setIscrizioneRea($iscrizioneREA);
            return $this;
        }

        public function setContatti(Contatti $contatti) {
            parent::setContatti($contatti);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setRiferimentoAmministrazione($riferimentoAmministrazione) {
            parent::setRiferimentoAmministrazione($riferimentoAmministrazione);
            return $this;
        }

    }