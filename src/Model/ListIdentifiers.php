<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

class ListIdentifiers
{
    /**
     * @Serializer\XmlList(inline = true, entry = "header")
     */
    private ?\Doctrine\Common\Collections\Collection $headers = null;

    public function getHeaders(): ?\Doctrine\Common\Collections\Collection
    {
        return $this->headers;
    }

    public function setHeaders(\Doctrine\Common\Collections\Collection $headers): void
    {
        $this->headers = $headers;
    }
}
