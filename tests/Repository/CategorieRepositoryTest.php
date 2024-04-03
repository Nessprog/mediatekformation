<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Tests\Repository;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Description of CategorieRepositoryTest
 *
 * @author inesl
 */
class CategorieRepositoryTest extends KernelTestCase{

    /**
     * Récupère le repository de Categorie
     * @return CategorieRepository
     */
    public function recupRepository() : CategorieRepository {
        self::bootKernel();
        $repository = self::getContainer()->get(CategorieRepository::class);
        return $repository;
    }

    /**
     * Création d'une instance de Categorie avec nom
     * @return Categorie
     */
    public function newCategorie() : Categorie {
        $categorie = (new Categorie())
                ->setName('Swift');
        return $categorie;
    }

    /**
     * Test de la méthode findByName du repository Categorie avec le nom swift
     */
    public function testFindByName() {
        $repository = $this->recupRepository();
        $categorie = $this->newCategorie();
        $repository->add($categorie, true);
        $categorieTrouvee = $repository->findByName("Swift");
        $this->assertEquals("Swift", $categorieTrouvee[0]->getName());
    }

}
