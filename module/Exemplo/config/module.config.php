<?php
return [
    'controllers' => [
        'invokables' => [
            'Exemplo\Controller\ClienteController' => 'Exemplo\Controller\ClienteController',
            'Exemplo\Controller\ProdutoController' => 'Exemplo\Controller\ProdutoController',
        ]
    ],
    'router' => array(
        'routes' => array(
            'cliente' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/cliente',
                    'defaults' => array(
                        'controller' => 'Exemplo\Controller\ClienteController',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'new' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/new',
                            'defaults' => array(
                                'action' => 'new'
                            ),
                        ),
                    ),
                    'list' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/list',
                            'defaults' => array(
                                'action' => 'list'
                            ),
                        ),
                    ),
                ),
            ),
            'produto' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/produto',
                    'defaults' => array(
                        'controller' => 'Exemplo\Controller\ProdutoController',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'new' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/new',
                            'defaults' => array(
                                'action' => 'new'
                            ),
                        ),
                    ),
                    'list' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/list',
                            'defaults' => array(
                                'action' => 'list'
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];