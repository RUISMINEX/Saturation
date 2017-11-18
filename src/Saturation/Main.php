<?php
namespace Saturation;

use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener{

    public function onEnable() {
            $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }
    
    public function onJoin(PlayerJoinEvent $event){
            $p = $event->getPlayer();
            $p->setHealth(20);
            $p->setFood(20);
    }
    
}
