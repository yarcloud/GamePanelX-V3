<?php
/*
 * GamePanelX
 * 
 * Russian Language file
 * Written by Mikhail Gubin, Yaroslavl Cloud Infrastructures PSBE
 * Site: yarcloud.pw
 * 
 * To translate to another language, copy this to a new PHP file named "yourlanguage.php", and translate all the english words on the right (to the right of the = sign).
 * Try and keep the structure of the file the same, and make sure you close all '';
 * 
*/
$lang = array();

########################################################################

// Common Words/Phrases
$lang['yes']                = 'Да';
$lang['no']                 = 'Нет';
$lang['active']             = 'Работает';
$lang['inactive']           = 'Офнут';
$lang['setup']              = 'Установка';
$lang['settings']           = 'Настройки';
$lang['language']           = 'Язык';
$lang['default_language']   = 'Язык по умолчанию';
$lang['email_address']      = 'Email адрес';
$lang['company']            = 'Компания';
$lang['theme']              = 'Тема';
$lang['save']               = 'Сохранить';
$lang['game']               = 'Игра';
$lang['voice']              = 'Голосовой сервер';
$lang['desc']               = 'Описание';
$lang['status']             = 'Статус';
$lang['manage']             = 'Сообщение';
$lang['info']               = 'Информация';
$lang['owner']              = 'Владелец';
$lang['date_added']         = 'Добавлен';
$lang['last_updated']       = 'Обновлено';
$lang['default']            = 'По умолчанию';
$lang['delete']             = 'Удалить';
$lang['create']             = 'Создать';
$lang['add']                = 'Добавить';
$lang['edit']               = 'Редактировать';
$lang['failed']             = 'Ошибка';
$lang['name']               = 'Название';
$lang['first_name']         = 'Имя';
$lang['last_name']          = 'Фамилия';
$lang['type']               = 'Тип';
$lang['none']               = 'Нет';
$lang['optional']           = 'Опционально';
$lang['complete']           = 'Готово';
$lang['go_back']            = 'Назад';
$lang['saved']              = 'Сохранено';

// Tech Words
$lang['server']             = 'Сервер';
$lang['username']           = 'Логин';
$lang['password']           = 'Пароль';
$lang['newpassword']        = 'Новый пароль';
$lang['newpassword_conf']   = '<b>Новый пароль</b> (еще раз)';
$lang['chpassword']         = 'Сменить пароль';
$lang['cur_password']       = 'Текущий пароль';
$lang['network']            = 'Сеть';
$lang['online']             = 'Онлайн';
$lang['offline']            = 'Оффлайн';
$lang['connect']            = 'Подключение';
$lang['startup']            = 'Запуск';
$lang['files']              = 'Файлы';
$lang['command']            = 'Команда';
$lang['local_dir']          = 'Локальная папка';
$lang['working_dir']        = 'Рабочая папка';
$lang['pid_file']           = 'PID файл';
$lang['ip']                 = 'IP адрес';
$lang['ips']                = 'IP адреса';
$lang['port']               = 'Порт';
$lang['login']              = 'Вход';
$lang['logout']             = 'Выход';
$lang['logged_out']         = 'Вы успешно разлогинились';
$lang['install']            = 'Установить';
$lang['installing']         = 'Устанавливаем...';
$lang['not_installed']      = 'Не установлено';

$lang['unknown']            = 'Неизвестно';
$lang['click_here']         = 'Нажми сюда';
$lang['documentation']      = 'Справка';
$lang['update_cmd']         = 'Обновление';
$lang['banned_start']       = 'Запрещенные стартовые значения';
$lang['banned_start_desc']  = '<b>Замечание:</b> Поместите символы, если Вы не хотите, чтобы клиенты вводили в поле "Значение" или другого редактора.';
$lang['plugin']             = 'Плагин';
$lang['plugins']            = 'Плагины';
$lang['del_install']        = 'Пожауйста удалите папку "install" с сервера для продолжения.';
$lang['version']            = 'Версия';
$lang['system_update']      = 'Обнаружены обновления!';
$lang['invalid_login']      = 'Неверный логин, попробуйте снова.';
$lang['permissions']        = 'Разрешения';

// Error messages
$lang['err_query']          = 'Ошибка запроса в базу данных';
$lang['err_sql_update']     = 'Ошибка обновления базы данных';

// Left Panel
$lang['home']               = 'Домой';
$lang['setup']              = 'Установки';
$lang['settings']           = 'Настройки';
$lang['game_setups']        = 'Шаблоны игр';
$lang['cloud_games']        = 'Игры в облаке';
$lang['server_templates']   = 'Шаблоны серверов';
$lang['template']           = 'Шаблон';
$lang['templates']          = 'Шаблоны';
$lang['servers']            = 'Сервера';
$lang['all_servers']        = 'Все сервера';
$lang['game_servers']       = 'Игровые сервера';
$lang['voice_servers']      = 'Голосовые сервера';
$lang['create_server']      = 'Создать сервер';
$lang['accounts']           = 'Аккаунты';
$lang['admins']             = 'Администраторы';
$lang['resellers']          = 'Реселлеры';
$lang['list_users']         = 'Все пользователи';
$lang['add_user']           = 'Добавить пользователя';
$lang['list_admins']        = 'Список админов';
$lang['add_admin']          = 'Добавить админа';
$lang['list_resellers']     = 'Список реселлеров';
$lang['add_reseller']       = 'Добавить реселлера';
$lang['welcome_msg']        = 'Привет';
$lang['int_name']           = 'Внутреннее имя';
$lang['int_name_desc']      = 'Только буквы, цифры и дефис, как "red_1"';
$lang['query_engine']       = 'Запросник';
$lang['create_network']     = 'Создать несущий сервер';

