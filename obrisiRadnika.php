<?php

require 'klase/Tim.php';
require 'klase/Level.php';
require 'klase/Clan.php';

require 'db/DbConnection.php';

$db = new DbConnection();

$id = $_GET['id'];

$db->izbrisiClana($id);

echo "Clan je izbrisan!";