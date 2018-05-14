<?php
1.
return [
	'template'   => [//若服务器是Linux的，你用window开发，不能直接$this->fetch()的时候，在当前目录下创建个配置文件，然后内容放这个
        'view_depr' => DS,
    ],
    'db' => [//这个是在当前模块下，引入自己的数据库
        'chitu' => require(dirname(__FILE__).'/chitu_database.php'),
    ]
];

2.
//<?php//在当前模块下创建chitu_database.php文件
return 	//配置赤兔库
	 [
        // 数据库类型
        'type'        => 'mysql',
        // 数据库连接DSN配置
        'dsn'         => '',
        // 服务器地址
        'hostname'    => '127.0.0.1',
        // 数据库名
        'database'    => 'dbname',
        // 数据库用户名
        'username'    => 'username',
        // 数据库密码
        'password'    => '123456',
        // 数据库连接端口
        'hostport'    => '',
        // 数据库连接参数
        'params'      => [],
        // 数据库编码默认采用utf8
        'charset'     => 'utf8',
        // 数据库表前缀
        'prefix'      => 'chitu_',
    ];
    
    3.protected $connection = 'db.chitu';//引用即可
