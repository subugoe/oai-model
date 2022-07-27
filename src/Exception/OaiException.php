<?php

namespace Subugoe\OaiModel\Exception;

class OaiException extends \Exception
{
    public function __toString(): string
    {
        return lcfirst(str_replace('Exception', '', (new \ReflectionClass($this))->getShortName()));
    }
}
