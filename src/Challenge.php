<?php

namespace Linio;

class Challenge
{
    public function solve()
    {
        for ($i = 1; $i <= 100; $i++) {
            echo sprintf('%s ', $this->replace($i));
        }
    }

    public function replace($number)
    {
        return $number;
    }
}
