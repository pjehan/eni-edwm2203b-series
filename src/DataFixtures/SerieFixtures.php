<?php

namespace App\DataFixtures;

use App\Entity\Serie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SerieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $gameOfThrone = new Serie();
        $gameOfThrone->setName("Game Of Thrones");
        $gameOfThrone->setOverview("Game of Thrones is an American fantasy drama television series created by David Benioff and D. B. Weiss for HBO.");
        $gameOfThrone->setStatus("En cours");
        $manager->persist($gameOfThrone);

        $breakingBad = new Serie();
        $breakingBad->setName("Breaking Bad");
        $breakingBad->setStatus("Terminé");
        $manager->persist($breakingBad);

        $manager->flush();
    }
}
