<?php

    namespace Inoma\FatturaElettronicaPR\Annotations;

    /**
     * @Annotation
     */
    class Filter
    {
        protected $_type = null;
        protected $_options = [];

        public function __construct($args) {
            $this->_type = $args['type'] ?? null;
            $this->_options = $args['options'] ?? [];
        }

        public function handle($value) {
            switch($this->_type) {
                case 'normalizedString':
                    return $this->_parseNormalizedString($value, $this->_options);
                    break;
                case 'decimal':
                    return $this->_parseDecimal($value, $this->_options);
                case 'uppercase':
                    return strtoupper($value);
                default:
                    return $value;
            }
        }

        protected function _parseNormalizedString($value, $options = []) {
            return str_replace(["\n", "\t", "\r"], "", $value);
        }

        protected function _parseDecimal($value, $options = []) {
            return number_format($value, $options['decimal']??2, '.', '');
        }
    }
