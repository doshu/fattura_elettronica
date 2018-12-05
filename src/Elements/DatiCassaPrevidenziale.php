<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiCassaPrevidenziale extends Element {

        protected $_name = "DatiCassaPrevidenziale";

        protected $_children = [
            'tipoCassa',
            'alCassa',
            'importoContributo',
            'aliquotaIVA',
            'imponibileCassa',
            'ritenuta',
            'natura',
            'riferimentoAmministrazione',
        ];

        public function __construct($tipoCassa, $alCassa, $importoContributoCassa, $aliquotaIVA) {
            $this->setTipoCassa($tipoCassa);
            $this->setAlCassa($alCassa);
            $this->setImportoContributoCassa($importoContributoCassa);
            $this->setAliquotaIVA($aliquotaIVA);
        }

        public function setTipoCassa($tipoCassa) {
            parent::setTipoCassa($tipoCassa);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setAlCassa($alCassa) {
            parent::setAlCassa($alCassa);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setImportoContributoCassa($importoContributoCassa) {
            parent::setImportoContributoCassa($importoContributoCassa);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setAliquotaIVA($aliquotaIVA) {
            parent::setAliquotaIVA($aliquotaIVA);
            return $this;
        }

        public function setImponibileCassa($imponibileCassa) {
            parent::setImponibileCassa($imponibileCassa);
            return $this;
        }

        public function setRitenuta($ritenuta) {
            parent::setRitenuta($ritenuta);
            return $this;
        }

        public function setNatura($natura) {
            parent::setNatura($natura);
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