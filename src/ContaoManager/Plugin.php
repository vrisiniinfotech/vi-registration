<?php

/*
 * viregistration extension for Contao Open Source CMS
 *
 * @copyright  Copyright 2015 - 2024, Vrisini Infotech LLP
 * @author     Anupam Chatterjee <anupam@vrisini.de>
 * @license    MIT
 * @link       https://github.com/vrisiniinfotech/vi-registration
 */

namespace Vrisiniinfotech\ViRegistrationBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Vrisiniinfotech\ViRegistrationBundle\ViRegistrationBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ViRegistrationBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['viregistration']),
        ];
    }
}
