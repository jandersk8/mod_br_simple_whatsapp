<?php
namespace Br\Module\SimpleWhatsapp\Site\Dispatcher;

defined('_JEXEC') or die;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\Registry\Registry; // <--- Adicionamos isso para corrigir o erro

class Dispatcher extends AbstractModuleDispatcher
{
    protected function getLayoutData(): array
    {
        $data = parent::getLayoutData();

        // CORREÇÃO: Transformamos a string JSON do banco em um Objeto Registry
        // Antes estava apenas: $data['params'] = $this->module->params; (Isso causava o erro)
        $data['params'] = new Registry($this->module->params);

        return $data;
    }
}