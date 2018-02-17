<?php
/**
 * Created by PhpStorm.
 * User: helorion
 * Date: 11/02/18
 * Time: 19:04
 */

namespace App\EventListerner;


use App\AppEvent;
use App\Entity\Participant;
use App\Event\ParticipantEvent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ParticipantSubscriber implements EventSubscriberInterface
{
    private $em;

    /**
     * UserSubscriber constructor.
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public static function getSubscribedEvents()
    {
        return [
            AppEvent::PARTICIPANT_ADD => array('add', 0),
            AppEvent::PARTICIPANT_EDIT => array ("edit",0),
            AppEvent::PARTICIPANT_DELETE => array('edit',)

        ];
    }

    public function add(ParticipantEvent $participantEvent)
    {
        $this->em->persist($participantEvent->getParticipant());
        $this->em->flush();
    }

    public function edit(ParticipantEvent $participantEvent)
    {
        $this->em->persist($participantEvent->getParticipant());
        $this->em->flush();
    }

    public function remove(ParticipantEvent $participantEvent)
    {
        $this->em->remove($participantEvent->getParticipant());
        $this->em->flush();
    }


}