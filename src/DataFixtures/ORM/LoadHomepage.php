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
        $homepage->setTitle("Topology and Geometry 2018");
        $homepage->setDate("4-5 June");
        $homepage->setLieu("Lens, France");
        $homepage->setSubtitle("Welcome in Lens !");
        $homepage->setSubtext("The Laboratoire de Mathématiques de Lens is hosting, with a financial
							support from the Fédération de Recherche Mathématiques, GDR 2875 of
							Topology and Applications and from the Université d’Artois a meeting starting
							on the afternoon of the 4th and ending the morning of 5th of june 2018.
							In constrast with the five previous editions (2017, 2016, 2015, 2014 ,2013)
							this meeting is built around the Mini-Course “,,,,,” given by Pr. M. Bangal
							(Heilderberg University).");
        $homepage->setFooter("If you wish to give a talk or to attend the meeting fill the register form.Organizers Y. 
                                    Frégier, M. Saralegi-Aranguren and Daniel Tanré. 
                                    There will be a conference dinner offered by the organization.");
        $manager->persist($homepage);
        $manager->flush();

    }

}