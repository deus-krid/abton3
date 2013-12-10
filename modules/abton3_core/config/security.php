<?php defined('SYSPATH') or die('No direct script access.');

// -- Файл настроек безопасности системы управления -------------------------------

/*
 * Внимание!
 *
 * Компрометация данных этого файла не является потенциальной дырой для системы безопасности,
 * но в какой-то мере уменьшает стойкость генерируемых хешей (особенно, если вы не используете соль
 * при хешировнии). Поэтому не рекомендуется предавать огласке этот файл.
 *
 * Любые изменения в этом файле следует проводить ДО УСТАНОВКИ системы управления, поскольку они
 * затрагивают структуру и содержимое таблиц БД, которые не поддаются последующему рефакторингу!
 *
 * Изменения этого файла при уже установленной системе управления скорее всего вызовут неработоспособность
 * систем авторизации и вполне могут привести к повреждению данных паролей в БД!
 */

return
    array
    (
        /*
         * хеш-алгоритм
         *  (доступные значения: md2, md4, md5, sha1, sha256, sha512 и т.п.
         */
        'hash_method' => 'sha512',

         /*
          * длина хеша, которая будет сохраняться в базе (без учета соли),
          * по умолчанию для алгоритма sha512 - это длина в 128 символов
          *
          *   (прим. если указать значение меньше выходного для алгоритма, то хеш будет попросту обрезан в конце;
          *          указывать значение больше выходного не имеет смысла)
          */
        'hash_length' => 128,

        /*
         * Настройки "соли"
         */
        'use_salt' => true, // использовать ли соль при хешировании
        'salt_length' => 8, // количество символов генерируемой соли

        // доступные символы для генерации соли
        'salt_characters' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?',
    );