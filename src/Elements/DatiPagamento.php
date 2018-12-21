<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;

    class DatiPagamento extends Element {

        protected $_name = "DatiPagamento";
        
        const TIPO_PAGAMENTO_A_RATE = "TP01";
        
        const TIPO_PAGAMENTO_COMPLETO = "TP02";
        
        const TIPO_ANTICIPO = "TP03";

        protected $_children = [
            'condizioniPagamento',
            'dettaglioPagamento',
        ];
        
        public function __construct($condizioniPagamento) {
            $this->setCondizioniPagamento($condizioniPagamento);
        }

        public function setCondizioniPagamento($condizioniPagamento) {
            parent::setCondizioniPagamento($condizioniPagamento);
            return $this;
        }

        public function addDettaglioPagamento(DettaglioPagamento $dettaglioPagamento) {
            parent::addDettaglioPagamento($dettaglioPagamento);
            return $this;
        }

    }
