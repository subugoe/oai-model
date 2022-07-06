<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

class ResumptionToken
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("completeListSize")
     */
    private int $completeListSize;

    /**
     * @Serializer\XmlAttribute
     */
    private int $cursor;

    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("expirationDate")
     */
    private \DateTimeInterface $expirationDate;

    /**
     * @Serializer\XmlValue(cdata=false)
     */
    private string $token;

    public function getCompleteListSize(): int
    {
        return $this->completeListSize;
    }

    public function getCursor(): int
    {
        return $this->cursor;
    }

    public function getExpirationDate(): \DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setCompleteListSize(int $completeListSize): void
    {
        $this->completeListSize = $completeListSize;
    }

    public function setCursor(int $cursor): void
    {
        $this->cursor = $cursor;
    }

    public function setExpirationDate(\DateTimeInterface $expirationDate): void
    {
        $this->expirationDate = $expirationDate;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }
}
