<?php
/**
 * Created by PhpStorm.
 * User: helorion
 * Date: 11/02/18
 * Time: 19:04
 */

namespace App\EventListerner;


use App\AppEvent;
use App\Event\HomepageEvent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class HomepageSubscriber implements EventSubscriberInterface
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
            AppEvent::HOMEPAGE_ADD => array('add', 0),
            AppEvent::HOMEPAGE_EDIT => array ("edit",0)

        ];
    }

    public function add(HomepageEvent $homepageEvent)
    {
        $homepage = $homepageEvent->getHomepage();
        $this->em->persist($homepage);
        $this->em->flush();
    }

    public function edit(HomepageEvent $homepageEvent)
    {
        $this->em->persist($homepageEvent->getHomepage());
        $this->em->flush();
    }



}