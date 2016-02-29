<?php

namespace Acme\ReusableBundle\Model\Traits;

trait IdentifiableTrait
{
    /**
     * @var int
     *
     * Identifier
     */
    protected $id;

    /**
     * Get Id.
     *
     * @return int Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @param int $id Id
     *
     * @return $this Self object
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
