<?php

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sciFi = new Genre();
        $sciFi->setName("Sci-Fi");
        $manager->persist($sciFi);

        $fantasy = new Genre();
        $fantasy->setName("Fantasy");
        $manager->persist($fantasy);

        $action = new Genre();
        $action->setName("Action");
        $manager->persist($action);

        $manager->flush();
    }
}
