<?php

namespace AngelesVida\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tratamiento
 *
 * @ORM\Table(name="tratamiento")
 * @ORM\Entity
 */
class Tratamiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cod_tratamiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="decripcion", type="string", length=500, nullable=false)
     */
    private $decripcion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * 
     */
    private $codEnfermedad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codEnfermedad = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codTratamiento
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Tratamiento
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
     * Set decripcion
     *
     * @param string $decripcion
     * @return Tratamiento
     */
    public function setDecripcion($decripcion)
    {
        $this->decripcion = $decripcion;

        return $this;
    }

    /**
     * Get decripcion
     *
     * @return string 
     */
    public function getDecripcion()
    {
        return $this->decripcion;
    }

    /**
     * Add codEnfermedad
     *
     * @param \AngelesVida\DataBaseBundle\Entity\Enfermedad $codEnfermedad
     * @return Tratamiento
     */
    public function addCodEnfermedad(\AngelesVida\DataBaseBundle\Entity\Enfermedad $id)
    {
        $this->codEnfermedad[] = $id;

        return $this;
    }

    /**
     * Remove codEnfermedad
     *
     * @param \AngelesVida\DataBaseBundle\Entity\Enfermedad $codEnfermedad
     */
    public function removeCodEnfermedad(\AngelesVida\DataBaseBundle\Entity\Enfermedad $id)
    {
        $this->codEnfermedad->removeElement($id);
    }

    /**
     * Get codEnfermedad
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodEnfermedad()
    {
        return $this->codEnfermedad;
    }
    
    public function __toString() {
        return $this->getNombre();
    }
    
}
