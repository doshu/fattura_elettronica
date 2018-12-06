<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class DatiTrasmissione extends Element {

        protected $_name = "DatiTrasmissione";

        protected $_children = [
            'idTrasmittente',
            'progressivoInvio',
            'formatoTrasmissione',
            'codiceDestinatario',
            'contattiTrasmittente',
            'PECDestinatario',
        ];
        
        public function __construct(IdTrasmittente $idTrasmittente, $progressivoInvio, $formatoTrasmissione, $codiceDestinatario) {
            $this->setIdTrasmittente($idTrasmittente);
            $this->setProgressivoInvio($progressivoInvio);
            $this->setFormatoTrasmissione($formatoTrasmissione);
            $this->setCodiceDestinatario($codiceDestinatario);
        }

        public function setIdTrasmittente(IdTrasmittente $idTrasmittente) {
            parent::setIdTrasmittente($idTrasmittente);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setProgressivoInvio($progressivoInvio) {
            parent::setProgressivoInvio($progressivoInvio);
            return $this;
        }

        public function setFormatoTrasmissione($formatoTrasmissione) {
            parent::setFormatoTrasmissione($formatoTrasmissione);
            return $this;
        }

        public function setCodiceDestinatario($codiceDestinatario) {
            parent::setCodiceDestinatario($codiceDestinatario);
            return $this;
        }

        public function setContattiTrasmittente(ContattiTrasmittente $contattiTrasmittente) {
            parent::setContattiTrasmittente($contattiTrasmittente);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setPECDestinatario($pecDestinatario) {
            parent::setPECDestinatario($pecDestinatario);
            return $this;
        }

    }
