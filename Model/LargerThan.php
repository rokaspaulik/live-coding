<?php

class LargerThan implements iCalculatable {
    private $number;
    private $word;

    public function __construct(int $number, string $word)
    {
        $this->number = $number;
        $this->word = $word;
    }

    public function calculate($i)
    {
        if ($i > $this->number) {
            return $this->word;
        }

        return '';
    }
}
