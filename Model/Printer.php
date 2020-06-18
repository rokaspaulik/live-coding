<?php

class Printer {
    private $from;
    private $to;
    private $dividerSymbol;
    private $calcBehaviors;

    public function __construct(int $from, int $to, string $dividerSymbol)
    {
        $this->from = $from;
        $this->to = $to;
        $this->dividerSymbol = $dividerSymbol;
        $this->calcBehaviors = [];
        $this->words = [];
    }

    public function addBehavior(iCalculatable $behavior)
    {
        $this->calcBehaviors[] = $behavior;
    }

    public function __toString()
    {
        $string = '';

        for ($i = $this->from; $i <= $this->to; $i++) {
            $result = $i;
            $stringCalc = '';

            foreach ($this->calcBehaviors as $behavior) {
                $stringCalc = $stringCalc . $behavior->calculate($i);

                if (strlen($stringCalc) != 0) {
                    $result = $stringCalc;
                }
            }

            if ($i != $this->to) {
                $result = $result . $this->dividerSymbol;
            }

            $string = $string . $result;
        }

        return $string;
    }
}
