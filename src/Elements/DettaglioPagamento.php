<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DettaglioPagamento extends Element {

        protected $_name = "DettaglioPagamento";

        protected $_children = [
            'beneficiario',
            'modalitaPagamento',
            'dataRiferimentoTerminiPagamento',
            'giorniTerminiPagamento',
            'dataScadenzaPagamento',
            'importoPagamento',
            'codUfficioPostale',
            'cognomeQuietanze',
            'nomeQuietanze',
            'CFQuietanze',
            'titoloQuietanze',
            'istitutoFinanziario',
            'IBAN',
            'ABI',
            'CAB',
            'BIC',
            'scontoPagamentoAnticipato',
            'dataLimitePagamentoAnticipato',
            'penalitaPagamentiRItardati',
            'dataDecorrenzaPenale',
            'codicePagamento'
        ];
        
        public function __construct($modalitaPagamento, $importoPagamento) {
            $this->setModalitaPagamento($modalitaPagamento);
            $this->setImportoPagamento($importoPagamento);
        }

        public function setModalitaPagamento($modalitaPagamento) {
            parent::setModalitaPagamento($modalitaPagamento);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setImportoPagamento($importoPagamento) {
            parent::setImportoPagamento($importoPagamento);
            return $this;
        }

        public function setBeneficiario($beneficiario) {
            parent::setBeneficiario($beneficiario);
            return $this;
        }

        public function setDataRiferimentoTerminiPagamento(\DateTimeInterface $dataRiferimentoTerminiPagamento) {
            parent::setDataRiferimentoTerminiPagamento($dataRiferimentoTerminiPagamento);
            return $this;
        }

        public function setGiorniTerminiPagamento($giorniTerminiPagamento) {
            parent::setGiorniTerminiPagamento($giorniTerminiPagamento);
            return $this;
        }

        public function setDataScadenzaPagamento(\DateTimeInterface $dataScadenzaPagamento) {
            parent::setDataScadenzaPagamento($dataScadenzaPagamento);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setCodUfficioPostale($codUfficioPostale) {
            parent::setCodUfficioPostale($codUfficioPostale);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setCognomeQuietanze($cognomeQuietanze) {
            parent::setCognomeQuietanze($cognomeQuietanze);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setNomeQuietanze($nomeQuietanze) {
            parent::setNomeQuietanze($nomeQuietanze);
            return $this;
        }

        public function setCFQuietanze($cfQuietanze) {
            parent::setCFQuietanze($cfQuietanze);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setTitoloQuietanze($titoloQuietanze) {
            parent::setTitoloQuietanze($titoloQuietanze);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setIstitutoFinanziario($istitutoFinanziario) {
            parent::setIstitutoFinanziario($istitutoFinanziario);
            return $this;
        }

        public function setIBAN($IBAN) {
            parent::setIBAN($IBAN);
            return $this;
        }

        public function setABI($ABI) {
            parent::setABI($ABI);
            return $this;
        }

        public function setCAB($CAB) {
            parent::setCAB($CAB);
            return $this;
        }

        public function setBIC($BIC) {
            parent::setBIC($BIC);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setScontoPagamentoAnticipato($scontoPagamentoAnticipato) {
            parent::setScontoPagamentoAnticipato($scontoPagamentoAnticipato);
            return $this;
        }

        public function setDataLimitePagamentoAnticipato(\DateTimeInterface $dataLimitePagamentoAnticipato) {
            parent::setDataLimitePagamentoAnticipato($dataLimitePagamentoAnticipato);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setPenalitaPagamentiRitardati($penalitaPagamentiRitardati) {
            parent::setPenalitaPagamentiRitardati($penalitaPagamentiRitardati);
            return $this;
        }

        public function setDataDecorrenzaPenale(\DateTimeInterface $dataDecorrenzaPenale) {
            parent::setDataDecorrenzaPenale($dataDecorrenzaPenale);
            return $this;
        }

        public function setCodicePagamento($codicePagamento) {
            parent::setCodicePagamento($codicePagamento);
            return $this;
        }

    }