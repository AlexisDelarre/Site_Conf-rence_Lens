<?php
/**
 * Created by PhpStorm.
 * User: alexis.delarre
 * Date: 09/02/18
 * Time: 11:54
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Time;

/**
 * @ORM\Table(name="homepage")
 * @ORM\Entity(repositoryClass="App\Repository\HomepageRepository")
 */
class Homepage
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
    private $title;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $date;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $lieu;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $subtitle;
    /**
     * @ORM\Column(type="text")
     */
    private $subtext;
    /**
     * @ORM\Column(type="text")
     */
    private $footer;

    /**
     * Homepage constructor.
     * @param string $title
     * @param string $date
     * @param string $lieu
     * @param string $subtitle
     * @param $subtext
     * @param $footer
     */
    public function __construct()
    {
        $this->title = "";
        $this->date = "";
        $this->lieu = "";
        $this->subtitle = "";
        $this->subtext = "";
        $this->footer = "";
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return mixed
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param mixed $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return string
     */
    public function getSubtext()
    {
        return $this->subtext;
    }

    /**
     * @param string $subtext
     */
    public function setSubtext($subtext)
    {
        $this->subtext = $subtext;
    }

    /**
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param string $footer
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
    }


}