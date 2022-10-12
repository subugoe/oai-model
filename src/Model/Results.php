<?php

namespace Subugoe\OaiModel\Model;

use Subugoe\IIIFModel\Model\DocumentInterface;

class Results
{
    private array $documents = [];

    private int $foundCount = 0;

    public function addDocument(DocumentInterface $document): void
    {
        $this->documents[] = $document;
    }

    public function getDocument(int $position): DocumentInterface
    {
        return $this->documents[$position];
    }

    public function getDocuments(): array
    {
        return $this->documents;
    }

    public function getFoundCount(): int
    {
        return $this->foundCount;
    }

    public function setDocuments(array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }

    public function setFoundCount(int $foundCount): self
    {
        $this->foundCount = $foundCount;

        return $this;
    }
}
