<?php
namespace DeepCopy\TypeFilter\Spl;

<<<<<<< HEAD
<<<<<<< HEAD
use ArrayObject;
=======
>>>>>>> eventsResources
=======
>>>>>>> eventsResources
use DeepCopy\DeepCopy;
use DeepCopy\TypeFilter\TypeFilter;

/**
 * In PHP 7.4 the storage of an ArrayObject isn't returned as
 * ReflectionProperty. So we deep copy its array copy.
 */
final class ArrayObjectFilter implements TypeFilter
{
    /**
     * @var DeepCopy
     */
    private $copier;

    public function __construct(DeepCopy $copier)
    {
        $this->copier = $copier;
    }

    /**
     * {@inheritdoc}
     */
    public function apply($arrayObject)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return new ArrayObject(
            $this->copier->copy($arrayObject->getArrayCopy()),
            $arrayObject->getFlags(),
            $arrayObject->getIteratorClass()
        );
=======
=======
>>>>>>> eventsResources
        $clone = clone $arrayObject;
        foreach ($arrayObject->getArrayCopy() as $k => $v) {
            $clone->offsetSet($k, $this->copier->copy($v));
        }

        return $clone;
<<<<<<< HEAD
>>>>>>> eventsResources
=======
>>>>>>> eventsResources
    }
}

