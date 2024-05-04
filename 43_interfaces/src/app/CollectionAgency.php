<?php

namespace App;

class CollectionAgency implements DebtCollector, AnotherInterface
{
    public function getTargets(int $target): int
    {
        // TODO: Implement getTargets() method.
        echo "Pizdec, is it You?";
        return 10;
    }

    public function __construct()
    {
    }

    public function collect(float $owedAmount): float
    {
        $guaranteedAmount = $owedAmount*0.5;

        return mt_rand($guaranteedAmount, $owedAmount);
    }
}