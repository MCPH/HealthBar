<?php

namespace HB;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\scheduler\PluginTask;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener{

public function onEnable(){

$this->getServer()->getLogger()->info("[HB]HealthBar Loaded");
$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new Checker($this),10); 
}

public function onJoin(PlayerJoinEvent $ev){
$p=$ev->getPlayer();
$group = $this->getServer()->getPluginManager()->getPlugin("PurePerms")->getUser($player)->getGroup();
		$groupname = $group->getName();
if($this->getServer()->getPluginManager()->getPlugin("PurePerms") === null){
$p->setNameTag($p->getName()."\n".($player->getHealth() / $player->getMaxHealth() * 100)."%");
}else{
	$p->setNameTag("[".$groupname."]".$p->getName()."\n".($player->getHealth() / $player->getMaxHealth() * 100)."%");
}
}
}
