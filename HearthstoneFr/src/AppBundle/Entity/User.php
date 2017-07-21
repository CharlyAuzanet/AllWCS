<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $battleTag;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set battleTag
     *
     * @param string $battleTag
     *
     * @return User
     */
    public function setBattleTag($battleTag)
    {
        $this->battleTag = $battleTag;

        return $this;
    }

    /**
     * Get battleTag
     *
     * @return string
     */
    public function getBattleTag()
    {
        return $this->battleTag;
    }
}

