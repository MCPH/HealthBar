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
		$this->getLogger()->info(TextFormat::YELLOW . "[" . TextFormat::GOLD . "HealthBar" . TextFormat::YELLOW. "] " . TextFormat::GREEN . "Plugin has been enabled!");
		$this->getLogger()->info(TextFormat::YELLOW . "[" . TextFormat::GOLD . "HealthBar" . TextFormat::YELLOW. "] " . TextFormat::GREEN . "Created by " . TextFormat::WHITE . "SavionLegendZzz");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new Checker($this),10); 
	}

	public function onJoin(PlayerJoinEvent $ev){
		$p=$ev->getPlayer();
		$this->PurePerms = $this->getServer()->getPluginManager()->getPlugin("PurePerms");
	        $group = $this->PurePerms->getUserDataMgr($p)->getGroup($p);
	        $groupname = $group->getName();
		if($this->getServer()->getPluginManager()->getPlugin("PurePerms") === null){
			$p->setNameTag($p->getName()."\n".($player->getHealth() / $player->getMaxHealth() * 100)."%");
		}else{
			$p->setNameTag("[".$groupname."]".$p->getName()."\n".($player->getHealth() / $player->getMaxHealth() * 100)."%");
		}
	}
}
