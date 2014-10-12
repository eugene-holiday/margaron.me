<?php

return array(

    'default' => 'testdb',


    'connections' => array(


        'testdb' => array(
            'driver'   => 'sqlite',
            'database' => __DIR__.'/../../database/local.sqlite',
            'prefix'   => '',
        ),


	),

);
