<?php

namespace App\Tests;

use App\Info\Info;
use PHPUnit\Framework\TestCase;

class InfoTest extends TestCase
{
    public function testFirst()
    {
        $info = new Info();
        $this->assertTrue($info->display());
    }
}