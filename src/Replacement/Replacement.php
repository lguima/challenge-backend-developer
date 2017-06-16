<?php

namespace Linio\Replacement;

interface Replacement
{
    public function apply($number);

    public function value();
}
