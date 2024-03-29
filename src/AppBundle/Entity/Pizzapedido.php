<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pizzapedido
 *
 * @ORM\Table(name="PizzaPedido")
 * @ORM\Entity
 */
class Pizzapedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPizzaPedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpizzapedido;


    /**
     * Get idpizzapedido
     *
     * @return integer
     */
    public function getIdpizzapedido()
    {
        return $this->idpizzapedido;
    }


    /**
     * @ORM\ManyToOne(targetEntity="Pizza", inversedBy="pizzapedido")
     * @ORM\JoinColumn(name="pizza_id", referencedColumnName="idPizza")
     */
    private $pizza;

    /**
     * @ORM\ManyToOne(targetEntity="Pedido", inversedBy="pizzapedido")
     * @ORM\JoinColumn(name="pedido_id", referencedColumnName="idPedido")
     */
    private $pedido;


    /**
     * Set pizza
     *
     * @param \AppBundle\Entity\Pizza $pizza
     *
     * @return Pizzapedido
     */
    public function setPizza(\AppBundle\Entity\Pizza $pizza = null)
    {
        $this->pizza = $pizza;

        return $this;
    }

    /**
     * Get pizza
     *
     * @return \AppBundle\Entity\Pizza
     */
    public function getPizza()
    {
        return $this->pizza;
    }

    /**
     * Set pedido
     *
     * @param \AppBundle\Entity\Pedido $pedido
     *
     * @return Pizzapedido
     */
    public function setPedido(\AppBundle\Entity\Pedido $pedido = null)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido
     *
     * @return \AppBundle\Entity\Pedido
     */
    public function getPedido()
    {
        return $this->pedido;
    }
}
