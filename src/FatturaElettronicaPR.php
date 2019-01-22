<?php

    namespace Inoma\FatturaElettronicaPR;

    use Doctrine\Common\Annotations\AnnotationRegistry;

    class FatturaElettronicaPR extends Element {
    
        public const FORMATO_TRASMISSIONE = 'FPR12';
        public const DEFAULT_CODICE_DESTINATARIO = '0000000';

        protected $_header = null;
        protected $_body = null;

        public function __construct(
            Elements\DatiTrasmissione $datiTrasmissione,
            Elements\CedentePrestatore $cedentePrestatore,
            Elements\CessionarioCommittente $cessionarioCommittente,
            Elements\DatiGenerali $datiGenerali,
            Elements\DatiBeniServizi $datiBeniServizi
        ) {
            $this->_header = new Elements\FatturaElettronicaHeader();
            $this->_body = new Elements\FatturaElettronicaBody();

            $this->setDatiTrasmissione($datiTrasmissione);
            $this->setCedentePrestatore($cedentePrestatore);
            $this->setCessionarioCommittente($cessionarioCommittente);
            $this->setDatiGenerali($datiGenerali);
            $this->setDatiBeniServizi($datiBeniServizi);
        }

        public static function init() {
            AnnotationRegistry::registerLoader(spl_autoload_functions()[0]);
        }
        
        public function getBody() {
            return $this->_body;
        }
        
        public function getHeader() {
            return $this->_header;
        }

        public function setDatiTrasmissione(Elements\DatiTrasmissione $datiTrasmissione) {
            $this->_header->setDatiTrasmissione($datiTrasmissione);
            return $this;
        }

        public function setCedentePrestatore(Elements\CedentePrestatore $cedentePrestatore) {
            $this->_header->setCedentePrestatore($cedentePrestatore);
            return $this;
        }

        public function setRappresentanteFiscale(Elements\RappresentanteFiscale $rappresentanteFiscale) {
            $this->_header->setRappresentanteFiscale($rappresentanteFiscale);
            return $this;
        }

        public function setCessionarioCommittente(Elements\CessionarioCommittente $cessionarioCommittente) {
            $this->_header->setCessionarioCommittente($cessionarioCommittente);
            return $this;
        }

        public function setTerzoIntermediarioOSoggettoEmittente(Elements\TerzoIntermediarioOSoggettoEmittente $terzoIntermediarioOSoggettoEmittente) {
            $this->_header->setTerzoIntermediarioOSoggettoEmittente($terzoIntermediarioOSoggettoEmittente);
            return $this;
        }

        public function setSoggettoEmittente($soggettoEmittente) {
            $this->_header->setSoggettoEmittente($soggettoEmittente);
            return $this;
        }

        public function setDatiGenerali(Elements\DatiGenerali $datiGenerali) {
            $this->_body->setDatiGenerali($datiGenerali);
            return $this;
        }

        public function setDatiBeniServizi(Elements\DatiBeniServizi $datiBeniServizi) {
            $this->_body->setDatiBeniServizi($datiBeniServizi);
            return $this;
        }

        public function setDatiVeicoli(Elements\DatiVeicoli $datiVeicoli) {
            $this->_body->setDatiVeicoli($datiVeicoli);
            return $this;
        }

        public function addDatiPagamento(Elements\DatiPagamento $datiPagamento) {
            $this->_body->addDatiPagamento($datiPagamento);
            return $this;
        }

        public function addAllegati(Elements\Allegati $allegati) {
            $this->_body->addAllegati($allegati);
            return $this;
        }

        public function build() {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $root = $dom->createElementNS(
                'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2',
                'p:FatturaElettronica'
            );
            $root->setAttributeNS(
                'http://www.w3.org/2000/xmlns/', // xmlns namespace URI
                'xmlns:ds',
                'http://www.w3.org/2000/09/xmldsig#'
            );
            $root->setAttributeNS(
                'http://www.w3.org/2000/xmlns/', // xmlns namespace URI
                'xmlns:xsi',
                'http://www.w3.org/2001/XMLSchema-instance'
            );
            $root->setAttribute(
                'xsi:schemaLocation',
                'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd'
            );
            $root->setAttribute('versione', "FPR12");
            
            $root->appendChild($this->_header->toXML($dom));
            $root->appendChild($this->_body->toXML($dom));
            
            $dom->appendChild($root);

            return $dom;
        }

        public function errors() {
            libxml_use_internal_errors(true);
            $dom = $this->build();
            $isValid = $dom->schemaValidate($this->_getSchemaFilename());
            if(!$isValid) {
                return libxml_get_errors();
            }
            return [];
        }

        public function getFilename($progressive) {
            $idFiscaleInviantePaese = $this->_header->getDatiTrasmissione()
                ->getIdTrasmittente()
                ->getIdPaese();
            $idFiscaleInvianteCodice = $this->_header->getDatiTrasmissione()
                ->getIdTrasmittente()
                ->getIdCodice();
            
            return $idFiscaleInviantePaese.$idFiscaleInvianteCodice.'_'.$progressive.'.xml';
        }

        protected function _getSchemaFilename() {
            return dirname(__FILE__).DIRECTORY_SEPARATOR.'Schemas'.DIRECTORY_SEPARATOR.'Schema_del_file_xml_FatturaPA_versione_1.2.1.xsd';
        }
    }
