<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Tests\Repository;

use App\Entity\Formation;
use App\Entity\Playlist;
use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Description of PlaylistRepositoryTest
 *
 * @author inesl
 */
class PlaylistRepositoryTest extends KernelTestCase {

    /**
     * Récupère le repository de Playlist
     * @return PlaylistRepository
     */
    public function recupRepository(): PlaylistRepository {
        self::bootKernel();
        $repository = self::getContainer()->get(PlaylistRepository::class);
        return $repository;
    }

    /**
     * Test de la méthode findAllOrderByNumber du repository de Playlist
     */
    public function testFindAllOrderbyNumber() {
        $repository = $this->recupRepository();
        $playlists = $repository->findAllOrderByNumber("DESC");
        $this->assertEquals(13, $playlists[0]->getId());
    }

}
