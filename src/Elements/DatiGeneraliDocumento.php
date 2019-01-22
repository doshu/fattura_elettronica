<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiGeneraliDocumento extends Element {

        protected $_name = "DatiGeneraliDocumento";

        protected $_children = [
            'tipoDocumento',
            'divisa',
            'data',
            'numero',
            'datiRitenuta',
            'datiBollo',
            'datiCassaPrevidenziale',
            'scontoMaggiorazione',
            'importoTotaleDocumento',
            'arrotondamento',
            'causale',
            'art73'
        ];

        public function __construct($tipoDocumento, $divisa, \DateTimeInterface $data, $numero) {
            $this->setTipoDocumento($tipoDocumento);
            $this->setDivisa($divisa);
            $this->setData($data);
            $this->setNumero($numero);
        }

        public function setTipoDocumento($tipoDocumento) {
            parent::setTipoDocumento($tipoDocumento);
            return $this;
        }

        public function setDivisa($divisa) {
            parent::setDivisa($divisa);
            return $this;
        }

        public function setData(\DateTimeInterface $data) {
            parent::setData($data);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setNumero($numero) {
            parent::setNumero($numero);
            return $this;
        }

        public function setDatiRitenuta(DatiRitenuta $datiRitenuta) {
            parent::setDatiRitenuta($datiRitenuta);
            return $this;
        }

        public function setDatiBollo(DatiBollo $datiBollo) {
            parent::setDatiBollo($datiBollo);
            return $this;
        }

        public function addDatiCassaPrevidenziale(DatiCassaPrevidenziale $datiCassaPrevidenziale) {
            parent::addDatiCassaPrevidenziale($datiCassaPrevidenziale);
            return $this;
        }

        public function addScontoMaggiorazione(ScontoMaggiorazione $scontoMaggiorazione) {
            parent::addScontoMaggiorazione($scontoMaggiorazione);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setImportoTotaleDocumento($importoTotaleDocumento) {
            parent::setImportoTotaleDocumento($importoTotaleDocumento);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setArrotondamento($arrotondamento) {
            parent::setArrotondamento($arrotondamento);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function addCausale($causale) {
            parent::addCausale($causale);
            return $this;
        }

        public function setArt73($art73) {
            parent::setArt73($art73);
            return $this;
        }

    }
