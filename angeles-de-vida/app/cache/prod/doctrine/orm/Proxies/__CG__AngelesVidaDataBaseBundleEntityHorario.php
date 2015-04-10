<?php

namespace Proxies\__CG__\AngelesVida\DataBaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Horario extends \AngelesVida\DataBaseBundle\Entity\Horario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'id', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'nombre', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'documento', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'tipoArchivo', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'descripcion', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'tipoHorario');
        }

        return array('__isInitialized__', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'id', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'nombre', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'documento', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'tipoArchivo', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'descripcion', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Horario' . "\0" . 'tipoHorario');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Horario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function getDocumento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocumento', array());

        return parent::getDocumento();
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoArchivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoArchivo', array());

        return parent::getTipoArchivo();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoHorario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoHorario', array());

        return parent::getTipoHorario();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function setDocumento($documento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocumento', array($documento));

        return parent::setDocumento($documento);
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoArchivo($tipoArchivo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoArchivo', array($tipoArchivo));

        return parent::setTipoArchivo($tipoArchivo);
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoHorario($tipoHorario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoHorario', array($tipoHorario));

        return parent::setTipoHorario($tipoHorario);
    }

}
