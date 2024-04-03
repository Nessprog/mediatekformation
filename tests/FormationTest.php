<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Tests;

use App\Entity\Formation;
use PHPUnit\Framework\TestCase;


/**
 * Description of FormationTest
 *
 * @author inesl
 */
class FormationTest extends TestCase {
    /**
     * Test de la date d'ajout d'une formation
     */
    public function testGetPublishedAtString() {
        $formation = new Formation();
        $formation->setPublishedAt(new \DateTime("2023-05-15 17:00:12"));
        $this->assertEquals("15/05/2023", $formation->getPublishedAtString());
    }
}