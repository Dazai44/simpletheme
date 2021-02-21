<?php

//проверка, если пытаются подключиться к файлу напрямую то он не будет выполняться
if(!defined('ABSPATH')){
     die;
}

//подключение библиотеки
use Carbon_Fields\Container;
use Carbon_Fields\Field;

//начало работы
Container::make( 'post_meta', 'Настройки блоков' )
    ->where('post_id', '=', 67)

            ->add_tab('Настройки первого блока', [
                Field::make( 'image', 'fb_big_btn', 'Изображение кнопки с видео' ),
                Field::make( 'text', 'fb_first_title', 'Первый заголовок' ),
                Field::make( 'rich_text', 'fb_description', 'Описание под первым заголовком' ),
                Field::make( 'text', 'fb_btn_text', 'Текст кнопки' ),
                Field::make( 'color', 'fb_btn_border_color', 'Цвет бордера кнопки' )->set_width(25),
                Field::make( 'color', 'fb_btn_text_color', 'Цвет текста кнопки' )->set_width(25),
                Field::make( 'color', 'fb_btn_border_act', 'Цвет подстветки бордера кнопки' )->set_width(25),
                Field::make( 'color', 'fb_btn_text_color_act', 'Цвет подстветки текста кнопки' )->set_width(25),
                
            ])

            ->add_tab('Настройки второго блока', [

                Field::make( 'text', 'sc_first_little_title', 'Первый маленький заголовок' ),
                Field::make( 'text', 'sc_title', 'Большой заголовок' ),
                Field::make( 'rich_text', 'sc_description', 'Описание' ),
                Field::make( 'image', 'sc_back_img', 'Картинка на заднем фоне' ),

                //повторитель Для левого
                Field::make( 'complex', 'sc_repeater_hiw_left', 'Как это работает? (левый блок) ' )
                ->set_max(2)
                ->add_fields([
                    Field::make( 'text', 'sc_rep_num_l', 'Порядковый номер' ),
                    Field::make( 'text', 'sc_rep_title_l', 'Заголовок блока' ),
                    Field::make( 'rich_text', 'sc_rep_des_l', 'Описание блока' ),
                ]),

                //повторитель Для правого 
                Field::make( 'complex', 'sc_repeater_hiw_right', 'Как это работает? (правый блок)' )
                ->set_max(2)
                ->add_fields([
                    Field::make( 'text', 'sc_rep_num_r', 'Порядковый номер' ),
                    Field::make( 'text', 'sc_rep_title_r', 'Заголовок блока' ),
                    Field::make( 'rich_text', 'sc_rep_des_r', 'Описание блока' ),
                ])


            ])

            ->add_tab('Настройки третьего блока', [
                Field::make( 'text', 'th_first_little_title', 'Первый маленький заголовок' ),
                Field::make( 'text', 'th_title', 'Большой заголовок' ),
                Field::make( 'rich_text', 'th_description', 'Описание' ),
                Field::make( 'image', 'th_back_img', 'Картинка на заднем фоне' ),
                Field::make( 'complex', 'th_blocks', 'Блоки' )
                ->set_max(6)
                ->add_fields([
                    Field::make( 'text', 'th_block_icon', 'Иконка блока(Введите id иконки, например: "icon-window")' ),
                    Field::make( 'text', 'th_block_title', 'Заголовок блока'),
                    Field::make( 'rich_text', 'th_block_description', 'Заголовок блока'),
                    
                ])

            ])

            ->add_tab('Настройки четвертого блока (подписки)', [
                Field::make( 'text', 'fr_first_little_title', 'Первый маленький заголовок' ),
                Field::make( 'text', 'fr_title', 'Большой заголовок' ),
                Field::make( 'rich_text', 'fr_description', 'Описание' ),
                Field::make( 'complex', 'fr_blocks', 'Подписки' )
                ->set_max(4)
                ->add_fields([
                    Field::make( 'text', 'fr_block_title', 'Название подписки' ),
                    Field::make( 'text', 'fr_block_price', 'Цена подписки' ),
                    Field::make( 'text', 'fr_block_des', 'Описание подписки' ),
                    Field::make( 'text', 'fr_block_storage', 'Объем хранилища GB в подписке' ),
                    Field::make( 'text', 'fr_block_bandwidth', 'Пропускная способность' ),
                    Field::make( 'text', 'fr_block_db', 'Колличество баз данных' ),
                    Field::make( 'text', 'fr_block_emailacc', 'Колличество Email аккаунтов' ),
                    Field::make( 'checkbox', 'fr_block_rec', 'Recommended?' ),
                ])

            ])

            ->add_tab('Настроки 5 блока (отзывы)', [
                Field::make( 'text', 'ff_title', 'Заголовок' ),
                Field::make( 'complex', 'ff_blocks', 'Отзывы' )
                ->set_max(8)
                ->add_fields([
                    Field::make( 'image', 'ff_block_img', 'Аватарка' ),
                    Field::make( 'text', 'ff_block_name', 'Имя' ),
                    Field::make( 'text', 'ff_block_name_t', 'Статус' ),
                    Field::make( 'rich_text', 'ff_block_text', 'Отзыв' ),
                ])
            ])

            ->add_tab('Настройки 6 блока (FAQ)', [
                Field::make( 'text', 'sx_first_little_title', 'Первый маленький заголовок' ),
                Field::make( 'text', 'sx_title', 'Большой заголовок' ),
                Field::make( 'rich_text', 'sx_description', 'Описание' ),
                Field::make( 'complex', 'sx_blocks', 'Вопрос-Ответ' )
                ->set_max(6)
                ->add_fields([
                    Field::make( 'text', 'sx_block_q', 'Вопрос' ),
                    Field::make( 'rich_text', 'sx_block_an', 'Ответ' ),
                ])
            ])

            ->add_tab('Настройки 7 блока', [
                Field::make( 'text', 'sv_title', 'Большой заголовок' ),
                Field::make( 'text', 'sv_description', 'Описание' ),
                Field::make( 'text', 'sv_href1', 'Ссылка на 1 кнопку' ),
                Field::make( 'text', 'sv_href2', 'Ссылка на 2 кнопку' ),
                Field::make( 'text', 'sv_href3', 'Ссылка на 3 кнопку' ),

                
            ]);


         



         

