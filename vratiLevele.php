<?php

require 'klase/Tim.php';
require 'klase/Level.php';
require 'klase/Clan.php';

require 'db/DbConnection.php';

$db = new DbConnection();

$rezultat = $db->izvrsiUpit("SELECT * FROM level");

$leveli = [];

while ($red = $rezultat->fetch_assoc()) {
    $leveli[] = Level::toEntity($red);
}

echo json_encode($leveli);