// Templates
$lang['delete_tp']          = 'Удилить шаблон';
$lang['create_tp']          = 'Создать шаблон';
$lang['file_path']          = 'Путь файлов';
$lang['browse']             = 'Обзор';

// Network
$lang['network_server']     = 'Несущий сервер';
$lang['os']                 = 'Операционная система';
$lang['location']           = 'Локация';
$lang['datacenter']         = 'Датацентр';
$lang['local']              = 'Локально';
$lang['local_server']       = 'Локальный сервер';
$lang['remote_server']      = 'Удаленный сервер';
$lang['no_enc_key']         = 'Не найден ключ шифрования, проверьте файл "/configuration.php".';
$lang['login_user']         = 'Логин пользователя сервера';
$lang['login_pass']         = 'Пароль пользователя сервера';
$lang['login_port']         = 'Порт SSH';
$lang['login_homedir']      = 'Домашняя папка';
$lang['net_showing_ips']    = 'Показывать IP на сервере';
$lang['srv_using_net']      = 'Имеются игры, использующие данный сервер. Удалите их или переместите.';
$lang['add_ip']             = 'Добавить IP';
$lang['new_ip']             = 'Новый IP';
$lang['ip_exists']          = 'Извините, такой адрес уже есть.';
$lang['ip_port_used']       = 'Изините, такой адрес или комбинация адресов уже есть.';
$lang['srv_using_ip']       = 'Этот адрес используется играми, удалите их или преместите.';
$lang['invalid_ip']         = 'Неверный IP, проверьте его и попробуйте снова.';

// Servers
$lang['create_sv']          = 'Создать сервер';
$lang['invalid_port']       = 'Порт неверен, попробуйте снова.';
$lang['invalid_intname']    = 'Неверное внешнее имя.  Разрешены только буквы, цифры и символы, -  и _.  Попробуйте снова.';
$lang['item']               = 'Единица';
$lang['value']              = 'Значение';
$lang['user_editable']      = 'Редактируемое';
$lang['restart']            = 'Рестарт';
$lang['stop']               = 'Стоп';
$lang['update']             = 'Обновление';
$lang['map']                = 'Карта';
$lang['hostname']           = 'Имя хоста';
$lang['players']            = 'Игроки';
$lang['show_options']       = 'Показать все опции';
$lang['simple']             = 'Простой режим';
$lang['advanced']           = 'Продвинутый режим';

// Cloud
$lang['cloud_avail']        = 'Игры, работающие на <i>данном облаке</i>';
$lang['cloud_topmsg']       = 'Чтобы добавить другие игры, нажми сюда.';

// Games
$lang['games_add_desc']     = 'Используйте эту форму для добавления новой игры.  Вы начнете создание шаблона.';
$lang['games_up_icon']      = '<b>Замечание:</b> Загрузите иконку размером 64x64 формата PNG в';
$lang['note_steam_auto']    = '<b>Замечание:</b> Игры, использующие Steam, используют собственный инсталлятор.';

// File Manager
$lang['new_filename']       = 'Новое имя файла';
$lang['new_dirname']        = 'Новое имя папки';

// User perms
$lang['access_ftp']         = 'Доступ по FTP';
$lang['update_usr_det']     = 'Обновление профиля';
$lang['user_exists']        = 'Извините, такой пользователь уже есть!';

// Home Page hints
$lang['def_adm_step']       = 'Шаг';
$lang['def_adm_tip_docs']   = 'Пожалуйста прочитайте полную документацию';
$lang['def_adm_tip_accts']  = 'Не найдено!  Вы должны создать пользователя перед созданием игровых серверов.';
$lang['def_adm_tip_net']    = 'Нет несущих серверов!  Вы должны создать один сейчас';
$lang['def_adm_tip_tpl']    = 'Нет шаблонов игровых серверов!  Чтобы создать игру, создайте шаблон и выберите его.';
$lang['def_adm_tip_srv1']   = 'Вы готовы создавать игровые сервера!';
$lang['def_adm_tip_srv2']   = 'Завершите эти шаги для создания игрового или голосового сервера.';

// Other
$lang['api_key']            = 'Ключ API';

##############################################################################################################

// 3.0.8
$lang['install_mirrors']    = 'Зеркала установки';
$lang['game_panel']         = 'Игровая контрольная панель';
$lang['show_console_out']   = 'Показать вывод консоли';
$lang['config_file']        = 'Файл конфиурации';
$lang['modified']           = 'Изменен';
$lang['accessed']           = 'Доступен';
$lang['size']               = 'Размер';
$lang['maxplayers']         = 'Максимально игроков';
$lang['hostname']           = 'Имя хоста';

?>
