<?php

namespace App\Event;

use App\Entity\Conference;
use Symfony\Component\EventDispatcher\Event;


/**
 * Created by PhpStorm.
 * User: alexis.delarre
 * Date: 09/02/18
 * Time: 13:30
 */

class ConferenceEvent extends Event

{
    protected $conference;

    /**
     * @return Conference
     */
    public function getConference()
    {
        return $this->conference;
    }

    /**
     * @param Conference $conference
     */
    public function setConference(Conference $conference)
    {
        $this->conference = $conference;
    }



}
