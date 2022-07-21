<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Finder\Finder;

class SerieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $finder = new Finder();
        $finder->in(__DIR__ . '/sql');
        $finder->name('*.sql');
        $finder->files();
        $finder->sortByName();

        foreach ($finder as $file) {
            $content = $file->getContents();

            /* @var EntityManagerInterface $manager */
            $manager->getConnection()->executeQuery($content);

            $manager->flush();
        }
    }
}
