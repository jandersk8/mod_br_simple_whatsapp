<?php
/**
 * @package     BR.SimpleWhatsapp
 * @author      Janderson Moreira
 * @copyright   Copyright (C) 2026 Janderson Moreira
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx', ''), ENT_QUOTES, 'UTF-8');

// Chama o template usando o nome minúsculo
require ModuleHelper::getLayoutPath('mod_br_simple_whatsapp', $params->get('layout', 'default'));