<?php

namespace AngelesVida\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulo
 *
 * @ORM\Table(name="articulo")
 * @ORM\Entity
 */
class Articulo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cod_articulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codArticulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=300, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="blob", nullable=true)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="compartir", type="string", length=100, nullable=true)
     */
    private $compartir;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_archivo", type="string", length=45, nullable=true)
     */
    private $tipoArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=100, nullable=true)
     */
    private $link;

    function getCodArticulo() {
        return $this->codArticulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCompartir() {
        return $this->compartir;
    }

    function getTipoArchivo() {
        return $this->tipoArchivo;
    }

    function getLink() {
        return $this->link;
    }

    function setCodArticulo($codArticulo) {
        $this->codArticulo = $codArticulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setDocumento($documento) {
        $this->documento = $documento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCompartir($compartir) {
        $this->compartir = $compartir;
    }

    function setTipoArchivo($tipoArchivo) {
        $this->tipoArchivo = $tipoArchivo;
    }

    function setLink($link) {
        $this->link = $link;
    }


}
