<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;

    class DatiBeniServizi extends Element {

        protected $_name = "DatiBeniServizi";

        protected $_children = [
            'dettaglioLinee',
            'datiRiepilogo',
        ];
        
        public function addDettaglioLinee(DettaglioLinee $dettaglioLinee) {
            parent::addDettaglioLinee($dettaglioLinee);
            return $this;
        }

        public function addDatiRiepilogo(DatiRiepilogo $datiRiepilogo) {
            parent::addDatiRiepilogo($datiRiepilogo);
            return $this;
        }
    }