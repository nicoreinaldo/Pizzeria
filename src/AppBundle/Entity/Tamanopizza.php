<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tamanopizza
 *
 * @ORM\Table(name="TamanoPizza")
 * @ORM\Entity
 */
class Tamanopizza
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTamanoPizza", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtamanopizza;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantPorciones", type="integer", nullable=false)
     */
    private $cantporciones;



    /**
     * Get idtamanopizza
     *
     * @return integer
     */
    public function getIdtamanopizza()
    {
        return $this->idtamanopizza;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tamanopizza
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

    /**
     * Set cantporciones
     *
     * @param integer $cantporciones
     *
     * @return Tamanopizza
     */
    public function setCantporciones($cantporciones)
    {
        $this->cantporciones = $cantporciones;

        return $this;
    }

    /**
     * Get cantporciones
     *
     * @return integer
     */
    public function getCantporciones()
    {
        return $this->cantporciones;
    }
}
