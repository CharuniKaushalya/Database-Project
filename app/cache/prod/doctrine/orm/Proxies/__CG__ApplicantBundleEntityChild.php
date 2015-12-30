<?php

namespace Proxies\__CG__\ApplicantBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Child extends \ApplicantBundle\Entity\Child implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'nameInFull', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'nameInIntials', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'sex', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'religion', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'mediumOfLearning', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'dob', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'id', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'applicant');
        }

        return array('__isInitialized__', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'nameInFull', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'nameInIntials', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'sex', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'religion', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'mediumOfLearning', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'dob', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'id', '' . "\0" . 'ApplicantBundle\\Entity\\Child' . "\0" . 'applicant');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Child $proxy) {
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
    public function setNameInFull($nameInFull)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNameInFull', array($nameInFull));

        return parent::setNameInFull($nameInFull);
    }

    /**
     * {@inheritDoc}
     */
    public function getNameInFull()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameInFull', array());

        return parent::getNameInFull();
    }

    /**
     * {@inheritDoc}
     */
    public function setNameInIntials($nameInIntials)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNameInIntials', array($nameInIntials));

        return parent::setNameInIntials($nameInIntials);
    }

    /**
     * {@inheritDoc}
     */
    public function getNameInIntials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameInIntials', array());

        return parent::getNameInIntials();
    }

    /**
     * {@inheritDoc}
     */
    public function setSex($sex)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSex', array($sex));

        return parent::setSex($sex);
    }

    /**
     * {@inheritDoc}
     */
    public function getSex()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSex', array());

        return parent::getSex();
    }

    /**
     * {@inheritDoc}
     */
    public function setReligion($religion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReligion', array($religion));

        return parent::setReligion($religion);
    }

    /**
     * {@inheritDoc}
     */
    public function getReligion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReligion', array());

        return parent::getReligion();
    }

    /**
     * {@inheritDoc}
     */
    public function setMediumOfLearning($mediumOfLearning)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMediumOfLearning', array($mediumOfLearning));

        return parent::setMediumOfLearning($mediumOfLearning);
    }

    /**
     * {@inheritDoc}
     */
    public function getMediumOfLearning()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediumOfLearning', array());

        return parent::getMediumOfLearning();
    }

    /**
     * {@inheritDoc}
     */
    public function setDob($dob)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDob', array($dob));

        return parent::setDob($dob);
    }

    /**
     * {@inheritDoc}
     */
    public function getDob()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDob', array());

        return parent::getDob();
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
    public function setApplicant(\ApplicantBundle\Entity\Applicant $applicant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApplicant', array($applicant));

        return parent::setApplicant($applicant);
    }

    /**
     * {@inheritDoc}
     */
    public function getApplicant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApplicant', array());

        return parent::getApplicant();
    }

}
