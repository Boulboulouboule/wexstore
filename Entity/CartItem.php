<?php

namespace Wex\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartItem entity superclass
 *
 * @ORM\Table(name="cart_item")
 * @ORM\Entity(repositoryClass="Wex\StoreBundle\Repository\CartItemRepository")
 */
class CartItem
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
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetimetz")
     */
    private $created;

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="float", nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_unit", type="string", length=10)
     */
    private $discountUnit;

    /**
     * @var float
     *
     * @ORM\Column(name="price_total", type="float", nullable=true)
     */
    private $priceTotal;


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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return CartItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return CartItem
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return CartItem
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set discount
     *
     * @param float $discount
     *
     * @return CartItem
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set discountUnit
     *
     * @param string $discountUnit
     *
     * @return CartItem
     */
    public function setDiscountUnit($discountUnit)
    {
        $this->discountUnit = $discountUnit;

        return $this;
    }

    /**
     * Get discountUnit
     *
     * @return string
     */
    public function getDiscountUnit()
    {
        return $this->discountUnit;
    }

    /**
     * Set priceTotal
     *
     * @param float $priceTotal
     *
     * @return CartItem
     */
    public function setPriceTotal($priceTotal)
    {
        $this->priceTotal = $priceTotal;

        return $this;
    }

    /**
     * Get priceTotal
     *
     * @return float
     */
    public function getPriceTotal()
    {
        return $this->priceTotal;
    }
}

