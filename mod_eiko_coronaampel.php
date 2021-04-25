<?php
/**
 * @copyright	@copyright	Copyright (c) 2021 EIKO. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once __DIR__ . '/helper.php';


$OBJECTID = $params->get('OBJECTID','56');


$class_sfx = htmlspecialchars($params->get('class_sfx'));

require(JModuleHelper::getLayoutPath('mod_eiko_coronaampel', $params->get('layout', 'default')));