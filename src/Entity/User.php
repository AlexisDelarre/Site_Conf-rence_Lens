<?php

namespace App\Entity;

use App\Entity\Conference;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Config\Definition\BooleanNode;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @var string
     * @ORM\Column(type="string",unique=true)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $etablissement;

    /**
     * @var Boolean
     * @ORM\Column(type="boolean");
     */
    private $speaker;


    /**
     * @var Conference[]
     * @ORM\OneToMany(targetEntity="Conference",mappedBy="user")
     */
    private $conference;

    /**
     * @return mixed
     */
    public function getPlainPassword() {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword) {
        $this->plainPassword = $plainPassword;
    }

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $password;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $remember_token;
    /**
     * @var bool
     * @ORM\Column(columnDefinition="TINYINT(1)")
     */
    private $admin;
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $created_at;
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $enable;

    /**
     * User constructor.
     */
    public function __construct() {
        $this->roles = array("ROLE_USER");
        $this->admin = 0;
        $this->email = "";
        $this->remember_token = "";
        $this->password = "";
        $this->name = "";
        $this->created_at = new \DateTime('now');
        $this->updated_at = new \DateTime('now');
        $this->conference = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getEtablissement(): string
    {
        return $this->etablissement;
    }

    /**
     * @param string $etablissement
     */
    public function setEtablissement(string $etablissement)
    {
        $this->etablissement = $etablissement;
    }

    /**
     * @return bool
     */
    public function isSpeaker(): bool
    {
        return $this->speaker;
    }

    /**
     * @param bool $speaker
     */
    public function setSpeaker(bool $speaker)
    {
        $this->speaker = $speaker;
    }




    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getRememberToken(){
        return $this->remember_token;
    }

    /**
     * @param string $remember_token
     */
    public function setRememberToken($remember_token) {
        $this->remember_token = $remember_token;
    }

    /**
     * @return bool
     */
    public function isAdmin(){
        return $this->admin;
    }

    /**
     * @param bool $admin
     */
    public function setAdmin($admin) {
        $this->admin = $admin;
    }


    public function getCreatedAt() {
        return $this->created_at;
    }


    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    /**
     * @return
     */
    public function getUpdatedAt() {
        return $this->updated_at;
    }

    /**
     * @param $updated_at
     */
    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

    /**
     * @return Conference[]
     */
    public function getConference()
    {
        return $this->conference;
    }

    /**
     * @param Conference[] $conference
     */
    public function setConference($conference)
    {
        $this->conference = $conference;
    }

    /**
     * @return bool
     */
    public function isEnable(): bool
    {
        return $this->enable;
    }

    /**
     * @param bool $enable
     */
    public function setEnable(bool $enable)
    {
        $this->enable = $enable;
    }





    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize() {
        return serialize(
            array(
                $this->id,
                $this->email,
                $this->name,
                $this->password,
            )
        );
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized) {
        list (
            $this->id,
            $this->email,
            $this->name,
            $this->password,
            ) = unserialize($serialized);
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles() {
        if ($this->admin) {
            return array('ROLE_USER','ROLE_ADMIN');
        }

        return array('ROLE_USER');
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt() {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername() {
        return $this->email;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials() {
        // TODO: Implement eraseCredentials() method.
    }
}
