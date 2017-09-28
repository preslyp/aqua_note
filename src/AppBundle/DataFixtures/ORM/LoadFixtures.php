<?php
/**
 * Created by PhpStorm.
 * User: pancho
 * Date: 9/28/17
 * Time: 2:07 PM
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        Fixtures::load(__DIR__."/fixtures.yml", $manager);
    }
}