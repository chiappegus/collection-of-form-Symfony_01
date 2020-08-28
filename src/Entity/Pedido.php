<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PedidoRepository")
 */
class Pedido
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $PrecioPedido;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="pedidos")
     */
    private $Persona;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Buffy", inversedBy="pedidos")
     */
    private $menu;

    public function getId(): ?int
    {
        return $this->id;
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

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getPrecioPedido(): ?int
    {
        return $this->PrecioPedido;
    }

    public function setPrecioPedido(?int $PrecioPedido): self
    {
        $this->PrecioPedido = $PrecioPedido;

        return $this;
    }

    public function getPersona(): ?User
    {
        return $this->Persona;
    }

    public function setPersona(?User $Persona): self
    {
        $this->Persona = $Persona;

        return $this;
    }

    public function getMenu(): ?Buffy
    {
        return $this->menu;
    }

    public function setMenu(?Buffy $menu): self
    {
        $this->menu = $menu;

        return $this;
    }
}
