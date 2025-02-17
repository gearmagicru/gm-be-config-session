<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * Пакет английской (британской) локализации.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    '{name}'        => 'Session',
    '{description}' => 'Configure user session settings',
    '{permissions}' => [
        'any'  => ['Full access', 'Configuring user session']
    ],

    // Form: поля
    'Session' => 'Session',
    'Session name' => 'Session name',
    'Use transparent SID support' => 'Use transparent SID support',
    'directive session.use_trans_sid' => '&laquo;session.use_trans_sid&raquo; directive',
    'SID only uses cookies' => 'SID only uses cookies',
    'directive session.use_only_cookies' => '&laquo;session.use_only_cookies&raquo; directive',
    'Autostart' => 'Autostart',
    'Session lifetime, min' => 'Session lifetime, min',
    'reset settings' => 'reset settings',
    // Form: сообщения / заголовки
    'Save settings' => 'Save settings',
    'Reset settings' => 'Reset settings',
    // Form: сообщения / тектс
    'settings saved {0} successfully' => 'settings saved "<b>{0}</b>" successfully',
    'settings reseted {0} successfully' => 'settings reseted "<b>{0}</b>" successfully'
];
