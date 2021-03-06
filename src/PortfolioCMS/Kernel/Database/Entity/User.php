<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 22-12-2016 05:02
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare( strict_types = 1 );

namespace StendenINF1B\PortfolioCMS\Kernel\Database\Entity;

abstract class User
{
    /**
     * @var int
     */
    protected $id = 0;

    /**
     * @var string
     */
    protected $hashedPassword = '';

    /**
     * @var \DateTime
     */
    protected $accountCreated;

    /**
     * @var \DateTime
     */
    protected $lastLogin;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $lastIpAddress;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var bool
     */
    protected $isAdmin;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId( int $id )
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getHashedPassword(): string
    {
        return $this->hashedPassword;
    }

    /**
     * @param string $hashedPassword
     */
    public function setHashedPassword( string $hashedPassword )
    {
        $this->hashedPassword = $hashedPassword;
    }

    /**
     * @return \DateTime
     */
    public function getAccountCreated(): \DateTime
    {
        return $this->accountCreated;
    }

    /**
     * @param \DateTime $accountCreated
     */
    public function setAccountCreated( \DateTime $accountCreated )
    {
        $this->accountCreated = $accountCreated;
    }

    /**
     * @return \DateTime
     */
    public function getLastLogin(): \DateTime
    {
        return $this->lastLogin;
    }

    /**
     * @param \DateTime $lastLogin
     */
    public function setLastLogin( \DateTime $lastLogin )
    {
        $this->lastLogin = $lastLogin;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail( string $email )
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getLastIpAddress(): string
    {
        return $this->lastIpAddress;
    }

    /**
     * @param string $lastIpAddress
     */
    public function setLastIpAddress( string $lastIpAddress )
    {
        $this->lastIpAddress = $lastIpAddress;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName( string $firstName )
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName( string $lastName )
    {
        $this->lastName = $lastName;
    }

    /**
     * @return boolean
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive( bool $active )
    {
        $this->active = $active;
    }

    /**
     * @return boolean
     */
    public function getIsAdmin(): bool
    {
        return $this->isAdmin;
    }

    /**
     * @param boolean $isAdmin
     */
    public function setIsAdmin( bool $isAdmin )
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * This method gets the Type property.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * This method sets the type property.
     *
     * @param string $type
     */
    public function setType( string $type )
    {
        $this->type = $type;
    }

}