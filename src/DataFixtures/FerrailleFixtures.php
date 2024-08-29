<?php

namespace App\DataFixtures;

use App\Entity\Ferraille;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FerrailleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Ferraille 1
        $ferraille1 = new Ferraille();
        $ferraille1->setNom('Mitraillette');
        $ferraille1->setPrix(120.00);
        $ferraille1->setType('Acier');
        $ferraille1->setDescription('Mitraillette d\'acier résistante, idéale pour la destruction.');
        $ferraille1->setImage('mitraillette_jcvd.jpg');
        $manager->persist($ferraille1);

        // Ferraille 2
        $ferraille2 = new Ferraille();
        $ferraille2->setNom('Pistolets');
        $ferraille2->setPrix(200.00);
        $ferraille2->setType('Cuivre');
        $ferraille2->setDescription('Pistolets en cuivre, parfait pour la dézinguerie.');
        $ferraille2->setImage('pistolet_jcvd.jpg');
        $manager->persist($ferraille2);

        // Ferraille 3
        $ferraille3 = new Ferraille();
        $ferraille3->setNom('Canon');
        $ferraille3->setPrix(150.00);
        $ferraille3->setType('Aluminium');
        $ferraille3->setDescription('Canon en aluminium léger et robuste.');
        $ferraille3->setImage('canon_jcvd.jpg');
        $manager->persist($ferraille3);

        // Flush pour sauvegarder les trois objets dans la base de données
        $manager->flush();
    }
}
