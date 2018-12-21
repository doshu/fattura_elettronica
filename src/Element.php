<?php
    namespace Inoma\FatturaElettronicaPR;

    use Cake\Utility\Inflector;

    abstract class Element {

        protected $_name = "";

        protected $_children = [];

        protected $_data = [];

        protected $_dates = [];

        public function __call($name, $arguments) {
            if(preg_match('/^get(.*)$/', $name, $matches)) {
                if(isset($matches[1]) && !empty(trim($matches[1]))) {
                    $key = Inflector::underscore(trim($matches[1]));
                    return isset($this->_data[$key])?$this->_data[$key]:null;
                }
            }
            if(preg_match('/^set(.*)$/', $name, $matches)) {
                if(isset($matches[1]) && !empty(trim($matches[1]))) {
                    $key = Inflector::underscore(trim($matches[1]));
                    $this->_set($key, (isset($arguments[0])?$arguments[0]:null), $name);
                    //$this->_data[$key] = ($arguments[0] ?? null);
                    return null;
                }
            }
            if(preg_match('/^add(.*)$/', $name, $matches)) {
                if(isset($matches[1]) && !empty(trim($matches[1]))) {
                    $key = Inflector::underscore(trim($matches[1]));
                    $this->_append($key, (isset($arguments[0])?$arguments[0]:null), $name);
                    //$this->_data[$key][] = ($arguments[0] ?? null);
                    return null;
                }
            }
            throw new \Error("call to undefined method $name");
        }

        protected function _getMethodAnnotations($method) {
            try {
                $reflectionClass = new \ReflectionClass($this);
                $method = $reflectionClass->getMethod($method);

                $reader = new \Doctrine\Common\Annotations\AnnotationReader();
                
                $annotations = $reader->getMethodAnnotations(
                    $method
                );

                return $annotations;
            }
            catch(\ReflectionException $e) {
                return [];
            }
        }

        protected function _set($key, $value, $funcName) {
            $annotations = $this->_getMethodAnnotations($funcName);
            foreach($annotations as $annotation) {
                if($annotation instanceof \Inoma\FatturaElettronicaPR\Annotations\Filter) {
                    $value = $annotation->handle($value);
                }
            }
            $this->_data[$key] = $value;
        }


        protected function _append($key, $value, $funcName) {
            if(!isset($this->_data[$key]) || !is_array($this->_data[$key])) {
                $this->_data[$key] = [];
            }

            $annotations = $this->_getMethodAnnotations($funcName);
            foreach($annotations as $annotation) {
                if($annotation instanceof Inoma\FatturaElettronicaPR\Annotations\Filter) {
                    $value = $filter->handle($value);
                }
            }
            $this->_data[$key][] = $value;
        }


        
        public function toXML($dom) {
            $element = $dom->createElement($this->_name);
            
            foreach($this->_children as $key => $child) {
                if(is_string($key)) {
                    $getter = "get".Inflector::humanize($key);
                    $name = $child;
                }
                else {
                    $getter = "get".Inflector::humanize($child);
                    $name = Inflector::humanize($child);
                }
                $value = $this->$getter();
                if($value !== null) {
                    if(is_array($value)) {
                        foreach($value as $el) {
                            $this->_appendChild($el, $name, $element, $dom);
                        }
                    }
                    else {
                        $this->_appendChild($value, $name, $element, $dom);
                    }
                }
            }
            
            return $element;
        }

        protected function _appendChild($value, $name, $element, $dom) {
            if($value instanceof \Inoma\FatturaElettronicaPR\Element) {
                $element->appendChild($value->toXML($dom));
            }
            else {
                if($value instanceof \DateTimeInterface) {
                    $value = $value->format(isset($this->_dates[$name])?$this->_dates[$name]:'Y-m-d');
                }
                elseif(is_double($value)) {
                    $value = number_format($value, 2);
                }
                $element->appendChild($dom->createElement($name, $value));
            }
        }

        
    }
