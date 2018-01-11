<?php

namespace Wex\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product superclass
 * Extend it from your product class and add your own product category/type logic into it
 *
 * @ORM\MappedSuperclass
 */
abstract class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="price_factor", type="integer")
     */
    private $priceFactor = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_min_threshold", type="integer")
     */
    private $stockMinThreshold;

    /**
     * @var string
     *
     * @ORM\Column(name="provider", type="string", length=60)
     */
    private $provider;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set priceFactor
     *
     * @param integer $priceFactor
     *
     * @return Product
     */
    public function setPriceFactor($priceFactor)
    {
        $this->priceFactor = $priceFactor;

        return $this;
    }

    /**
     * Get priceFactor
     *
     * @return int
     */
    public function getPriceFactor()
    {
        return $this->priceFactor;
    }

    /**
     * Set stockMinThreshold
     *
     * @param integer $stockMinThreshold
     *
     * @return Product
     */
    public function setStockMinThreshold($stockMinThreshold)
    {
        $this->stockMinThreshold = $stockMinThreshold;

        return $this;
    }

    /**
     * Get stockMinThreshold
     *
     * @return int
     */
    public function getStockMinThreshold()
    {
        return $this->stockMinThreshold;
    }

    /**
     * Set provider
     *
     * @param string $provider
     *
     * @return Product
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }
}

