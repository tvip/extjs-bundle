<?php
namespace Tpg\ExtjsBundle\Annotation;

use Doctrine\ORM\Mapping\Annotation;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
class UseMapping implements Annotation {
    public $useMapping = true;
}