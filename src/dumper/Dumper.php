<?php

namespace kec\dumper;

use Symfony\Component\VarDumper\Cloner\VarCloner;

class Dumper
{
    /**
     * Dump a value with elegance.
     *
     * @param mixed $value
     *
     * @return void
     * @throws \ErrorException
     */
    public function dump($value) : void
    {
        $dumper = new HtmlDumper;
        $dumper->dump((new VarCloner)->cloneVar($value));
    }
}
