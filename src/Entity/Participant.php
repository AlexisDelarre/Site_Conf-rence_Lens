<?php
/**
 * Created by PhpStorm.
 * User: helorion
 * Date: 17/02/18
 * Time: 14:15
 */

namespace App\Entity;

use App\Entity\Conference;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Time;


/**
 * @ORM\Table(name="participant")
 * @ORM\Entity(repositoryClass="App\Repository\ParticipantRepository")
 */
class Participant
{
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
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $speaker;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $institution;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $enable;

    /**
     * @var Conference[]
     * @ORM\OneToMany(targetEntity="App\Entity\Conference",mappedBy="participant")
     */
    private $conference;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nationality;

    /**
     * Participant constructor.
     */
    public function __construct()
    {
        $this->name = "";
        $this->email = "";
        $this->speaker = 0;
        $this->institution = "";
        $this->enable=0;
        $this->nationality="";

    }

    /**
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param string $nationality
     */
    public function setNationality( $nationality)
    {
        $this->nationality = $nationality;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName( $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isSpeaker()
    {
        return $this->speaker;
    }

    /**
     * @param bool $speaker
     */
    public function setSpeaker( $speaker)
    {
        $this->speaker = $speaker;
    }

    /**
     * @return string
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * @param string $institution
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
    }

    /**
     * @return bool
     */
    public function isEnable()
    {
        return $this->enable;
    }

    /**
     * @param bool $enable
     */
    public function setEnable( $enable)
    {
        $this->enable = $enable;
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




}