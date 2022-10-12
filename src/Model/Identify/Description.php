<?php

namespace Subugoe\OaiModel\Model\Identify;

use JMS\Serializer\Annotation\SerializedName;

class Description
{
    /**
     * @SerializedName("oai-identifier")
     */
    private ?\Subugoe\OaiModel\Model\Identify\OaiIdentifier $oaiIdentifier = null;

    public function getOaiIdentifier(): OaiIdentifier
    {
        return $this->oaiIdentifier;
    }

    public function setOaiIdentifier(OaiIdentifier $oaiIdentifier): self
    {
        $this->oaiIdentifier = $oaiIdentifier;

        return $this;
    }
}
