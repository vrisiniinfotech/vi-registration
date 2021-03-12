<?php

/*
 * viregistration extension for Contao Open Source CMS
 *
 * @copyright  Copyright 2015 - 2024, Vrisini Infotech LLP
 * @author     Anupam Chatterjee <anupam@vrisini.de>
 * @license    MIT
 * @link       https://github.com/vrisiniinfotech/vi-registration
 */

namespace Vrisiniinfotech\ViRegistrationBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class VrisiniinfotechViRegistrationExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('listeners.yml');
    }
}
