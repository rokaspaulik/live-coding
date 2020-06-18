<?php

class CalcMultiNum implements iCalculatable {
    private $numbers;
    private $word;

    public function __construct(array $numbers, string $word)
    {
        $this->numbers = $numbers;
        $this->word = $word;
    }

    public function calculate($i)
    {
        if (in_array($i, $this->numbers)) {
            return $this->word;
        }

        return '';
    }
}
