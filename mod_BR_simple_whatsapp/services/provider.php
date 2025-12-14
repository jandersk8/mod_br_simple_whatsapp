<?php
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