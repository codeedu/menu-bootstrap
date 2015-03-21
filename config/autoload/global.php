<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'navigation' => [
        'default' => [
            [
                'label' => 'Clientes',
                'route' => 'cliente',
                'pages' => [
                    [
                        'label' => 'Listar',
                        'route' => 'cliente/list',
                        'action' => 'list',
                    ],
                    [
                        'label' => 'Novo',
                        'route' => 'cliente/new',
                        'action' => 'new',
                    ],
                ]
            ],
            [
                'label' => 'Produtos',
                'route' => 'produto',
                'pages' => [
                    [
                        'label' => 'Listar',
                        'route' => 'produto/list',
                        'action' => 'list',
                    ],
                    [
                        'label' => 'Novo',
                        'route' => 'produto/new',
                        'action' => 'new',
                    ],
                ]
            ],
        ]
    ],
];
