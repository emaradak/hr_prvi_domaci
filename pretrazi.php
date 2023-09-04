<?php

require 'klase/Tim.php';
require 'klase/Level.php';
require 'klase/Clan.php';

require 'db/DbConnection.php';

$db = new DbConnection();

$pretraga = $_GET['pretraga'];
$sort = $_GET['sort'];

$clanovi = $db->pretraziClanove($pretraga, $sort);

echo json_encode($clanovi);