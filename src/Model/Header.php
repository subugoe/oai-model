<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

class Header
{
    /**
     * @Serializer\XmlElement(cdata=false)
     */
    private \DateTimeInterface $datestamp;

    /**
     * @Serializer\XmlElement(cdata=false)
     */
    private string $identifier;

    /**
     * @Serializer\XmlElement(cdata=false)
     */
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
