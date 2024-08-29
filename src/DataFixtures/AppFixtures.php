<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Filesystem\Filesystem;

class AppFixtures extends Fixture
{
    public function __construct(private Filesystem $filesystem)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $produits = [
            [
                'nom' => 'Caleçon sale JCVD',
                'prix' => 650,
                'description' => 'Porté lors de sa fameuse cascade dans son film "last action hero"',
                'image' => 'caleconJCVD.jpg'
            ],
            [
                'nom' => 'Kickboxer : La chaussette anti-transpiration JCVD',
                'prix' => 99,
                'description' => 'Pour garder les pieds au sec pendant vos combats de rue',
                'image' => 'chaussettesJCVD.jpg'
            ],
            [
                'nom' => "Déguisement 'Universal Soldier' : Le camouflage urbain",
                'prix' => 330,
                'description' => 'Pour passer inaperçu en pleine ville',
                'image' => 'camouflage.jpg'
            ],
            [
                'nom' => "Le sent bon JCVD",
                'prix' => 45,
                'description' => "Pour piloter avec l'odeur du Puissant",
                'image' => 'sentBon.jpg'
            ],
            [
                'nom' => 'Le tapis de souris JCVD',
                'prix' => 28,
                'description' => 'Pour éfleurer les tablettes légendaire de JCVD',
                'image' => 'tapisSouris.jpg'
            ],
            [
                'nom' => "L'authentique assiette de JCVD",
                'prix' => 850,
                'description' => "Pour avoir la même régime alimentaire qu'un bourreau des cœurs",
                'image' => 'assietteJCVD.png'
            ],
            [
                'nom' => 'Les lunettes de soleil miroir de JCVD : Pour un regard de killer',
                'prix' => 220,
                'description' => 'Pour afficher un style inimitable',
                'image' => 'lunettesJCVD.jpg'
            ],
            [
                'nom' => 'La perruque authentique de Jean Claude',
                'prix' => 1500,
                'description' => 'Pour devenir la star de votre soirée',
                'image' => 'perruqueJCVD.jpg'
            ],
            [
                'nom' => 'Le sac de sport "Muscles en béton armé"',
                'prix' => 100,
                'description' => "JCVD ne s'est pas construit en un jour ...",
                'image' => 'sacJCVD.jpg'
            ],
            [
                'nom' => "Le livre des JC'",
                'prix' => 60,
                'description' => "intègre la communauté JC si tu n'as pas peur de la perfection",
                'image' => 'livreJCVD.jpg'
            ],

        ];

        foreach ($produits as $produitData) {
            $produit = new Produit();
            $produit->setNom($produitData['nom'])
                ->setDescription($produitData['description'])
                ->setPrix($produitData['prix']);
            $imagePath = $produitData['image'];

            $produit->setImage($imagePath);

            $manager->persist($produit);
        }

        $manager->flush();
    }
}
