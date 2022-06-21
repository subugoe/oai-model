<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

class Header
{
    /**
     * @var \DateTime|\DateTimeImmutable
     */
    private \DateTimeInterface $datestamp;

    private string $identifier;

    private string $setSpec;

    /**
     * @return \DateTime|\DateTimeImmutable
     */
    public function getDatestamp(): \DateTimeInterface
    {
        return $this->datestamp;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getSetSpec(): string
    {
        return $this->setSpec;
    }

    /**
     * @param \DateTime|\DateTimeImmutable $datestamp
     */
    public function setDatestamp(\DateTimeInterface $datestamp): void
    {
        $this->datestamp = $datestamp;
    }

    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function setSetSpec(string $setSpec): void
    {
        $this->setSpec = $setSpec;
    }
}
