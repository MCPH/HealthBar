<?php 
namespace HB;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\scheduler\PluginTask;

class Checker extends PluginTask {
	public function __construct($plugin){
		$this->plugin = $plugin;
		parent::__construct($plugin); 
	}

	public function onRun($tick){
	 foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p) {
		$p->setNameTag($p->getName()."\n".($player->getHealth() / $player->getMaxHealth() * 100)."%");
	 }
	}
}
