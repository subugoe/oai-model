<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Root for listIdentifier.
 *
 * @Serializer\XmlRoot("OAI-PMH")
 */
class ListIdentifier
{
    /**
     * @Serializer\SerializedName("ListIdentifiers")
     */
    private ?ListIdentifiers $listIdentifiers = null;

    /**
     * @Serializer\XmlList(inline = true, entry = "set")
     */
    private ?Oai $oai = null;

    public function getListIdentifiers(): ?ListIdentifiers
    {
        return $this->listIdentifiers;
    }

    public function getOai(): ?Oai
    {
        return $this->oai;
    }

    public function setListIdentifiers(?ListIdentifiers $listIdentifiers): void
    {
        $this->listIdentifiers = $listIdentifiers;
    }

    public function setOai(?Oai $oai): void
    {
        $this->oai = $oai;
    }
}
