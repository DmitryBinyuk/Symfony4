<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $code;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    // /**
    //  * Set product.
    //  *
    //  * @param App\Entity\Product|null $product
    //  *
    //  * @return Product
    //  */
    // public function setProduct(App\Entity\Product $product = null)
    // {
    //     $this->product = $product;

    //     return $this;
    // }

    // /**
    //  * Get product.
    //  *
    //  * @return App\Entity\Product|null
    //  */
    // public function getProduct()
    // {
    //     return $this->product;
    // }
}
