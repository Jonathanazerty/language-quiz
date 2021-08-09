<?php

class Player
{
    // TODO: add name and score
    private string $name;
    public float $score;

    public function __construct(string $name, float $score)
    {
        // TODO: add 👤 automatically to their name
        $this->name = $name;
        $this->score = $score;
    }
}