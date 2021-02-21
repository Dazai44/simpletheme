<?php

//проверка, если пытаются подключиться к файлу напрямую то он не будет выполняться
if(!defined('ABSPATH')){
     die;
}
//подключение библиотеки
use Carbon_Fields\Container;
use Carbon_Fields\Field;


//начало работы
Container::make( 'theme_options', 'Настройки сайта' )
    ->add_tab('Общие настройки', [
         Field::make('image', 'site_favicon', 'Фавиконка сайта'),
         Field::make('image', 'site_logo', 'Логотип сайта'),
]);
