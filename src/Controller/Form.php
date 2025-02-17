<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\Config\Session\Controller;

use Gm;
use Gm\Panel\Widget\EditWindow;
use Gm\Backend\Config\Controller\ServiceForm;

/**
 * Контроллер конфигурации службы "Сессия".
 * 
 * Cлужба {@see \Gm\Session\Session}.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\Config\Session\Controller
 * @since 1.0
 */
class Form extends ServiceForm
{
    /**
     * Возвращает элементы панели формы (Gm.view.form.Panel GmJS).
     * 
     * @return array
     */
    protected function getFormItems(): array
    {
        /** @var \Gm\Session\Session $session */
        $service = Gm::$app->session;
        $unified = Gm::$app->unifiedConfig->get('session');
        return [
            [
                'xtype'       => 'fieldset',
                'title'       => '#Session',
                'defaults'    => [
                    'labelAlign' => 'right',
                    'labelWidth' => 180
                ],
                'items' => [
                    [
                        'xtype'      => 'textfield',
                        'fieldLabel' => '#Session name',
                        'name'       => 'name',
                        'width'      => '100%',
                        'value'      => $unified['name'] ?? $service->name,
                        'allowBlank' => false
                    ],
                    [
                        'xtype'      => 'numberfield',
                        'fieldLabel' => '#Session lifetime, min',
                        'minValue'   => 0,
                        'name'       => 'expire',
                        'width'      => 300,
                        'value'      => $unified['expire'] ?? $service->expire
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'fieldLabel' => '#Autostart',
                        'name'       => 'autoStart',
                        'ui'         => 'switch',
                        'checked'    => $unified['autoStart'] ?? $service->autoStart,
                        'inputValue' => 1
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'fieldLabel' => '#Use transparent SID support',
                        'name'       => 'useTransSid',
                        'ui'         => 'switch',
                        'boxLabel'   => '#directive session.use_trans_sid',
                        'checked'    => $unified['useTransSid'] ?? $service->useTransSid,
                        'inputValue' => 1
                    ], 
                    [
                        'xtype'      => 'checkbox',
                        'fieldLabel' => '#SID only uses cookies',
                        'name'       => 'useOnlyCookies',
                        'ui'         => 'switch',
                        'boxLabel'   => '#directive session.use_only_cookies',
                        'checked'    => $unified['useOnlyCookies'] ?? $service->useOnlyCookies,
                        'inputValue' => 1
                    ]
                ]
            ],
            [
                'xtype'  => 'toolbar',
                'dock'   => 'bottom',
                'border' => 0,
                'style'  => ['borderStyle' => 'none'],
                'items'  => [
                    [
                        'xtype'      => 'checkbox',
                        'boxLabel'   => $this->module->t('reset settings'),
                        'name'       => 'reset',
                        'ui'         => 'switch',
                        'inputValue' => 1
                      ]
                 ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function createWidget(): EditWindow
    {
        /** @var EditWindow $window */
        $window = parent::createWidget();

        // окно компонента (Ext.window.Window Sencha ExtJS)
        $window->autoHeight = true;
        $window->width = 500;

        // панель формы (Gm.view.form.Panel GmJS)
        $window->form->items = $this->getFormItems();
        return $window;
    }
}
