<?php
/**
 * Created by PhpStorm.
 * User: helorion
 * Date: 17/02/18
 * Time: 15:01
 */

namespace App\DataFixtures\ORM;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAdmin extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setId(1);
        $admin->setName("adminlml");
        $admin->setEmail("martin.saralegui@sfr.fr");
        $admin->setAdmin(true);
        $admin->setPassword("azerty");

        $manager->persist($admin);
        $manager->flush();

    }

}