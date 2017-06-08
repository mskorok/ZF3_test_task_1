<?php
return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' =>'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => 'mike999',
                    'dbname'   => 'zf',
                    'driverOptions' => [
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                    ],

                ],
                'doctrineTypeMappings' => [
                    'enum' => 'string'
                ],

            ],
        ],
        'eventmanager' => [
            'orm_default' => [
                'subscribers' => [
//                    'country_injector',
//                    'doctrine_translateable_listener',
//                    'Gedmo\Timestampable\TimestampableListener',
//                    'Gedmo\Sluggable\SluggableListener',
//                    'doctrine_uploadable_listener',
//                    'doctrine_blameable_listener',
//                    'eventlog_object_logger',
//                    'Gedmo\SoftDeleteable\SoftDeleteableListener',
//                    'Gedmo\Sortable\SortableListener',
//                    'client_listener',
//                    'vehicle_imported_listener',
//                    'client_classificators_listener',
                ]
            ],
        ],
        'configuration' => [
            'orm_default' => [
                'metadata_cache' => 'filesystem',
                'query_cache' => 'filesystem',
                'numeric_functions' => [
                    'group_concat' => 'Oro\ORM\Query\AST\Functions\String\GroupConcat',
                    'cast' => 'Oro\ORM\Query\AST\Functions\Cast',
                ],
                'datetime_functions' => [
                    'date' => 'Oro\ORM\Query\AST\Functions\SimpleFunction',
                ],
                'string_functions' => [
//                    'instr' => 'Common\Doctrine\Functions\Instr',
                    'regexp' => 'DoctrineExtensions\Query\Mysql\Regexp',
                ],
                'filters' => [
                    'soft-deleteable' => 'Gedmo\SoftDeleteable\Filter\SoftDeleteableFilter',
                ],
                'generate_proxies' => false,
            ]
        ],
        'driver' => [
            'vendor_entities' => [
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => [
                    __DIR__ . '/../../module/Application/src/Entity',
//                    ROOT_PATH . '/module/Common/src/Common/Entity',
//                    ROOT_PATH . '/module/Users/src/Users/Entity',
//                    ROOT_PATH . '/module/SystemSettings/src/SystemSettings/Entity',
//                    ROOT_PATH . '/module/Classificators/src/Classificators/Entity',
//                    ROOT_PATH . '/module/Translations/src/Translations/Entity',
//                    ROOT_PATH . '/module/Documents/src/Documents/Entity',
//                    ROOT_PATH . '/module/Notifications/src/Notifications/Entity',
//                    ROOT_PATH . '/module/Clients/src/Clients/Entity',
//                    ROOT_PATH . '/module/CronJobs/src/CronJobs/Entity',
//                    ROOT_PATH . '/module/EventLog/src/EventLog/Entity',
//                    ROOT_PATH . '/module/Dashboard/src/Dashboard/Entity',
//                    ROOT_PATH . '/module/Accounting/src/Accounting/Entity',
//                    ROOT_PATH . '/module/ApiHistory/src/ApiHistory/Entity',
//                    ROOT_PATH . '/module/Common/src/Common/Model',
//                    ROOT_PATH . '/module/Payments/src/Payments/Entity',
//                    ROOT_PATH . '/module/Payments/src/Payments/Model',
//                    ROOT_PATH . '/module/CreditDb/src/CreditDb/Entity',
//                    ROOT_PATH . '/module/Vehicles/src/Vehicles/Entity',
//                    ROOT_PATH . '/module/Issues/src/Issues/Entity',
//                    ROOT_PATH . '/module/Import/src/Import/Entity',
//                    ROOT_PATH . '/module/Agreements/src/Agreements/Entity',
//                    ROOT_PATH . '/module/Applications/src/Applications/Entity',
//                    ROOT_PATH . '/module/Files/src/Files/Entity',
//                    ROOT_PATH . '/module/Scoring/src/Scoring/Entity',
//                    ROOT_PATH . '/module/VehiclesParsers/src/VehiclesParsers/Entity',
                ]
            ],
            'application_entities' => [
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => []
            ],
            'orm_default' => [
                'drivers' => [
                    'Application\Entity' => 'vendor_entities',
//                    'Common\Entity' => 'vendor_entities',
//                    'Documents\Entity' => 'vendor_entities',
//                    'Users\Entity' => 'vendor_entities',
//                    'SystemSettings\Entity' => 'vendor_entities',
//                    'Classificators\Entity' => 'vendor_entities',
//                    'Translations\Entity' => 'vendor_entities',
//                    'Notifications\Entity' => 'vendor_entities',
//                    'Clients\Entity' => 'vendor_entities',
//                    'CronJobs\Entity' => 'vendor_entities',
//                    'EventLog\Entity' => 'vendor_entities',
//                    'Dashboard\Entity' => 'vendor_entities',
//                    'Accounting\Entity' => 'vendor_entities',
//                    'ApiHistory\Entity' => 'vendor_entities',
//                    'Common\Model' => 'vendor_entities',
//                    'Payments\Entity' => 'vendor_entities',
//                    'Payments\Model' => 'vendor_entities',
//                    'CreditDb\Entity' => 'vendor_entities',
//                    'Vehicles\Entity' => 'vendor_entities',
//                    'Issues\Entity' => 'vendor_entities',
//                    'Import\Entity' => 'vendor_entities',
//                    'Agreements\Entity' => 'vendor_entities',
//                    'Applications\Entity' => 'vendor_entities',
//                    'Files\Entity' => 'vendor_entities',
//                    'Scoring\Entity' => 'vendor_entities',
//                    'VehiclesParsers\Entity' => 'vendor_entities',
                ]
            ]
        ],
    ],

    'service_manager' => [
        'factories' => [
//            'doctrine_uploadable_listener' => function ($sm) {
//                $listener = new \Common\Misc\CustomUploadableListener();
//                $listener->setDefaultPath(ROOT_PATH . '/public/uploads');
//                return $listener;
//            },
//            'doctrine_translateable_listener' => function ($sm) {
//                $listener = new \Gedmo\Translatable\TranslatableListener();
                //uncommenting following lines is reason for weird behaviour
                //$listener->setSkipOnLoad(true);
                //$listener->setPersistDefaultLocaleTranslation(true);
                //$listener->setDefaultLocale('lv');
//                return $listener;
//            },
//            'doctrine_blameable_listener' => function ($sm) {
//                $listener = new \Gedmo\Blameable\BlameableListener();
//                return $listener;
//            },
//            'doctrine.cache.redis' => function ($sm) {
//
//            	$redis = new Redis();
//            	$redis->connect('localhost', 6379);
//                $redis->setOption(Redis::OPT_PREFIX, 'Mogo_' . COUNTRY . ':');
//
//            	$cache = new \Doctrine\Common\Cache\RedisCache();
//            	$cache->setRedis($redis);
//            	return $cache;
//            },
//            'country_injector' => function($sm) {
//                return new \Common\Doctrine\Listener\CountryInjector(COUNTRY);
//            },
//
//            'eventlog_object_logger' => function($sm) {
//                return new \EventLog\Doctrine\ObjectLogger(
//                    $sm->get('Config')['event_log']
//                );
//            },
        ],
    ],
];
