<?php

/**
 * Created by PhpStorm.
 * User: alexis.delarre
 * Date: 24/01/18
 * Time: 15:24
 */
namespace App\Entity;

use App\Entity\Participant;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Time;


/**
 * @ORM\Table(name="conference")
 * @ORM\Entity(repositoryClass="App\Repository\ConferenceRepository")
 */
class Conference
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column()
     */
    private $title;
    /**
     * @ORM\Column(type="text")
     */
    private $content;
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    public $date;

    /**
     * @var Time
     * @ORM\Column(type="time")
     */
    private $heuredebut;

    /**
     * @var Time
     * @ORM\Column(type="time")
     */
    private $heurefin;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $lieu;

    /**
     * @var Participant
     * @ORM\ManyToOne(targetEntity="App\Entity\Participant", inversedBy="conference")
     */
    private $participant;


    public function __construct()
    {

        $this->content = "";
        $this->title="";

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate( $date)
    {
        $this->date = $date;
    }

    /**
     * @return Time
     */
    public function getHeuredebut()
    {
        return $this->heuredebut;
    }

    /**
     * @param Time $heuredebut
     */
    public function setHeuredebut( $heuredebut)
    {
        $this->heuredebut = $heuredebut;
    }

    /**
     * @return Time
     */
    public function getHeurefin()
    {
        return $this->heurefin;
    }

    /**
     * @param Time $heurefin
     */
    public function setHeurefin( $heurefin)
    {
        $this->heurefin = $heurefin;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param string $lieu
     */
    public function setLieu( $lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return \App\Entity\Participant
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * @param \App\Entity\Participant $participant
     */
    public function setParticipant($participant)
    {
        $this->participant = $participant;
    }




}