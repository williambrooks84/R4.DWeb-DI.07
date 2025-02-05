<?php

// Là ou la classe est déclarée (où son fichier se trouve)
namespace App\Service;

use App\Entity\Lego;
use \PDO;

class LegoService
{
    public function getLegos(): array
    {
        $db = 'mysql:host=tp-symfony-mysql;dbname=lego_store;charset=utf8';
        $username = 'root';
        $password = 'root';
        $pdo = new PDO($db, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query('SELECT * FROM lego');
        $legos = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $lego = new Lego($row['id'], $row['name'], $row['collection']);
            $lego->setDescription($row['description']);
            $lego->setPrice($row['price']);
            $lego->setPieces($row['pieces']);
            $lego->setBoxImage($row['imagebox']);
            $lego->setLegoImage($row['imagebg']);
            $legos[] = $lego;
        }

        return $legos;
    }

    public function getLegosByCollection($collection){
        $db = 'mysql:host=tp-symfony-mysql;dbname=lego_store;charset=utf8';
        $username = 'root';
        $password = 'root';
        $pdo = new PDO($db, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('SELECT * FROM lego WHERE collection = :collection');
        $stmt->execute(['collection' => $collection]);
        $legos = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $lego = new Lego($row['id'], $row['name'], $row['collection']);
            $lego->setDescription($row['description']);
            $lego->setPrice($row['price']);
            $lego->setPieces($row['pieces']);
            $lego->setBoxImage($row['imagebox']);
            $lego->setLegoImage($row['imagebg']);
            $legos[] = $lego;
        }

        return $legos;
    }
}