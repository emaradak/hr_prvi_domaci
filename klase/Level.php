<?php

class Level implements JsonSerializable
{
    private $levelId;
    private $nazivLevela;

    public function __construct($levelId, $nazivLevela)
    {
        $this->levelId = $levelId;
        $this->nazivLevela = $nazivLevela;
    }

    public function getLevelId()
    {
        return $this->levelId;
    }

    public function getNazivLevela()
    {
        return $this->nazivLevela;
    }

    public function setLevelId($levelId)
    {
        $this->levelId = $levelId;
    }

    public function setNazivLevela($nazivLevela)
    {
        $this->nazivLevela = $nazivLevela;
    }

    public function jsonSerialize(): array
    {
        return [
            'levelId' => $this->levelId,
            'nazivLevela' => $this->nazivLevela
        ];
    }

    public static function toEntity($row)
    {
        return new Level($row['level_id'], $row['naziv_levela']);
    }
}