<?php
namespace Tpg\ExtjsBundle\Annotation;

use Doctrine\ORM\Mapping\Annotation;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
class UseNull implements Annotation {
    /** @var  bool */
    public $value = true;

    public function  __construct($values){
        if(isset($values['value'])){
            $this->value = $values['value'];
        }
    }
}