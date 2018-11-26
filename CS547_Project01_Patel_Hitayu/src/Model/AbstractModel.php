<?php

namespace AztecGameStudios\Model;

use PDO;

abstract class AbstractModel {
    protected $db;

    public function __construct__(PDO $db) {
        $this->db = $db;
    }
}