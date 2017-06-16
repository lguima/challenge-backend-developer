<?php

namespace Linio\Replacement;

class Linio implements Replacement
{
    public function apply($number)
    {
        return $number % 3 == 0;
    }

    public function value()
    {
        return 'Linio';
    }
}
