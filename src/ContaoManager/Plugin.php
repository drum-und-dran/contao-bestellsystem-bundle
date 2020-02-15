<?php

namespace Dud\ContaoBestellsystemBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Dud\ContaoBestellsystemBundle\ContaoBestellsystemBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoBestellsystemBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
