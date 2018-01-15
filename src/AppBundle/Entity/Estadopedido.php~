<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadopedido
 *
 * @ORM\Table(name="EstadoPedido")
 * @ORM\Entity
 */
class Estadopedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEstadoPedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestadopedido;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;



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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Estadopedido
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}
