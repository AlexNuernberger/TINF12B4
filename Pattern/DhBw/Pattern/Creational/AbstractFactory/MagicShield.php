<?php

namespace DhBw\Pattern\Creational\AbstractFactory;

use DhBw\Util\Console;

class MagicShield implements DefenseInterface
{

    protected $console;

    public function __construct()
    {
        $this->console = new Console();
    }

    public function defend()
    {
        $this->console->writeLine('defend with magic shield');
    }

}