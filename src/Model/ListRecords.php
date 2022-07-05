<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

use JMS\Serializer\Annotation as Serializer;

class ListRecords
{
    /**
     * @Serializer\SerializedName("Record")
     * @Serializer\XmlList(inline = true, entry = "record")
     */
    private \Doctrine\Common\Collections\Collection $records;

    public function addRecord(Record $record): void
    {
        if (!$this->records->contains($record)) {
            $this->records->add($record);
        }
    }

    public function getRecords(): \Doctrine\Common\Collections\Collection
    {
        return $this->records;
    }

    public function setRecords(\Doctrine\Common\Collections\Collection $records): void
    {
        $this->records = $records;
    }
}
