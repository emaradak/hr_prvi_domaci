<?php

require 'klase/Tim.php';
require 'klase/Level.php';
require 'klase/Clan.php';

require 'db/DbConnection.php';

$db = new DbConnection();

$imePrezime = $_POST['imePrezime'];
$datumRodjenja = $_POST['datumRodjenja'];
$tim = $_POST['tim'];
$level = $_POST['level'];
$ocena =  $_POST['ocena'];
$brojTelefona = $_POST['brojTelefona'];


$data = [
    'imePrezime' => $imePrezime,
    'datumRodjenja' => $datumRodjenja,
    'tim_id' => $tim,
    'level_id' => $level,
    'ocenaRada' => $ocena,
    'brojTelefona' => $brojTelefona
];


if($db->insert('clan', $data)){
    echo "Clan je uspesno unet!";
} else {
    echo "Greska prilikom unosa clana!";
}