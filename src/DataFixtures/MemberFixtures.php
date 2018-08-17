<?php

namespace App\DataFixtures;

use App\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MemberFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $member = new Member();
            $member->setFirstname('Firstname' . $i);
            $member->setLastname('Lastname' . $i);
            $member->setUsername('Username' . $i);
            $member->setPassword('Password' . $i);
            $member->setDateCreation(new \DateTime('now'));
            $member->setDateLastInscription(new \DateTime('now'));
            $member->setApiKey('Username' . $i);

            $manager->persist($member);
        }

        $manager->flush();
    }
}
