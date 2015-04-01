<?php

namespace AngelesVida\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfermedad
 *
 * @ORM\Table(name="enfermedad")
 * @ORM\Entity
 */
class Enfermedad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cod_enfermedad", type="integer", nullable=false)
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
     * @ORM\Column(name="descripcion", type="string", length=500, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tratamiento", inversedBy="$codEnfermedad")
     * @ORM\JoinTable(name="tratamiento_enfermedad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="cod_enfermedad", referencedColumnName="cod_enfermedad")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cod_tratamiento", referencedColumnName="cod_tratamiento")
     *   }
     * )
     */
    private $codTratamiento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codTratamiento = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codEnfermedad
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
     * @return Enfermedad
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Enfermedad
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

    /**
     * Add codTratamiento
     *
     * @param \AngelesVida\DataBaseBundle\Entity\Tratamiento $codTratamiento
     * @return Enfermedad
     */
    public function addCodTratamiento(\AngelesVida\DataBaseBundle\Entity\Tratamiento $id)
    {
        $this->codTratamiento[] = $id;

        return $this;
    }

    /**
     * Remove codTratamiento
     *
     * @param \AngelesVida\DataBaseBundle\Entity\Tratamiento $codTratamiento
     */
    public function removeCodTratamiento(\AngelesVida\DataBaseBundle\Entity\Tratamiento $id)
    {
        $this->codTratamiento->removeElement($id);
    }

    /**
     * Get codTratamiento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodTratamiento()
    {
        return $this->codTratamiento;
    }
    
    public function __toString() {
        return $this->getNombre();
    }

}
