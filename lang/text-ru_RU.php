<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * Пакет русской локализации.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    '{name}'        => 'Сессия',
    '{description}' => 'Параметры сессии пользователя',
    '{permissions}' => [
        'any'  => ['Полный доступ', 'Настройка сессии пользователя']
    ],

    // Form: поля
    'Session' => 'Сессия',
    'Session name' => 'Имя сессии',
    'Use transparent SID support' => 'Прозрачная поддержка SID',
    'directive session.use_trans_sid' => 'директива &laquo;session.use_trans_sid&raquo;',
    'SID only uses cookies' => 'SID использует только cookie',
    'directive session.use_only_cookies' => 'директива &laquo;session.use_only_cookies&raquo;',
    'Autostart' => 'Автозапуск',
    'Session lifetime, min' => 'Время жизни сессии, мин.',
    'reset settings' => 'сбросить настройки',
    // Form: сообщения / заголовки
    'Save settings' => 'Сохранение настроек',
    'Reset settings' => 'Сброс настроек',
    // Form: сообщения / тектс
    'settings saved {0} successfully' => 'успешное сохранение настроек "<b>{0}</b>"',
    'settings reseted {0} successfully' => 'успешный сброс настроек "<b>{0}</b>"'
];
