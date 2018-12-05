<?php
    
    namespace Inoma\FatturaElettronicaPR\Elements;

    use Inoma\FatturaElettronicaPR\Element;
    use Inoma\FatturaElettronicaPR\Annotations\Filter;

    class Allegati extends Element {

        protected $_name = "Allegati";

        protected $_children = [
            'nomeAttachment',
            'algoritmoCompressione',
            'formatoAttachment',
            'descrizioneAttachment',
            'attachment'
        ];
        
        public function __construct($nomeAttachment, $attachment) {
            $this->setNomeAttachment($nomeAttachment);
            $this>setAttachment($attachment);
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setNomeAttachment($nomeAttachment) {
            parent::setNomeAttachment($nomeAttachment);
            return $this;
        }

        public function setAttachment($attachment) {
            parent::setAttachment($attachment);
            return $this;
        }

        public function setAlgoritmoCompresstione($algoritmoCompressione) {
            parent::setAlgoritmoCompresstione($algoritmoCompressione);
            return $this;
        }

        public function setFormatoAttachment($formatoAttachment) {
            parent::setFormatoAttachment($formatoAttachment);
            return $this;
        }

        /**
         * @Filter(type="normalizedString")
         */
        public function setDescrizioneAttachment($descrizioneAttachment) {
            parent::setDescrizioneAttachment($descrizioneAttachment);
            return $this;
        }

    }