<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\CheeseListing;

class AppFixtures extends Fixture
{

	/**
 	* @ORM\PrePersist
 	* @ORM\PreUpdate
	*/
	
    public function load(ObjectManager $manager)
    {     

    for ($i = 0; $i < 20; $i++) {     
    	$cheeseListing = new CheeseListing();

        // $manager->persist($product);
        // $product = new Product();
        // $manager->persist($product);
        // private $title;
        //  private $description;
        //  private $price;private $createdAt;
        //  private $isPublished;
        //  
        //  $product->setName('product '.$i);
            $hora = new \DateTime('now');
      
            $cheeseListing->setTitle('gustavo1'.$i);
            $cheeseListing->setDescription('aca estamos '.$i);
            $cheeseListing->setPrice(1500+$i);
            $cheeseListing->setCreatedAt($hora);
            $cheeseListing->setIsPublished(false);
          
            $manager->persist($cheeseListing);
        }

            $manager->flush();
    }
}
