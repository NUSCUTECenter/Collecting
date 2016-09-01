<?php

namespace DoctrineProxies\__CG__\Collecting\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CollectingItem extends \Collecting\Entity\CollectingItem implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'item', 'form', 'collectingUser', 'userName', 'userEmail', 'anon', 'reviewed', 'created', 'modified', 'inputs'];
        }

        return ['__isInitialized__', 'id', 'item', 'form', 'collectingUser', 'userName', 'userEmail', 'anon', 'reviewed', 'created', 'modified', 'inputs'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CollectingItem $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setItem(\Omeka\Entity\Item $item = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setItem', [$item]);

        return parent::setItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function getItem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItem', []);

        return parent::getItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setForm(\Collecting\Entity\CollectingForm $form)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setForm', [$form]);

        return parent::setForm($form);
    }

    /**
     * {@inheritDoc}
     */
    public function getForm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForm', []);

        return parent::getForm();
    }

    /**
     * {@inheritDoc}
     */
    public function setCollectingUser(\Collecting\Entity\CollectingUser $collectingUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCollectingUser', [$collectingUser]);

        return parent::setCollectingUser($collectingUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollectingUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCollectingUser', []);

        return parent::getCollectingUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserName($userName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserName', [$userName]);

        return parent::setUserName($userName);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserName', []);

        return parent::getUserName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserEmail($userEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserEmail', [$userEmail]);

        return parent::setUserEmail($userEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserEmail', []);

        return parent::getUserEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnon($anon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnon', [$anon]);

        return parent::setAnon($anon);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnon', []);

        return parent::getAnon();
    }

    /**
     * {@inheritDoc}
     */
    public function setReviewed($reviewed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReviewed', [$reviewed]);

        return parent::setReviewed($reviewed);
    }

    /**
     * {@inheritDoc}
     */
    public function getReviewed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReviewed', []);

        return parent::getReviewed();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTime $dateTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$dateTime]);

        return parent::setCreated($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setModified(\DateTime $dateTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModified', [$dateTime]);

        return parent::setModified($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModified', []);

        return parent::getModified();
    }

    /**
     * {@inheritDoc}
     */
    public function getInputs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInputs', []);

        return parent::getInputs();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist(\Doctrine\ORM\Event\LifecycleEventArgs $eventArgs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', [$eventArgs]);

        return parent::prePersist($eventArgs);
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate(\Doctrine\ORM\Event\PreUpdateEventArgs $eventArgs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', [$eventArgs]);

        return parent::preUpdate($eventArgs);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceId', []);

        return parent::getResourceId();
    }

}
