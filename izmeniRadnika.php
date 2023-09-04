<?php

require 'klase/Tim.php';
require 'klase/Level.php';
require 'klase/Clan.php';

require 'db/DbConnection.php';

$db = new DbConnection();

$radnikIzmena = $_POST['radnik'];
$ocenaIzmena = $_POST['ocena'];

$db->promeniOcenuClana($radnikIzmena, $ocenaIzmena);

echo "Ocena je izmenjena!";
