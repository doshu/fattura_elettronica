<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiAnagrafici extends Element {

        protected $_name = "DatiAnagrafici";

        protected $_children = [
            'idFiscaleIVA',
            'codiceFiscale',
            'anagrafica',
            'alboProfessionale',
            'provinciaAlbo',
            'numeroIscrizioneAlbo',
            'dataIscrizioneAlbo',
            'regimeFiscale',
        ];

        public function __construct(Anagrafica $anagrafica, $regimeFiscale) {
            $this->setAnagrafica($anagrafica);
            $this->setRegimeFiscale($regimeFiscale);
        }

        public function setIdFiscaleIVA(IdFiscaleIVA $idFiscaleIva) {
            parent::setIdFiscaleIVA($idFiscaleIva);
            return $this;
        }

        public function setAnagrafica(Anagrafica $anagrafica) {
            parent::setAnagrafica($anagrafica);
            return $this;
        }

        public function setRegimeFiscale($regimeFiscale) {
            parent::setRegimeFiscale($regimeFiscale);
            return $this;
        }

        /**
         * @Filter(type="uppercase")
         */
        public function setCodiceFiscale($codiceFiscale) {
            parent::setCodiceFiscale($codiceFiscale);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setAlboProfessionale($alboProfessionale) {
            parent::setAlboProfessionale($alboProfessionale);
            return $this;
        }

        public function setProvinciaAlbo($provinciaAlbo) {
            parent::setProvinciaAlbo($provinciaAlbo);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setNumeroIscrizioneAlbo($numeroIscrizioneAlbo) {
            parent::setNumeroIscrizioneAlbo($numeroIscrizioneAlbo);
            return $this;
        }

        public function setDataIscrizioneAlbo(\DateTimeInterface $dataIscrizioneAlbo) {
            parent::setDataIscrizioneAlbo($dataIscrizioneAlbo);
            return $this;
        }


    }
