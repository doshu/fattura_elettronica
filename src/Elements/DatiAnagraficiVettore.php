<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiAnagraficiVettore extends Element {

        protected $_name = 'DatiAnagraficiVettore';

        protected $_children = [
            'idFiscaleIVA',
            'codiceFiscale',
            'anagrafica',
            'numeroLicenzaGuida'
        ];

        public function __construct(IdFiscaleIVA $idFiscaleIva, Anagrafica $anagrafica) {
            $this->setIdFiscaleIVA($idFiscaleIva);
            $this->setAnagrafica($anagrafica);
        }

        public function setIdFiscaleIVA(IdFiscaleIVA $idFiscaleIva) {
            parent::setIdFiscaleIVA($idFiscaleIva);
            return $this;
        }

        public function setAnagrafica(Anagrafica $anagrafica) {
            parent::setAnagrafica($anagrafica);
            return $this;
        }

        public function setCodiceFiscale($codiceFiscale) {
            parent::setCodiceFiscale($codiceFiscale);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setNumeroLicenzaGuida($numeroLicenzaGuida) {
            parent::setNumeroLicenzaGuida($numeroLicenzaGuida);
            return $this;
        }

    }