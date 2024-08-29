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
                'image' => ''
            ],
            [
                'nom' => 'Universal Soldier : Le camouflage urbain',
                'prix' => 330,
                'description' => 'Pour passer inaperçu en pleine ville',
                'image' => '...'
            ],
            [
                'nom' => "Timecop : Le déodorant 'Retour vers le futur'",
                'prix' => 45,
                'description' => 'Pour sentir bon, même après avoir voyagé dans le temps',
                'image' => ''
            ],
            [
                'nom' => 'Le split de JCVD : Le tapis de yoga pour débutant',
                'prix' => 120,
                'description' => 'Pour atteindre la flexibilité légendaire de JCVD',
                'image' => ''
            ],
            [
                'nom' => "La potion magique de JCVD : Le booster d'énergie",
                'prix' => 19,
                'description' => "Pour avoir la même énergie qu'un bourreau des cœurs",
                'image' => ''
            ],
            [
                'nom' => 'Les lunettes de soleil miroir de JCVD : Pour un regard de killer',
                'prix' => 220,
                'description' => 'Pour afficher un style inimitable',
                'image' => ''
            ],
            [
                'nom' => 'La perruque authentique de Jean Claude',
                'prix' => 1500,
                'description' => 'Pour devenir la star de votre soirée',
                'image' => ''
            ],
            [
                'nom' => 'Le sac de sport "Muscles en béton armé"',
                'prix' => 100,
                'description' => "Pour transporter votre matériel d'entraînement avec style",
                'image' => ''
            ],
            [
                'nom' => "Le livre de recettes 'Cuisine à la JCVD' : Des plats aussi musclés que lui",
                'prix' => 60,
                'description' => "Pour préparer des repas dignes d'un champion",
                'image' => ''
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
