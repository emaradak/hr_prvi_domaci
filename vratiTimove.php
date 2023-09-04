<?php
require 'klase/Tim.php';
require 'klase/Level.php';
require 'klase/Clan.php';

require 'db/DbConnection.php';

$db = new DbConnection();

$rezultat = $db->izvrsiUpit("SELECT * FROM tim");

$timovi = [];

while ($red = $rezultat->fetch_assoc()) {
    $timovi[] = Tim::toEntity($red);
}

echo json_encode($timovi);