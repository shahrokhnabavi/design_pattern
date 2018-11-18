<?php

namespace App\Facade;

class Database
{
    private $dataSet
        = [
            2 => ['name' => 'shahrokh', 'age' => 35],
            21 => ['name' => 'Ariyan', 'age' => 15],
            23 => ['name' => 'Mahrokh', 'age' => 25],
        ];

    private function checkIfExist(int $id): bool
    {
        if (key_exists($id, $this->dataSet)) {
            return true;
        }
        echo 'User not found.<br/>';
        return false;
    }

    public function getData(int $id): array
    {
        if ($this->checkIfExist($id)) {
            return $this->dataSet[$id];
        }

        return [];
    }
}
