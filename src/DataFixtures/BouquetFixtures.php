<?php

namespace App\DataFixtures;

use App\Entity\Bouquet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BouquetFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $replicas = [
            [
                'synonyme' => 'fragrance',
                'fakeReplica' => "Tu sais, la fragrance, c'est comme l'âme invisible de la nature. Quand tu la sens, tu touches l'essence même de l'univers."
            ],
            [
                'synonyme' => 'fumet',
                'fakeReplica' => "Le fumet de la forêt m'inspire à trouver l'équilibre entre force et sérénité, comme une danse harmonieuse de l'esprit et du corps."
            ],
            [
                'synonyme' => 'odeur',
                'fakeReplica' => "L'odeur, c'est comme une onde énergétique qui voyage dans l'air. Elle te connecte à l'instant présent, te fait ressentir le passé, et parfois, elle te donne un aperçu du futur."
            ],
            [
                'synonyme' => "feu d'articifice",
                'fakeReplica' => "Quand tu regardes un feu d'artifice, c'est comme si chaque explosion libérait des fragments de ta conscience, éclatant dans le ciel comme les idées qui jaillissent de ton esprit en pleine méditation."
            ],
            [
                'synonyme' => 'gerbe',
                'fakeReplica' => "Tu sais, dans la vie, une gerbe d'étincelles, c'est comme un flot de pensées qui jaillit de ton cerveau. Ça peut éclairer l'obscurité ou la nourrir, tout dépend de l'intention que tu y mets."
            ],
            [
                'synonyme' => 'botte',
                'fakeReplica' => "Une botte, c'est pas juste une chaussure, c'est comme un ancrage. Chaque pas que tu fais avec te connecte à la terre, et chaque foulée te rapproche un peu plus de ton objectif cosmique."
            ],
            [
                'synonyme' => 'pompom',
                'fakeReplica' => "Le pompom, c'est comme une explosion de joie dans un monde souvent trop sérieux. C'est un symbole vibrant de l'énergie qui éclate et illumine même les moments les plus sombres de ta vie."
            ],
            [
                'synonyme' => 'comble',
                'fakeReplica' => "Le comble de l'existence, c'est comme le sommet d'une montagne intérieure. Quand tu l'atteins, tu réalises que l'ascension n'était pas seulement physique, mais surtout spirituelle."
            ],
            [
                'synonyme' => 'bosquet',
                'fakeReplica' => "Un bosquet, c'est comme un petit univers caché où chaque arbre et chaque feuille murmure des secrets. C’est un sanctuaire pour l’esprit, un lieu où la paix et la force se rencontrent dans un ballet silencieux."
            ],
            [
                'synonyme' => 'parfum',
                'fakeReplica' => "Le parfum, c'est comme une mélodie invisible qui danse autour de toi. Chaque senteur est une note qui réveille des souvenirs et éveille des émotions, comme un symphonie subtile jouée par l'univers."
            ],
        ];

        foreach ($replicas as $replicaData) {
            $replica = new Bouquet();
            $replica ->setSynonyme($replicaData['synonyme'])
                     ->setFakeReplica($replicaData['fakeReplica']);
            $manager->persist($replica);
        }

        $manager->flush();
    }
}
