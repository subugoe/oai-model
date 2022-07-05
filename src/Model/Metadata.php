<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class Metadata
{
    /**
     * @Serializer\XmlList(inline = true, entry = "date")
     * @Serializer\Type("ArrayCollection<string>")
     */
    private \Doctrine\Common\Collections\Collection $dates;

    /**
     * @Serializer\XmlList(inline = true, entry = "format")
     */
    private \Doctrine\Common\Collections\Collection $formats;

    /**
     * @Serializer\XmlList(inline = true, entry = "identifier")
     */
    private \Doctrine\Common\Collections\Collection $identifiers;

    /**
     * @Serializer\XmlList(inline = true, entry = "language")
     */
    private \Doctrine\Common\Collections\Collection $languages;

    /**
     * @Serializer\XmlList(inline = true, entry = "publisher")
     */
    private \Doctrine\Common\Collections\Collection $publishers;

    /**
     * @Serializer\XmlList(inline = true, entry = "rights")
     */
    private \Doctrine\Common\Collections\Collection $rights;

    /**
     * @Serializer\XmlList(inline = true, entry = "sourcs")
     */
    private \Doctrine\Common\Collections\Collection $sources;

    /**
     * @Serializer\XmlList(inline = true, entry = "subject")
     */
    private \Doctrine\Common\Collections\Collection $subjects;

    /**
     * @Serializer\XmlList(inline = true, entry = "title")
     */
    private \Doctrine\Common\Collections\Collection $titles;

    /**
     * @Serializer\XmlList(inline = true, entry = "type")
     */
    private \Doctrine\Common\Collections\Collection $types;

    public function __construct()
    {
        $this->dates = new ArrayCollection();
        $this->formats = new ArrayCollection();
        $this->identifiers = new ArrayCollection();
        $this->languages = new ArrayCollection();
        $this->publishers = new ArrayCollection();
        $this->rights = new ArrayCollection();
        $this->sources = new ArrayCollection();
        $this->subjects = new ArrayCollection();
        $this->titles = new ArrayCollection();
        $this->types = new ArrayCollection();
    }

    public function addDate(string $date): void
    {
        if (!$this->dates->contains($date)) {
            $this->dates->add($date);
        }
    }

    public function addFormat(string $format): void
    {
        if (!$this->formats->contains($format)) {
            $this->types->add($format);
        }
    }

    public function addIdentifier(string $identifier): void
    {
        if (!$this->identifiers->contains($identifier)) {
            $this->identifiers->add($identifier);
        }
    }

    public function addLanguage(string $language): void
    {
        if (!$this->languages->contains($language)) {
            $this->languages->add($language);
        }
    }

    public function addPublisher(string $publisher): void
    {
        if (!$this->publishers->contains($publisher)) {
            $this->publishers->add($publisher);
        }
    }

    public function addRight(string $right): void
    {
        if (!$this->rights->contains($right)) {
            $this->rights->add($right);
        }
    }

    public function addSource(string $source): void
    {
        if (!$this->sources->contains($source)) {
            $this->sources->add($source);
        }
    }

    public function addSubject(string $subject): void
    {
        if (!$this->subjects->contains($subject)) {
            $this->subjects->add($subject);
        }
    }

    public function addTitle(string $title): void
    {
        if (!$this->titles->contains($title)) {
            $this->titles->add($title);
        }
    }

    public function addType(string $type): void
    {
        if (!$this->types->contains($type)) {
            $this->types->add($type);
        }
    }

    public function getDates(): \Doctrine\Common\Collections\Collection
    {
        return $this->dates;
    }

    public function getFormats(): \Doctrine\Common\Collections\Collection
    {
        return $this->formats;
    }

    public function getIdentifiers(): \Doctrine\Common\Collections\Collection
    {
        return $this->identifiers;
    }

    public function getLanguages(): \Doctrine\Common\Collections\Collection
    {
        return $this->languages;
    }

    public function getPublishers(): \Doctrine\Common\Collections\Collection
    {
        return $this->publishers;
    }

    public function getRights(): \Doctrine\Common\Collections\Collection
    {
        return $this->rights;
    }

    public function getSources(): \Doctrine\Common\Collections\Collection
    {
        return $this->sources;
    }

    public function getSubjects(): \Doctrine\Common\Collections\Collection
    {
        return $this->subjects;
    }

    public function getTitles(): \Doctrine\Common\Collections\Collection
    {
        return $this->titles;
    }

    public function getTypes(): \Doctrine\Common\Collections\Collection
    {
        return $this->types;
    }

    public function setDates(\Doctrine\Common\Collections\Collection $dates): void
    {
        $this->dates = $dates;
    }

    public function setFormats(\Doctrine\Common\Collections\Collection $formats): void
    {
        $this->formats = $formats;
    }

    public function setIdentifiers(\Doctrine\Common\Collections\Collection $identifiers): void
    {
        $this->identifiers = $identifiers;
    }

    public function setLanguages(\Doctrine\Common\Collections\Collection $languages): void
    {
        $this->languages = $languages;
    }

    public function setPublishers(\Doctrine\Common\Collections\Collection $publishers): void
    {
        $this->publishers = $publishers;
    }

    public function setRights(\Doctrine\Common\Collections\Collection $rights): void
    {
        $this->rights = $rights;
    }

    public function setSources(\Doctrine\Common\Collections\Collection $sources): void
    {
        $this->sources = $sources;
    }

    public function setSubjects(\Doctrine\Common\Collections\Collection $subjects): void
    {
        $this->subjects = $subjects;
    }

    public function setTitles(\Doctrine\Common\Collections\Collection $titles): void
    {
        $this->titles = $titles;
    }

    public function setTypes(\Doctrine\Common\Collections\Collection $types): void
    {
        $this->types = $types;
    }
}
