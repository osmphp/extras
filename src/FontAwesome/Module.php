<?php

namespace Osm\Extras\FontAwesome;

use Osm\Core\Attributes\Name;
use Osm\Core\BaseModule;

#[Name('font-awesome')]
class Module extends BaseModule
{
    public static array $requires = [
        \Osm\Framework\Themes\Module::class,
    ];
}