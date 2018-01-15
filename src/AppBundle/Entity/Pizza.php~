<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pizza
 *
 * @ORM\Table(name="Pizza", indexes={@ORM\Index(name="idTamanoPizza_idx", columns={"idTamanoPizza"})})
 * @ORM\Entity
 */
class Pizza
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPizza", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpizza;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTamanoPizza", type="integer", nullable=true)
     */
    private $idtamanopizza;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="string", length=45, nullable=false)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;



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
     * Set idtamanopizza
     *
     * @param integer $idtamanopizza
     *
     * @return Pizza
     */
    public function setIdtamanopizza($idtamanopizza)
    {
        $this->idtamanopizza = $idtamanopizza;

        return $this;
    }

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
     * @return Pizza
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
     * Set precio
     *
     * @param string $precio
     *
     * @return Pizza
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Pizza
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
