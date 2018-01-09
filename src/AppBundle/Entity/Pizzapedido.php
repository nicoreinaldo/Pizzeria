<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pizzapedido
 *
 * @ORM\Table(name="PizzaPedido", indexes={@ORM\Index(name="idPizza_idx", columns={"idPizza"}), @ORM\Index(name="idPedido_idx", columns={"idPedido"})})
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
     * @var integer
     *
     * @ORM\Column(name="idPizza", type="integer", nullable=true)
     */
    private $idpizza;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPedido", type="integer", nullable=true)
     */
    private $idpedido;



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
     * Set idpizza
     *
     * @param integer $idpizza
     *
     * @return Pizzapedido
     */
    public function setIdpizza($idpizza)
    {
        $this->idpizza = $idpizza;

        return $this;
    }

    /**
     * Get idpizza
     *
     * @return integer
     */
    public function getIdpizza()
    {
        return $this->idpizza;
    }

    /**
     * Set idpedido
     *
     * @param integer $idpedido
     *
     * @return Pizzapedido
     */
    public function setIdpedido($idpedido)
    {
        $this->idpedido = $idpedido;

        return $this;
    }

    /**
     * Get idpedido
     *
     * @return integer
     */
    public function getIdpedido()
    {
        return $this->idpedido;
    }
}
