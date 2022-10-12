<?php

namespace Subugoe\OaiModel\Model\Identify;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\SerializedName;
use Subugoe\OaiModel\Model\Oai;

/**
 * @Serializer\XmlRoot("OAI-PMH")
 */
class Identify extends Oai
{
    /**
     * @SerializedName("Identify")
     */
    private ?\Subugoe\OaiModel\Model\Identify\Identification $identify = null;

    public function getIdentify(): Identification
    {
        return $this->identify;
    }

    public function setIdentify(Identification $identify): self
    {
        $this->identify = $identify;

        return $this;
    }
}
