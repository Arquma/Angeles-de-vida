<?php

namespace AngelesVida\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galeria
 *
 * @ORM\Table(name="galeria")
 * @ORM\Entity
 */
class Galeria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=70, nullable=false)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=60, nullable=true)
     */
    private $descripcion;
    function getId() {
        return $this->id;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

   

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }



}
