<?php

namespace Linio\Replacement;

class IT implements Replacement
{
    public function apply($number)
    {
        return $number % 5 == 0;
    }

    public function value()
    {
        return 'IT';
    }
}
