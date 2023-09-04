<?php

class Clan implements JsonSerializable
{
    private $clanId;
    private $imePrezime;
    private $datumRodjenja;
    private $brojTelefona;
    private $ocena;
    private $tim;
    private $level;

    public function __construct($clanId, $imePrezime, $datumRodjenja, $brojTelefona, $ocena, $tim, $level)
    {
        $this->clanId = $clanId;
        $this->imePrezime = $imePrezime;
        $this->datumRodjenja = $datumRodjenja;
        $this->brojTelefona = $brojTelefona;
        $this->ocena = $ocena;
        $this->tim = $tim;
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getClanId()
    {
        return $this->clanId;
    }

    /**
     * @param mixed $clanId
     * @return Clan
     */
    public function setClanId($clanId)
    {
        $this->clanId = $clanId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImePrezime()
    {
        return $this->imePrezime;
    }

    /**
     * @param mixed $imePrezime
     * @return Clan
     */
    public function setImePrezime($imePrezime)
    {
        $this->imePrezime = $imePrezime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatumRodjenja()
    {
        return $this->datumRodjenja;
    }

    /**
     * @param mixed $datumRodjenja
     * @return Clan
     */
    public function setDatumRodjenja($datumRodjenja)
    {
        $this->datumRodjenja = $datumRodjenja;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrojTelefona()
    {
        return $this->brojTelefona;
    }

    /**
     * @param mixed $brojTelefona
     * @return Clan
     */
    public function setBrojTelefona($brojTelefona)
    {
        $this->brojTelefona = $brojTelefona;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOcena()
    {
        return $this->ocena;
    }

    /**
     * @param mixed $ocena
     * @return Clan
     */
    public function setOcena($ocena)
    {
        $this->ocena = $ocena;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTim()
    {
        return $this->tim;
    }

    /**
     * @param mixed $tim
     * @return Clan
     */
    public function setTim($tim)
    {
        $this->tim = $tim;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     * @return Clan
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'clanId' => $this->clanId,
            'imePrezime' => $this->imePrezime,
            'datumRodjenja' => $this->datumRodjenja,
            'brojTelefona' => $this->brojTelefona,
            'ocena' => $this->ocena,
            'tim' => $this->tim,
            'level' => $this->level
        ];
    }

    public static function toEntity($row)
    {
        $tim = Tim::toEntity($row);
        $level = Level::toEntity($row);

        return new Clan($row['id'], $row['imePrezime'], $row['datumRodjenja'], $row['brojTelefona'], $row['ocenaRada'], $tim , $level);
    }

}