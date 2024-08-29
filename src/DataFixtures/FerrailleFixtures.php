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
        $ferraille1->setNom('Mitraillette de JCVD');
        $ferraille1->setPrix(120.00);
        $ferraille1->setType('Acier');
        $ferraille1->setDescription('Mitraillette d\'acier résistante, idéale pour la destruction.');
        $ferraille1->setImage('mitraillette_jcvd.jpg');
        $manager->persist($ferraille1);

        // Ferraille 2
        $ferraille2 = new Ferraille();
        $ferraille2->setNom('Pistolets de JJ');
        $ferraille2->setPrix(200.00);
        $ferraille2->setType('Cuivre');
        $ferraille2->setDescription('Pistolets en cuivre, parfait pour la dézinguerie.');
        $ferraille2->setImage('pistolet_jcvd.jpg');
        $manager->persist($ferraille2);

        // Ferraille 3
        $ferraille3 = new Ferraille();
        $ferraille3->setNom('Canon de Jean-Claude');
        $ferraille3->setPrix(150.00);
        $ferraille3->setType('Aluminium');
        $ferraille3->setDescription('Canon en aluminium léger et robuste.');
        $ferraille3->setImage('canon_jcvd.jpg');
        $manager->persist($ferraille3);

        // Ferraille 4
        $ferraille4 = new Ferraille();
        $ferraille4->setNom('Grosse grosse grosse mitraillette de Jean-Claude');
        $ferraille4->setPrix(120.00);
        $ferraille4->setType('Plomb');
        $ferraille4->setDescription('Embarquez avec la très grosse mitraillette en plomb de Jean-Claude et préparez-vous à faire rougir d\'envie les armées entières ! Un outil de choix pour ceux qui veulent vraiment impressionner avec leur arsenal. Avec elle, chaque tir est une scène d’action et chaque cible devient un adversaire à conquérir !');
        $ferraille4->setImage('defonceuse_jcvd.jpg');
        $manager->persist($ferraille4);

        // Ferraille 5
        $ferraille5 = new Ferraille();
        $ferraille5->setNom('Epée de JJ');
        $ferraille5->setPrix(200.00);
        $ferraille5->setType('Laiton');
        $ferraille5->setDescription('L\'épée en laiton de Jean-Claude est l\'outil de tranchage qui transforme chaque coupe en un coup de maître digne d\'un final spectaculaire où même les légumes applaudissent !');
        $ferraille5->setImage('epee_jcvd.jpg');
        $manager->persist($ferraille5);

        // Ferraille 6
        $ferraille6 = new Ferraille();
        $ferraille6->setNom('Couteau de JCVD');
        $ferraille6->setPrix(150.00);
        $ferraille6->setType('Acier');
        $ferraille6->setDescription('Le couteau en acier de Jean-Claude : l\'arme ultime qui découpe le fromage avec la même précision que JCVD découpe ses ennemis dans un film d\'action !');
        $ferraille6->setImage('couteau_jcvd.jpg');
        $manager->persist($ferraille6);

        // Flush pour sauvegarder les trois objets dans la base de données
        $manager->flush();
    }
}
