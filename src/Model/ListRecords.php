<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

class ListRecords
{
    private \Doctrine\Common\Collections\Collection $records;

    public function getRecords(): \Doctrine\Common\Collections\Collection
    {
        return $this->records;
    }

    public function setRecords(\Doctrine\Common\Collections\Collection $records): void
    {
        $this->records = $records;
    }
}
