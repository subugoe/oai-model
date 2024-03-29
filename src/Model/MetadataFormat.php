<?php

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

class MetadataFormat
{
    /**
     * @Serializer\SerializedName("metadataNamespace")
     *
     * @Serializer\XmlElement(cdata=false)
     */
    private ?string $namespace = null;

    /**
     * @Serializer\SerializedName("metadataPrefix")
     *
     * @Serializer\XmlElement(cdata=false)
     */
    private ?string $prefix = null;

    /**
     * @Serializer\XmlElement(cdata=false)
     */
    private ?string $schema = null;

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function getSchema(): string
    {
        return $this->schema;
    }

    public function setNamespace(string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }

    public function setPrefix(string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function setSchema(string $schema): self
    {
        $this->schema = $schema;

        return $this;
    }
}
