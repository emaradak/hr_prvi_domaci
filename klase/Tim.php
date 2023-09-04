<?php

class Tim implements JsonSerializable
{
    private $timId;
    private $nazivTima;

    public function __construct($timId, $nazivTima)
    {
        $this->timId = $timId;
        $this->nazivTima = $nazivTima;
    }

    public function getTimId()
    {
        return $this->timId;
    }

    public function getNazivTima()
    {
        return $this->nazivTima;
    }

    public function setTimId($timId)
    {
        $this->timId = $timId;
    }

    public function setNazivTima($nazivTima)
    {
        $this->nazivTima = $nazivTima;
    }


    public function jsonSerialize(): array
    {
        return [
            'timId' => $this->timId,
            'nazivTima' => $this->nazivTima
        ];
    }

    public static function toEntity($row)
    {
        return new Tim($row['tim_id'], $row['naziv_tima']);
    }
}