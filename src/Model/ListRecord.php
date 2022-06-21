<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Root for ListRecord.
 *
 * @Serializer\XmlRoot("OAI-PMH")
 */
class ListRecord
{
    /**
     * @Serializer\SerializedName("ListRecord")
     */
    private ?ListRecords $listRecords = null;

    /**
     * @Serializer\XmlList(inline = true, entry = "set")
     */
    private ?Oai $oai = null;

    public function getListRecords(): ?ListRecords
    {
        return $this->listRecords;
    }

    public function getOai(): ?Oai
    {
        return $this->oai;
    }

    public function setListRecords(?ListRecords $listRecords): void
    {
        $this->listRecords = $listRecords;
    }

    public function setOai(?Oai $oai): void
    {
        $this->oai = $oai;
    }
}
