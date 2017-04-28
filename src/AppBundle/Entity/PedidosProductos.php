<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PedidosProductos
 *
 * @ORM\Table(name="pedidos_productos", indexes={@ORM\Index(name="idpedido_idx", columns={"idpedido"}), @ORM\Index(name="idproducto_idx", columns={"idproducto"})})
 * @ORM\Entity
 */
class PedidosProductos
{
    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $precio;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpedidos_productos", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpedidosProductos;

    /**
     * @var \AppBundle\Entity\Productos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproducto", referencedColumnName="idproducto")
     * })
     */
    private $idproducto;

    /**
     * @var \AppBundle\Entity\Pedido
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpedido", referencedColumnName="idpedido")
     * })
     */
    private $idpedido;



    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return PedidosProductos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return PedidosProductos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Get idpedidosProductos
     *
     * @return integer
     */
    public function getIdpedidosProductos()
    {
        return $this->idpedidosProductos;
    }

    /**
     * Set idproducto
     *
     * @param \AppBundle\Entity\Productos $idproducto
     *
     * @return PedidosProductos
     */
    public function setIdproducto(\AppBundle\Entity\Productos $idproducto = null)
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    /**
     * Get idproducto
     *
     * @return \AppBundle\Entity\Productos
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set idpedido
     *
     * @param \AppBundle\Entity\Pedido $idpedido
     *
     * @return PedidosProductos
     */
    public function setIdpedido(\AppBundle\Entity\Pedido $idpedido = null)
    {
        $this->idpedido = $idpedido;

        return $this;
    }

    /**
     * Get idpedido
     *
     * @return \AppBundle\Entity\Pedido
     */
    public function getIdpedido()
    {
        return $this->idpedido;
    }
}
