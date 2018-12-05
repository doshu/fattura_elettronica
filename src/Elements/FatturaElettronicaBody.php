<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;

    class FatturaElettronicaBody extends Element {

        protected $_name = "FatturaElettronicaBody";

        protected $_children = [
            'datiGenerali',
            'datiBeniServizi',
            'datiVeicoli',
            'datiPagamento',
            'allegati'
        ];
        
    }