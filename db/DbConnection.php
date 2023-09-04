<?php

class DbConnection
{
    private $konekcija;

    public function __construct()
    {
        $this->konekcija = new Mysqli('localhost', 'root', '', 'hr_prvi');
        $this->konekcija->set_charset('utf8');
    }

    public function izvrsiUpit($upit)
    {
        $rezultat = $this->konekcija->query($upit);
        if ($rezultat === false) {
            die('Nije izvrsen upit: ' . $this->konekcija->error);
        }
        return $rezultat;
    }

    public function insert($table, $data){
        $columns = implode(", ", array_keys($data));
        $values = implode("', '", array_values($data));
        $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
        return $this->izvrsiUpit($sql);
    }

    public function promeniOcenuClana($clanId, $ocena){
        $sql = "UPDATE clan SET ocenaRada = $ocena WHERE id = $clanId";
        $this->izvrsiUpit($sql);
    }

    public function izbrisiClana($clanId){
        $sql = "DELETE FROM clan WHERE id = $clanId";
        $this->izvrsiUpit($sql);
    }

    public function pretraziClanove($pretraga, $sort){
        $sql = "SELECT * FROM clan c JOIN tim t ON c.tim_id = t.tim_id JOIN level l ON c.level_id = l.level_id WHERE c.imePrezime LIKE '%$pretraga%' ORDER BY $sort";
        $rezultat = $this->izvrsiUpit($sql);
        $clanovi = [];
        while ($red = $rezultat->fetch_assoc()) {
            $clanovi[] = Clan::toEntity($red);
        }
        return $clanovi;
    }
}