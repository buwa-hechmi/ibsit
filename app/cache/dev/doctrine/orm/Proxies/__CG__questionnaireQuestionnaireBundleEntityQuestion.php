<?php

namespace Proxies\__CG__\questionnaire\QuestionnaireBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Question extends \questionnaire\QuestionnaireBundle\Entity\Question implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'questiontext', 'questiontexten', 'attachement', 'responsetype', 'position', 'mode', 'questionnaire');
        }

        return array('__isInitialized__', 'id', 'questiontext', 'questiontexten', 'attachement', 'responsetype', 'position', 'mode', 'questionnaire');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Question $proxy) {
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
    public function setQuestiontext($questiontext)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestiontext', array($questiontext));

        return parent::setQuestiontext($questiontext);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestiontext()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestiontext', array());

        return parent::getQuestiontext();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestiontexten($questiontexten)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestiontexten', array($questiontexten));

        return parent::setQuestiontexten($questiontexten);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestiontexten()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestiontexten', array());

        return parent::getQuestiontexten();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttachement($attachement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttachement', array($attachement));

        return parent::setAttachement($attachement);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttachement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttachement', array());

        return parent::getAttachement();
    }

    /**
     * {@inheritDoc}
     */
    public function setResponsetype($responsetype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResponsetype', array($responsetype));

        return parent::setResponsetype($responsetype);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponsetype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponsetype', array());

        return parent::getResponsetype();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', array($position));

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', array());

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setMode($mode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMode', array($mode));

        return parent::setMode($mode);
    }

    /**
     * {@inheritDoc}
     */
    public function getMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMode', array());

        return parent::getMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestionnaire(\questionnaire\QuestionnaireBundle\Entity\Questionnaire $questionnaire = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestionnaire', array($questionnaire));

        return parent::setQuestionnaire($questionnaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestionnaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestionnaire', array());

        return parent::getQuestionnaire();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
