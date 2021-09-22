<?php

/***
 *       _____               _ _____  _             _
 *      / ____|             | |  __ \| |           | |
 *     | (___   ___  ___  __| | |__) | | __ _ _ __ | |_ ___ _ __
 *      \___ \ / _ \/ _ \/ _` |  ___/| |/ _` | '_ \| __/ _ \ '__|
 *      ____) |  __/  __/ (_| | |    | | (_| | | | | ||  __/ |
 *     |_____/ \___|\___|\__,_|_|    |_|\__,_|_| |_|\__\___|_|
 *
 *
 */

namespace Ayzrix\SeedPlanter\Utils;

use Ayzrix\SeedPlanter\Main;

class Utils {
    
    public static $config;

    public static function loadConfig() {
        self::$config = Main::getInstance()->getConfig()->getAll();
    }

    /**
     * @param string $value
     * @return mixed
     */
    public static function getIntoConfig(string $value) {
        return self::$config[$value];
    }
}