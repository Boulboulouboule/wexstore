<?php

namespace Wex\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart superclass
 * Extend it from your cart/order class and add your own user/payment logic into it
 *
 * @ORM\MappedSuperclass
 */
class Cart
{
    // Order status
    const ERROR_PAYMENT = -1;
    const CANCELED = 0;
    const INITIALIZED = 1;
    const WAITING_PAYMENT = 2;
    const WAITING_VALIDATION = 3;
    const PAID = 4;
    const CLOSED = 5;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetimetz")
     */
    private $created;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

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
    private $discountUnit = 'percent';

    /**
     * @var float
     *
     * @ORM\Column(name="price_total", type="float", nullable=true)
     */
    private $priceTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="shipping_total", type="float", nullable=true)
     */
    private $shippingTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="vat_amount", type="float")
     */
    private $vatAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="intra_community_vat", type="string", length=255, nullable=true)
     */
    private $intraCommunityVat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="shipping_date_expected", type="datetime", nullable=true)
     */
    private $shippingDateExpected;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_email", type="string", length=255)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_phone", type="string", length=20, nullable=true)
     */
    private $contactPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_proof", type="string", length=255, nullable=true)
     */
    private $paymentProof;

    /**
     * @var string
     *
     * @ORM\Column(name="origin", type="string", length=60)
     */
    private $origin;


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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Cart
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
     * Set status
     *
     * @param integer $status
     *
     * @return Cart
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set discount
     *
     * @param float $discount
     *
     * @return Cart
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
     * @return Cart
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
     * @return Cart
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

    /**
     * Set shippingTotal
     *
     * @param float $shippingTotal
     *
     * @return Cart
     */
    public function setShippingTotal($shippingTotal)
    {
        $this->shippingTotal = $shippingTotal;

        return $this;
    }

    /**
     * Get shippingTotal
     *
     * @return float
     */
    public function getShippingTotal()
    {
        return $this->shippingTotal;
    }

    /**
     * Set vatAmount
     *
     * @param float $vatAmount
     *
     * @return Cart
     */
    public function setVatAmount($vatAmount)
    {
        $this->vatAmount = $vatAmount;

        return $this;
    }

    /**
     * Get vatAmount
     *
     * @return float
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
    }

    /**
     * Set intraCommunityVat
     *
     * @param string $intraCommunityVat
     *
     * @return Cart
     */
    public function setIntraCommunityVat($intraCommunityVat)
    {
        $this->intraCommunityVat = $intraCommunityVat;

        return $this;
    }

    /**
     * Get intraCommunityVat
     *
     * @return string
     */
    public function getIntraCommunityVat()
    {
        return $this->intraCommunityVat;
    }

    /**
     * Set shippingDateExpected
     *
     * @param \DateTime $shippingDateExpected
     *
     * @return Cart
     */
    public function setShippingDateExpected($shippingDateExpected)
    {
        $this->shippingDateExpected = $shippingDateExpected;

        return $this;
    }

    /**
     * Get shippingDateExpected
     *
     * @return \DateTime
     */
    public function getShippingDateExpected()
    {
        return $this->shippingDateExpected;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     *
     * @return Cart
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     *
     * @return Cart
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set paymentProof
     *
     * @param string $paymentProof
     *
     * @return Cart
     */
    public function setPaymentProof($paymentProof)
    {
        $this->paymentProof = $paymentProof;

        return $this;
    }

    /**
     * Get paymentProof
     *
     * @return string
     */
    public function getPaymentProof()
    {
        return $this->paymentProof;
    }

    /**
     * Set origin
     *
     * @param string $origin
     *
     * @return Cart
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }
}

