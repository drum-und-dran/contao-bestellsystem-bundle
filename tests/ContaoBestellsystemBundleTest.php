<?php

namespace Dud\ContaoBestellsystemBundle\Tests;

use Dud\ContaoBestellsystemBundle\ContaoBestellsystemBundle;
use PHPUnit\Framework\TestCase;

class ContaoBestellsystemBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoBestellsystemBundle();

        $this->assertInstanceOf('Dud\ContaoBestellsystemBundle\ContaoBestellsystemBundle', $bundle);
    }
}
