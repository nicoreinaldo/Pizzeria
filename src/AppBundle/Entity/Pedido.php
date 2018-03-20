<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Pedido
 *
 * @ORM\Table(name="Pedido", indexes={@ORM\Index(name="idCliente_idx", columns={"idCliente"}), @ORM\Index(name="idEstadoPedido_idx", columns={"idEstadoPedido"})})
 * @ORM\Entity
 */
class Pedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpedido;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="Pedido")
     * @ORM\JoinColumn(name="idcliente", referencedColumnName="idCliente")
     */

    
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEstadoPedido", type="integer", nullable=true)
     */
    private $idestadopedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;



    /**
     * Get idpedido
     *
     * @return integer
     */
    public function getIdpedido()
    {
        return $this->idpedido;
    }

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     *
     * @return Pedido
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idestadopedido
     *
     * @param integer $idestadopedido
     *
     * @return Pedido
     */
    public function setIdestadopedido($idestadopedido)
    {
        $this->idestadopedido = $idestadopedido;

        return $this;
    }

    /**
     * Get idestadopedido
     *
     * @return integer
     */
    public function getIdestadopedido()
    {
        return $this->idestadopedido;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Pedido
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @ORM\OneToMany(targetEntity="Pizzapedido", mappedBy="pedido")
     */
    private $pizzapedido;


    public function __construct()
    {
        $this->pizzapedido = new ArrayCollection();
    }

    /**
     * Add pizzapedido
     *
     * @param \AppBundle\Entity\Pizzapedido $pizzapedido
     *
     * @return Pedido
     */
    public function addPizzapedido(\AppBundle\Entity\Pizzapedido $pizzapedido)
    {
        $this->pizzapedido[] = $pizzapedido;

        return $this;
    }

    /**
     * Remove pizzapedido
     *
     * @param \AppBundle\Entity\Pizzapedido $pizzapedido
     */
    public function removePizzapedido(\AppBundle\Entity\Pizzapedido $pizzapedido)
    {
        $this->pizzapedido->removeElement($pizzapedido);
    }

    /**
     * Get pizzapedido
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPizzapedido()
    {
        return $this->pizzapedido;
    }
}
