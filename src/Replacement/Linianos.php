<?php

namespace Linio\Replacement;

class Linianos implements Replacement
{
    public function apply($number)
    {
        return $number % 3 == 0 && $number % 5 == 0;
    }

    public function value()
    {
        return 'Linianos';
    }
}
