<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;

    class FatturaElettronicaHeader extends Element {

        protected $_name = "FatturaElettronicaHeader";

        protected $_children = [
            'datiTrasmissione',
            'cedentePrestatore',
            'rappresentanteFiscale',
            'cessionarioCommittente',
            'terzoIntermediarioOSoggettoEmittente',
            'soggettoEmittente'
        ];
        
    }