<?php

namespace Illuminate\Support;

use ReflectionClass;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use ReflectionNamedType;
>>>>>>> eventsResources
=======
use ReflectionNamedType;
>>>>>>> eventsResources

class Reflector
{
    /**
     * Get the class name of the given parameter's type, if possible.
     *
     * @param  \ReflectionParameter  $parameter
     * @return string|null
     */
    public static function getParameterClassName($parameter)
    {
        $type = $parameter->getType();

<<<<<<< HEAD
<<<<<<< HEAD
        return ($type && ! $type->isBuiltin()) ? $type->getName() : null;
=======
=======
>>>>>>> eventsResources
        if (! $type instanceof ReflectionNamedType || $type->isBuiltin()) {
            return;
        }

        $name = $type->getName();

        if ($name === 'self') {
            return $parameter->getDeclaringClass()->getName();
        }

        return $name;
<<<<<<< HEAD
>>>>>>> eventsResources
=======
>>>>>>> eventsResources
    }

    /**
     * Determine if the parameter's type is a subclass of the given type.
     *
     * @param  \ReflectionParameter  $parameter
     * @param  string  $className
     * @return bool
     */
    public static function isParameterSubclassOf($parameter, $className)
    {
        $paramClassName = static::getParameterClassName($parameter);

        return ($paramClassName && class_exists($paramClassName))
            ? (new ReflectionClass($paramClassName))->isSubclassOf($className)
            : false;
    }
}
