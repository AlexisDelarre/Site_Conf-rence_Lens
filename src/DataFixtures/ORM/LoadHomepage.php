<?php
/**
 * Created by PhpStorm.
 * User: helorion
 * Date: 17/02/18
 * Time: 15:01
 */

namespace App\DataFixtures\ORM;

use App\Entity\Homepage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadHomepage extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $homepage = new Homepage();
        $homepage->setTitle("Conference Jean-Perin");
        $homepage->setDate("15-19 février");
        $homepage->setLieu("Jean-Perin salle P110");
        $homepage->setSubtitle("Sous-Titre");
        $homepage->setSubtext("Sous texte Sous texte Sous texte Sous texte Sous texte Sous texte");
        $homepage->setFooter("Conference Math");
        $manager->persist($homepage);
        $manager->flush();

    }

}