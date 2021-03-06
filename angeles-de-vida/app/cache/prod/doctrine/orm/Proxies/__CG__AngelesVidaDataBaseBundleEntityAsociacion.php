<?php

namespace Proxies\__CG__\AngelesVida\DataBaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Asociacion extends \AngelesVida\DataBaseBundle\Entity\Asociacion implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'idDoc', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'archivo', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'descripcion', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'nombre', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'tipoArchivo', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'tipoDoc');
        }

        return array('__isInitialized__', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'idDoc', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'archivo', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'descripcion', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'nombre', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'tipoArchivo', '' . "\0" . 'AngelesVida\\DataBaseBundle\\Entity\\Asociacion' . "\0" . 'tipoDoc');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Asociacion $proxy) {
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
    public function getIdDoc()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdDoc();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdDoc', array());

        return parent::getIdDoc();
    }

    /**
     * {@inheritDoc}
     */
    public function getArchivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchivo', array());

        return parent::getArchivo();
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
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
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
    public function getTipoDoc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoDoc', array());

        return parent::getTipoDoc();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdDoc($idDoc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdDoc', array($idDoc));

        return parent::setIdDoc($idDoc);
    }

    /**
     * {@inheritDoc}
     */
    public function setArchivo($archivo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchivo', array($archivo));

        return parent::setArchivo($archivo);
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
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
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
    public function setTipoDoc($tipoDoc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoDoc', array($tipoDoc));

        return parent::setTipoDoc($tipoDoc);
    }

}
