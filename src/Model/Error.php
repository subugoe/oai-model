<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

class Error
{
    /**
     * @Serializer\XmlAttribute()
     */
    private string $code;

    /**
     * @Serializer\XmlElement(cdata=false)
     *
     * @Serializer\Inline()
     */
    private string $message;

    public function getCode(): string
    {
        return $this->code;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setCode(string $code): Error
    {
        $this->code = $code;

        return $this;
    }

    public function setMessage(string $message): Error
    {
        $this->message = $message;

        return $this;
    }
}
