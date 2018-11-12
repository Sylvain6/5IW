<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait ArchivedTrait
{
    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $archived = false;

    /**
     * @return bool
     */
    public function isArchived(): bool
    {
        return $this->archived;
    }

    /**
     * @param bool $archived
     *
     * @return ArchivedTrait
     */
    public function setArchived(bool $archived): self
    {
        $this->archived = $archived;
        return $this;
    }
}
