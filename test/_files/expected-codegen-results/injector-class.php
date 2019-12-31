<?php

/**
 * Injector generated by Laminas\Di
 */

declare(strict_types=1);

namespace LaminasTest\Di\Generated;

use Laminas\Di\CodeGenerator\AbstractInjector;

class GeneratedInjector extends AbstractInjector
{
    protected function loadFactoryList() : void
    {
        $this->factories = include __DIR__ . '/factories.php';
    }
}
