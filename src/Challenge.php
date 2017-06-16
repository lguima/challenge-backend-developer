<?php

namespace Linio;

use Linio\Replacement;

class Challenge
{
    public function solve()
    {
        $replacements = [new Replacement\Linianos(), new Replacement\Linio, new Replacement\IT];

        for ($i = 1; $i <= 100; $i++) {
            echo sprintf('%s ', $this->replace($i, $replacements));
        }
    }

    public function replace($number, array $replacements)
    {
        foreach($replacements as $replacement) {
            /**
             * @var $replacement Replacement\Replacement
             */

            if ($replacement->apply($number)) {
                return $replacement->value();
            }
        }

        return $number;
    }
}
