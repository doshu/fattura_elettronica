<?php

    namespace Inoma\FatturaElettronicaPR\Annotations;

    /**
     * @Annotation
     */
    class Filter
    {
        protected $_type = null;

        public function __construct($args) {
            $this->_type = $args['type'] ?? null;
        }

        public function handle($value) {
            switch($this->_type) {
                case 'normalizedString':
                    return $this->_parseNormalizedString($value);
                    break;
                case 'decimal':
                    return $this->_parseDecimal($value);
                case 'uppercase':
                    return strtoupper($value);
                default:
                    return $value;
            }
        }

        protected function _parseNormalizedString($value) {
            return str_replace(["\n", "\t", "\r"], "", $value);
        }

        protected function _parseDecimal($value) {
            return number_format($value, 2);
        }
    }
