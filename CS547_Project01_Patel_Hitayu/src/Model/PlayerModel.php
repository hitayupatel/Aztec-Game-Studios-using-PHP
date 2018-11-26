<?php
namespace AztecGameStudios\Model;

use AztecGameStudios\Domain\Player;
use AztecGameStudios\Exceptions\NotFoundException;

class PlayerModel extends AbstractModel {
    public function get (int $playerId): Player {
        $query = 'SELECT * FROM players WHERE players_id = :player';
        $sth = $this->db->prepare($query);
        $sth->execute(['plsyer' => $playerId]);

        $row = $sth->fetch();

        if(empty($row)) {
            throw new NotFoundException;
        }

        $player = Player::create()->setId($row["id"])->setScreenName($row["screenName"])
            ->setFirstName($row["firstName"])
            ->setLastName($row["lastName"])
            ->setEmail($row["email"])
            ->setDob($row["dob"])
            ->setGamesPlayed($row["gamesplayed"])
            ->setGamesPurchased($row["gamesPurchased"])
            ->setDateJoined($row["dateJoined"])
            ->setLastLogin($row["lastLogin"])
            ->setRole($row["role"]);
        return $player;
    }

    public function getByEmail(string $email): Player {
        $query = 'SELECT * FROM players WHERE email=:player';
        $sth = $this->db->prepare($query);
        $sth->execute(['player' => $email]);

        $row = $sth->fetch();

        if(empty($row)) {
            throw new NotFoundException;
        }

        $player=Player::create()->setId($row["id"])->setScreenName($row["screenName"])
            ->setFirstName($row["firstName"])
            ->setLastName($row["lastName"])
            ->setEmail($row["email"])
            ->setRole($row["role"]);
        return $player;
    }
}