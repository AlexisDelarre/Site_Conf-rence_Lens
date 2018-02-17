<?php
/**
 * Created by PhpStorm.
 * User: helorion
 * Date: 11/02/18
 * Time: 19:10
 */

namespace App\Event;


use App\Entity\Homepage;
use Symfony\Component\EventDispatcher\Event;

class HomepageEvent extends Event
{
    protected  $homepage;

    /**
     * HomepageEvent constructor.
     * @param $homepage
     */
    public function __construct(Homepage $homepage)
    {
        $this->homepage = $homepage;
    }

    /**
     * @return mixed
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * @param mixed $homepage
     */
    public function setHomepage(Homepage $homepage)
    {
        $this->homepage = $homepage;
    }





}