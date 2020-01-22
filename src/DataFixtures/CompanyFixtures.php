<?php

namespace App\DataFixtures;

use App\Entity\Company;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CompanyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $company = new Company();
        $company->setName("RibéGroupe");
        $manager->persist($company);

        $company = new Company();
        $company->setName("RibéPrim");
        $manager->persist($company);

        $company = new Company();
        $company->setName("RodaFruits");
        $manager->persist($company);

        $company = new Company();
        $company->setName("Les Halles St Jean");
        $manager->persist($company);

        $company = new Company();
        $company->setName("Promer Océan");
        $manager->persist($company);

        $company = new Company();
        $company->setName("Velders");
        $manager->persist($company);

        $company = new Company();
        $company->setName("Ardennes Primeurs");
        $manager->persist($company);

        $company = new Company();
        $company->setName("RivoAllon");
        $manager->persist($company);

        $company = new Company();
        $company->setName("DifforVert");
        $manager->persist($company);

        $manager->flush();
    }
}
