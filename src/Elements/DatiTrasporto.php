<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiTrasporto extends Element {

        protected $_name = "DatiTrasporto";

        protected $_children = [
            'datiAnagraficiVettore',
            'mezzoTrasporto',
            'causaleTrasporto',
            'numeroColli',
            'descrizione',
            'unitaMisuraPeso',
            'pesoLordo',
            'pesoNetto',
            'dataOraRitiro',
            'dataInizioTrasporto',
            'tipoResa',
            'indirizzoResa',
            'dataOraConsegna',
        ];

        protected $_dates = [
            'DataOraRitiro' => 'Y-m-d\TH:i:s',
            'DataInizioTrasporto' => 'Y-m-d\TH:i:s',
            'DataOraConsegna' => 'Y-m-d\TH:i:s'
        ];

        public function setDatiAnagraficiVettore(DatiAnagraficiVettore $datiAnagraficiVettore) {
            parent::setDatiAnagraficiVettore($datiAnagraficiVettore);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setMezzoTrasporto($mezzoTrasporto) {
            parent::setMezzoTrasporto($mezzoTrasporto);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setCausaleTrasporto($causaleTrasporto) {
            parent::setCausaleTrasporto($causaleTrasporto);
            return $this;
        }

        public function setNumeroColli($numeroColli) {
            parent::setNumeroColli($numeroColli);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setDescrizione($descrizione) {
            parent::setDescrizione($descrizione);
            return $this;
        }
        
        /**
         * @Filter(type="normalizedString")
         */
        public function setUnitaMisuraPeso($unitaMisuraPeso) {
            parent::setUnitaMisuraPeso($unitaMisuraPeso);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setPesoLordo($pesoLordo) {
            parent::setPesoLordo($pesoLordo);
            return $this;
        }

        /**
         * @Filter(type="decimal")
         */
        public function setPesoNetto($pesoNetto) {
            parent::setPesoNetto($pesoNetto);
            return $this;
        }

        public function setDataOraRitiro(\DateTimeInterface $dataOraRitiro) {
            parent::setDataOraRitiro($dataOraRitiro);
            return $this;
        }

        public function setDataInizioTrasporto(\DateTimeInterface $dataInizioTrasporto) {
            parent::setDataInizioTrasporto($dataInizioTrasporto);
            return $this;
        }

        public function setTipoResa($tipoResa) {
            parent::setTipoResa($tipoResa);
            return $this;
        }

        public function setIndirizzoResa(IndirizzoResa $indirizzoResa) {
            parent::setIndirizzoResa($indirizzoResa);
            return $this;
        }

        public function setDataOraConsegna(\DateTimeInterface $dataOraConsegna) {
            parent::setDataOraConsegna($dataOraConsegna);
            return $this;
        }
        
    }