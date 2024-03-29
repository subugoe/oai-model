<?php

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Request data for OAI Harvesting.
 */
class Request
{
    /**
     * @Serializer\XmlAttribute
     */
    private ?string $identifier = null;

    /**
     * @Serializer\XmlAttribute
     */
    private ?string $metadataPrefix = null;

    /**
     * @Serializer\XmlValue
     *
     * @Serializer\XmlElement(cdata=false)
     */
    private ?string $url = null;

    /**
     * @Serializer\XmlAttribute
     */
    private ?string $verb = null;

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getMetadataPrefix(): ?string
    {
        return $this->metadataPrefix;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getVerb(): string
    {
        return $this->verb;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }

    public function setMetadataPrefix(?string $metadataPrefix): void
    {
        $this->metadataPrefix = $metadataPrefix;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function setVerb(string $verb): self
    {
        $this->verb = $verb;

        return $this;
    }
}
