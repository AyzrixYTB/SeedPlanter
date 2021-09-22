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

namespace Ayzrix\SeedPlanter;

use Ayzrix\SeedPlanter\Events\Listener\PlayerListener;
use Ayzrix\SeedPlanter\Utils\Utils;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase {
    use SingletonTrait;

    public function onLoad() {
        self::setInstance($this);
    }


    public function onEnable() {
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents(new PlayerListener(), $this);
        Utils::loadConfig();
    }
}