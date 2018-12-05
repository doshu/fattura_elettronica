<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiDDT extends Element {

        protected $_name = "DatiDDT";

        protected $_children = [
            'numeroDDT',
            'dataDDT',
            'riferimentoNumeroLinea'
        ];

        public function __construct($numeroDDT, \DateTimeInterface $dataDDT) {
            $this->setNumeroDDT($numeroDDT);
            $this->setDataDDT($dataDDT);
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setNumeroDDT($numeroDDT) {
            parent::setNumeroDDT($numeroDDT);
            return $this;
        }

        public function setDataDDT(\DateTimeInterface $dataDDT) {
            parent::setDataDDT($dataDDT);
            return $this;
        }

        public function addRiferimentoNumeroLinea($riferimentoNumeroLinea) {
            parent::addRiferimentoNumeroLinea($riferimentoNumeroLinea);
            return $this;
        }

    }