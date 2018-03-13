<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pizza extends \AppBundle\Entity\Pizza implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'idpizza', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'idtamanopizza', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'precio', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'pizzapedido'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'idpizza', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'idtamanopizza', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'precio', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Pizza' . "\0" . 'pizzapedido'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pizza $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getIdpizza()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdpizza();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdpizza', []);

        return parent::getIdpizza();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdtamanopizza($idtamanopizza)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdtamanopizza', [$idtamanopizza]);

        return parent::setIdtamanopizza($idtamanopizza);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtamanopizza()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtamanopizza', []);

        return parent::getIdtamanopizza();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecio($precio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecio', [$precio]);

        return parent::setPrecio($precio);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecio', []);

        return parent::getPrecio();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function addPizzapedido(\AppBundle\Entity\Pizzapedido $pizzapedido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPizzapedido', [$pizzapedido]);

        return parent::addPizzapedido($pizzapedido);
    }

    /**
     * {@inheritDoc}
     */
    public function removePizzapedido(\AppBundle\Entity\Pizzapedido $pizzapedido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePizzapedido', [$pizzapedido]);

        return parent::removePizzapedido($pizzapedido);
    }

    /**
     * {@inheritDoc}
     */
    public function getPizzapedido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPizzapedido', []);

        return parent::getPizzapedido();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}