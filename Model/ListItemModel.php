<?php declare(strict_types=1);

namespace Caldera\Art11Bundle\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("all")
 */
class ListItemModel
{
    /**
     * @JMS\Expose
     * @JMS\Type("int")
     */
    private $id;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    private $hostname;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    private $regex;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    private $listType;

    /**
     * @JMS\Expose
     * @JMS\Type("DateTime")
     */
    private $createdAt;

    /**
     * @JMS\Expose
     * @JMS\Type("DateTime")
     */
    private $updatedAt;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     */
    private $reason;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    public function setHostname(?string $hostname): self
    {
        $this->hostname = $hostname;

        return $this;
    }

    public function getRegex(): ?string
    {
        return $this->regex;
    }

    public function setRegex(?string $regex): self
    {
        $this->regex = $regex;

        return $this;
    }

    public function getListType()
    {
        return $this->listType;
    }

    public function setListType($listType): self
    {
        $this->listType = $listType;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }
}
