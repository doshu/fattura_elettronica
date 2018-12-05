<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiOrdineAcquisto extends Element {

        protected $_name = "DatiOrdineAcquisto";

        protected $_children = [
            'riferimentoNumeroLinea',
            'idDocumento',
            'data',
            'numItem',
            'codiceCommessaConvenzione',
            'codiceCUP',
            'codiceCIG',
        ];

        public function __construct($idDocumento) {
            $this->setIdDocumento($idDocumento);
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setIdDocumento($idDocumento) {
            parent::setIdDocumento($idDocumento);
            return $this;
        }

        public function addRiferimentoNumeroLinea($riferimentoNumeroLinea) {
            parent::addRiferimentoNumeroLinea($riferimentoNumeroLinea);
            return $this;
        }

        public function setData(\DateTimeInterface $data) {
            parent::setData($data);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setNumItem($numItem) {
            parent::setNumItem($numItem);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setCodiceCommessaConvenzione($codiceCommessaConvenzione) {
            parent::setCodiceCommessaConvenzione($codiceCommessaConvenzione);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setCodiceCUP($codiceCUP) {
            parent::setCodiceCUP($codiceCUP);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setCodiceCIG($codiceCIG) {
            parent::setCodiceCIG($codiceCIG);
            return $this;
        }

    }