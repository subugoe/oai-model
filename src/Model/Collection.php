<?php

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy(Serializer\ExclusionPolicy::ALL)
 */
class Collection
{
    /**
     * @Serializer\Expose()
     */
    private ?string $description = null;

    /**
     * @Serializer\Expose()
     *
     * @Serializer\SerializedName("setSpec")
     *
     * @Serializer\XmlElement(cdata=false)
     */
    private ?string $id = null;

    /**
     * @Serializer\Expose()
     */
    private ?string $image = null;

    /**
     * @Serializer\Expose()
     *
     * @Serializer\SerializedName("setName")
     *
     * @Serializer\XmlElement(cdata=false)
     */
    private ?string $label = null;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
