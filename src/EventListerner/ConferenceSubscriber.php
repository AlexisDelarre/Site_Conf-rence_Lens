<?php
/**
 * Created by PhpStorm.
 * User: alexis.delarre
 * Date: 09/02/18
 * Time: 13:51
 */


namespace App\EventListerner;

use App\AppEvent;
use App\Event\ConferenceEvent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class ConferenceSubscriber implements EventSubscriberInterface
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
            AppEvent::CONFERENCE_ADD => array('add', 0),
            AppEvent::CONFERENCE_DELETE =>array("remove",0),
            AppEvent::CONFERENCE_EDIT => array ("edit",0)

        ];
    }

    public function add(ConferenceEvent $conferenceEvent)
    {
        $conference = $conferenceEvent->getConference();
        $this->em->persist($conference);
        $this->em->flush();
    }

    public function edit(ConferenceEvent $conferenceEvent)
    {
        $this->em->persist($conferenceEvent->getConference());
        $this->em->flush();
    }

    public function remove(ConferenceEvent $conferenceEvent)
    {
        $this->em->remove($conferenceEvent->getConference());
        $this->em->flush();
    }


}