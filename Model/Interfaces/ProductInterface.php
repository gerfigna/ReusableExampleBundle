<?php

namespace Acme\ReusableBundle\Model\Interfaces;

interface ProductInterface extends PurchasableInterface
{
    /**
     * @param string $description
     *
     * @return ProductInterface Self object
     */
    public function setDescription($description);

    /**
     * Get description.
     *
     * @return string Description
     */
    public function getDescription();
}
