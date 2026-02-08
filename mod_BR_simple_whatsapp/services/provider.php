<?php
/**
 * @package     BR.SimpleWhatsapp
 * @author      Janderson Moreira
 * @copyright   Copyright (C) 2026 Janderson Moreira
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Extension\Service\Provider\Module;
use Joomla\CMS\Extension\Service\Provider\ModuleDispatcherFactory;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

return new class implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        // Aqui atualizamos para o seu namespace "Br"
        $container->registerServiceProvider(new ModuleDispatcherFactory('\\Br\\Module\\SimpleWhatsapp'));
        $container->registerServiceProvider(new Module());
    }
};