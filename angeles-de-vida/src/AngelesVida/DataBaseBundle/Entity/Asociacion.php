<?php

namespace AngelesVida\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asociacion
 *
 * @ORM\Table(name="asociacion")
 * @ORM\Entity
 */
class Asociacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_doc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="archivo", type="blob", nullable=true)
     */
    private $archivo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_archivo", type="string", length=45, nullable=true)
     */
    private $tipoArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_doc", type="string", length=45, nullable=true)
     */
    private $tipoDoc;

    function getIdDoc() {
        return $this->idDoc;
    }

    function getArchivo() {
        return $this->archivo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTipoArchivo() {
        return $this->tipoArchivo;
    }

    function getTipoDoc() {
        return $this->tipoDoc;
    }

    function setIdDoc($idDoc) {
        $this->idDoc = $idDoc;
    }

    function setArchivo($archivo) {
        $this->archivo = $archivo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTipoArchivo($tipoArchivo) {
        $this->tipoArchivo = $tipoArchivo;
    }

    function setTipoDoc($tipoDoc) {
        $this->tipoDoc = $tipoDoc;
    }


}
