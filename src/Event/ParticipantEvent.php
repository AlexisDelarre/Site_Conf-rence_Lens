<?php
/**
 * Created by PhpStorm.
 * User: helorion
 * Date: 11/02/18
 * Time: 19:10
 */

namespace App\Event;


use App\Entity\Participant;
use Symfony\Component\EventDispatcher\Event;

class ParticipantEvent extends Event
{
    protected  $participant;

    /**
     * ParticipantEvent constructor.
     * @param $participant
     */
    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
    }

    /**
     * @return mixed
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * @param mixed $participant
     */
    public function setParticipant(Participant $participant)
    {
        $this->participant = $participant;
    }





}