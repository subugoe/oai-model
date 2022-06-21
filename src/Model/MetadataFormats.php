<?php

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("OAI-PMH")
 */
class MetadataFormats extends Oai
{
    /**
     * @Serializer\SerializedName("ListMetadataFormats")
     * @Serializer\XmlList(entry = "metadataFormat")
     */
    private ?array $metadataFormats = null;

    public function getMetadataFormats(): array
    {
        return $this->metadataFormats;
    }

    /**
     * @return MetadataFormats
     */
    public function setMetadataFormats(array $metadataFormats): self
    {
        $this->metadataFormats = $metadataFormats;

        return $this;
    }
}
