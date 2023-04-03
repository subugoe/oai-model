<?php

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("OAI-PMH")
 */
class Sets extends Oai
{
    /**
     * @Serializer\SerializedName("ListSets")
     *
     * @Serializer\XmlList(inline = false, entry = "set")
     */
    private ?array $sets = null;

    public function getSets(): array
    {
        return $this->sets;
    }

    public function setSets(array $sets): self
    {
        $this->sets = $sets;

        return $this;
    }
}
