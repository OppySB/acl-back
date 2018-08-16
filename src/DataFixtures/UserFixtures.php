<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->setFirstname("Firstname" . $i);
            $user->setLastname("Lastname" . $i);
            $user->setLogin("Login" . $i);
            $user->setPassword("Password" . $i);
            $user->setDateCreation(new \DateTime('now'));
            $user->setFirstname(new \DateTime('now'));

            $manager->persist($user);
        }

        $manager->flush();
    }
}
