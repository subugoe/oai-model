<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

class Record
{
    private Header $header;

    private Metadata $metadata;

    public function getHeader(): Header
    {
        return $this->header;
    }

    public function getMetadata(): Metadata
    {
        return $this->metadata;
    }

    public function setHeader(Header $header): void
    {
        $this->header = $header;
    }

    public function setMetadata(Metadata $metadata): void
    {
        $this->metadata = $metadata;
    }
}
