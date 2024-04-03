<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Tests\Validations;

use App\Entity\Formation;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Description of FormationValidationTest
 *
 * @author inesl
*/

class FormationValidationsTest extends KernelTestCase {

    public function getFormation(): Formation {
        return (new Formation())
                        ->setTitle("Tests intégration")
                        ->setDescription("test validation exemple")
                        ->setVideoId("UW9UoMcHLbc");
    }

    public function assertErrors(Formation $formation, int $nbErreursAttendues) {
        self::bootKernel();
        $validator = self::getContainer()->get(ValidatorInterface::class);
        $errors = $validator->validate($formation);

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo $error->getPropertyPath() . ': ' . $error->getMessage() . PHP_EOL;
            }
        }

        $this->assertCount($nbErreursAttendues, $errors);
    }

    public function testValidDateFormation() {
        $formation = $this->getFormation()->setPublishedAt(new DateTime("2023-11-23 18:00:12"));
        $this->assertErrors($formation, 0);
    }

}