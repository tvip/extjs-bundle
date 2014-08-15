<?php
namespace Tpg\ExtjsBundle\Annotation;

use Doctrine\ORM\Mapping\Annotation;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
class DefaultValue implements Annotation
{
    public $value;

    public function __construct($values)
    {
        if (isset($values['value'])) {
            $this->value = $values['value'];
        }

    }
}