<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\BuffyRepository")
 */
class Buffy
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @ORM\Column(type="boolean")
     */
    private $areStock;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pedido", mappedBy="menu")
     */
    private $pedidos;

    public function __construct()
    {
        $this->pedidos = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getName() :  ? string
    {
        return $this->name;
    }

    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    public function getStock():  ? int
    {
        return $this->stock;
    }

    public function setStock(int $stock) : self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getPrecio():  ? float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio) : self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getAreStock():  ? bool
    {
        return $this->areStock;
    }

    public function setAreStock(bool $areStock) : self
    {
        $this->areStock = $areStock;

        return $this;
    }

    /**
     * @return Collection|Pedido[]
     */
    public function getPedidos(): Collection
    {
        return $this->pedidos;
    }

    public function addPedido(Pedido $pedido): self
    {
        if (!$this->pedidos->contains($pedido)) {
            $this->pedidos[] = $pedido;
            $pedido->setMenu($this);
        }

        return $this;
    }

    public function removePedido(Pedido $pedido): self
    {
        if ($this->pedidos->contains($pedido)) {
            $this->pedidos->removeElement($pedido);
            // set the owning side to null (unless already changed)
            if ($pedido->getMenu() === $this) {
                $pedido->setMenu(null);
            }
        }

        return $this;
    }
}
