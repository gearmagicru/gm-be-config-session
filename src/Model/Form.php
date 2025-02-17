<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\Config\Session\Model;

use Gm;
use Gm\Backend\Config\Model\ServiceForm;

/**
 * Модель данных конфигурации службы "Сессия".
 * 
 * Cлужба {@see \Gm\Session\Session}.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\Config\Session\Model
 * @since 1.0
 */
class Form extends ServiceForm
{
    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        parent::init();

        $this->unifiedName = Gm::$app->session->getObjectName();
    }
    /**
     * {@inheritdoc}
     */
    public function maskedAttributes(): array
    {
        return [
            'name'           => 'name', // имя сессии
            'expire'         => 'expire', // длительность сессии
            'autoStart'      => 'autoStart', // автозапуск
            'useTransSid'    => 'useTransSid', // прозрачная поддержка SID
            'useOnlyCookies' => 'useOnlyCookies', // SID использует только cookie
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function formatterRules(): array
    {
        return [
            [['name'], 'safe'],
            [
                ['autoStart', 'useTransSid', 'useOnlyCookies'], 
                'logic' => [true, false]
            ],
            [['expire'], 'type' => ['int']]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function validationRules(): array
    {
        return [
            [['name'], 'notEmpty'],
            // длительность сессии
            [
                'expire', 
                'between',
                'min' => 0, 'max' => PHP_INT_MAX
            ]
        ];
    }
}
