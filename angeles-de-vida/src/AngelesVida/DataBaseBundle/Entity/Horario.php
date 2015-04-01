<?php

namespace AngelesVida\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="horario")
 * @ORM\Entity
 */
class Horario
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
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="blob", nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_archivo", type="string", length=45, nullable=false)
     */
    private $tipoArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_horario", type="string", length=45, nullable=false)
     */
    private $tipoHorario;

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getTipoArchivo() {
        return $this->tipoArchivo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getTipoHorario() {
        return $this->tipoHorario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDocumento($documento) {
        $this->documento = $documento;
    }

    function setTipoArchivo($tipoArchivo) {
        $this->tipoArchivo = $tipoArchivo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setTipoHorario($tipoHorario) {
        $this->tipoHorario = $tipoHorario;
    }


}
