<?php

require 'klase/Tim.php';
require 'klase/Level.php';
require 'klase/Clan.php';

require 'db/DbConnection.php';

$db = new DbConnection();

$rezultat = $db->izvrsiUpit("SELECT * FROM clan c JOIN tim t ON c.tim_id = t.tim_id JOIN level l ON c.level_id = l.level_id");

$clanovi = [];

while ($red = $rezultat->fetch_assoc()) {
    $clanovi[] = Clan::toEntity($red);
}

echo json_encode($clanovi);