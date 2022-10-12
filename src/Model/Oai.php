<?php

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("OAI-PMH")
 * @Serializer\XmlNamespace(uri="https://www.openarchives.org/OAI/2.0/")
 * @Serializer\XmlNamespace(uri="http://www.w3.org/2001/XMLSchema-instance", prefix="xsi")
 * @Serializer\XmlNamespace(uri="https://www.openarchives.org/OAI/2.0/OAI-PMH.xsd", prefix="schemaLocation")
 */
class Oai
{
    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SerializedName("responseDate")
     */
    private ?\DateTimeImmutable $date = null;

    /**
     * @Serializer\XmlElement(cdata=false)
     */
    private ?Error $error = null;

    /**
     * @Serializer\XmlElement(cdata=false)
     */
    private ?\Subugoe\OaiModel\Model\Request $request = null;

    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    public function getError(): ?Error
    {
        return $this->error;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function setDate(\DateTimeImmutable $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function setError(?Error $error): Oai
    {
        $this->error = $error;

        return $this;
    }

    public function setRequest(Request $request): self
    {
        $this->request = $request;

        return $this;
    }
}
