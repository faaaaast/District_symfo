<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Artist;
use App\Entity\Disc;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
$artist1 = new Artist();

$artist1->setArtistName("RK");
$artist1->setArtistUrl("https://qotsa.com/");

$manager->persist($artist1);

$artist2 = new Artist();

$artist2->setArtistName("JUL");
$artist2->setArtistUrl("https://qotsa.com/");

$manager->persist($artist2);

$artist3 = new Artist();

$artist3->setArtistName("NINHO");
$artist3->setArtistUrl("https://qotsa.com/");

$manager->persist($artist3);

$artist4 = new Artist();

$artist4->setArtistName("SCH");
$artist4->setArtistUrl("https://qotsa.com/");

$manager->persist($artist4);

$artist5 = new Artist();

$artist5->setArtistName("SOSO MANESS");
$artist5->setArtistUrl("https://qotsa.com/");

$manager->persist($artist5);

$artist6 = new Artist();

$artist6->setArtistName("KOBA LA D");
$artist6->setArtistUrl("https://qotsa.com/");

$manager->persist($artist6);

$artist7 = new Artist();

$artist7->setArtistName("LETO");
$artist7->setArtistUrl("https://qotsa.com/");

$manager->persist($artist7);

$artist8 = new Artist();

$artist8->setArtistName("LACRIM");
$artist8->setArtistUrl("https://qotsa.com/");

$manager->persist($artist8);

$artist9 = new Artist();

$artist9->setArtistName("DA UZI");
$artist9->setArtistUrl("https://qotsa.com/");

$manager->persist($artist9);

$artist10 = new Artist();

$artist10->setArtistName("NEJ");
$artist10->setArtistUrl("https://qotsa.com/");

$manager->persist($artist10);

$disc1 = new Disc();
$disc1->setDiscTitle("B5");
$disc1->setDiscYear("2017");
$disc1->setDiscPicture("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqjE65JmYDJsLpwn6P68SX5ao21o8ibu03bQ&usqp=CAU");
$disc1->setDiscLabel("Youtube");
$disc1->setDiscGenre("nul");
$disc1->setDiscPrice("1.00");

$manager->persist($disc1);

$disc2 = new Disc();
$disc2->setDiscTitle("Alors la zone");
$disc2->setDiscYear("2020");
$disc2->setDiscPicture("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0x6X9rjPZTfcAF0fyZfeaZQULV6tRDRi-zA&usqp=CAU");
$disc2->setDiscLabel("Youtube");
$disc2->setDiscGenre("excellent");
$disc2->setDiscPrice("100.00");

$manager->persist($disc2);

$disc3 = new Disc();
$disc3->setDiscTitle("Lettre à une femme");
$disc3->setDiscYear("2015");
$disc3->setDiscPicture("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIFUd22v6d_AUTRflwaNduWJPomwqlo85I7A&usqp=CAU");
$disc3->setDiscLabel("Youtube");
$disc3->setDiscGenre("excellent");
$disc3->setDiscPrice("150.00");

$manager->persist($disc3);

$disc4 = new Disc();
$disc4->setDiscTitle("Interlude");
$disc4->setDiscYear("2018");
$disc4->setDiscPicture("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5UamOGot4Q2kkW46iZXkh6R77LNqBJrRkGw&usqp=CAU");
$disc4->setDiscLabel("Youtube");
$disc4->setDiscGenre("excellent");
$disc4->setDiscPrice("200.00");

$manager->persist($disc4);

$disc5 = new Disc();
$disc5->setDiscTitle("TP");
$disc5->setDiscYear("2014");
$disc5->setDiscPicture("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG8SCRuQ9Wc23xEXGA-b7XwJ_pkeAuTQTXjQ&usqp=CAU");
$disc5->setDiscLabel("Youtube");
$disc5->setDiscGenre("excellent");
$disc5->setDiscPrice("250.00");

$manager->persist($disc5);

$disc6 = new Disc();
$disc6->setDiscTitle("Train de vie");
$disc6->setDiscYear("2015");
$disc6->setDiscPicture("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8xpdEJz1_ta5H89idHzMob7wfbeikcIHKGA&usqp=CAU");
$disc6->setDiscLabel("Youtube");
$disc6->setDiscGenre("excellent");
$disc6->setDiscPrice("300.00");

$manager->persist($disc6);

$disc7 = new Disc();
$disc7->setDiscTitle("Mozart Capitaine Jackson");
$disc7->setDiscYear("2023");
$disc7->setDiscPicture("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlfB1IXMY3rRkmZYw69tNQ8is7f8UP9Zk6KjfHtw3cSip3C_tmllaW1GT2QlxXdEhZhA0&usqp=CAU");
$disc7->setDiscLabel("Youtube");
$disc7->setDiscGenre("excellent");
$disc7->setDiscPrice("350.00");

$manager->persist($disc7);

$disc8 = new Disc();
$disc8->setDiscTitle("Immortale");
$disc8->setDiscYear("2023");
$disc8->setDiscPicture("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQovPNZAfqyBaFSRXEepsn8xxHuT8sIvSPWkg&usqp=CAU");
$disc8->setDiscLabel("Youtube");
$disc8->setDiscGenre("excellent");
$disc8->setDiscPrice("100.00");

$manager->persist($disc8);

$disc9 = new Disc();
$disc9->setDiscTitle("La vraie vie");
$disc9->setDiscYear("2019");
$disc9->setDiscPicture("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8ZqRvSWmujE2UUiO8JPGxTAtBLLc2PALwug&usqp=CAU");
$disc9->setDiscLabel("Youtube");
$disc9->setDiscGenre("bien");
$disc9->setDiscPrice("10.00");

$manager->persist($disc9);

$disc10 = new Disc();
$disc10->setDiscTitle("Ma muse");
$disc10->setDiscYear("2023");
$disc10->setDiscPicture("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa6qwDcQkR4mN9BjIIbIRLOu3ix2zrofuFBA&usqp=CAU");
$disc10->setDiscLabel("Youtube");
$disc10->setDiscGenre("bien");
$disc10->setDiscPrice("11.00");

$manager->persist($disc10);

$disc1->setArtist($artist1);
$disc2->setArtist($artist2);
$disc3->setArtist($artist3);
$disc4->setArtist($artist4);
$disc5->setArtist($artist5);
$disc6->setArtist($artist6);
$disc7->setArtist($artist7);
$disc8->setArtist($artist8);
$disc9->setArtist($artist9);
$disc10->setArtist($artist10);

        $manager->flush();
        
    }
}