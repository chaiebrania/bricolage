<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Ad extends \App\Entity\Ad implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
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
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'introduction', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'coverImage', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'images', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'author', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'bookings', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'comments'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'introduction', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'coverImage', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'images', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'author', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'bookings', '' . "\0" . 'App\\Entity\\Ad' . "\0" . 'comments'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Ad $proxy) {
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
    public function initializeSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'initializeSlug', []);

        return parent::initializeSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentFromAuthor(\App\Entity\User $author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentFromAuthor', [$author]);

        return parent::getCommentFromAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvgRatings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvgRatings', []);

        return parent::getAvgRatings();
    }

    /**
     * {@inheritDoc}
     */
    public function getNotAvailableDays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotAvailableDays', []);

        return parent::getNotAvailableDays();
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
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(string $slug): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(float $price): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntroduction(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntroduction', []);

        return parent::getIntroduction();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntroduction(string $introduction): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntroduction', [$introduction]);

        return parent::setIntroduction($introduction);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(string $content): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoverImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoverImage', []);

        return parent::getCoverImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoverImage(string $coverImage): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoverImage', [$coverImage]);

        return parent::setCoverImage($coverImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\App\Entity\Image $image): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$image]);

        return parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\App\Entity\Image $image): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', [$image]);

        return parent::removeImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor(?\App\Entity\User $author): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getBookings(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBookings', []);

        return parent::getBookings();
    }

    /**
     * {@inheritDoc}
     */
    public function addBooking(\App\Entity\Booking $booking): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBooking', [$booking]);

        return parent::addBooking($booking);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBooking(\App\Entity\Booking $booking): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBooking', [$booking]);

        return parent::removeBooking($booking);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', []);

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\App\Entity\Comment $comment): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comment]);

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\App\Entity\Comment $comment): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$comment]);

        return parent::removeComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): \App\Entity\Ad
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

}
