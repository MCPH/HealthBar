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
if($p->getHealth() === 20){
$p->setNameTag($p->getName()."\n§c100%");
}
if($p->getHealth() === 19){
$p->setNameTag($p->getName()."\n§c95%");
}
if($p->getHealth() === 18){
$p->setNameTag($p->getName()."\n§c90%");
}
if($p->getHealth()  === 17){
$p->setNameTag($p->getName()."\n§c85%");
}
if($p->getHealth()  === 16){
$p->setNameTag($p->getName()."\n§c80%");
}
if($p->getHealth()  === 15){
$p->setNameTag($p->getName()."\n§c75%");
}
if($p->getHealth()  === 14){
$p->setNameTag($p->getName()."\n§c70%");
}
if($p->getHealth()  === 13){
$p->setNameTag($p->getName()."\n§c65%");
}
if($p->getHealth()  === 12){
$p->setNameTag($p->getName()."\n§c60%");
}
if($p->getHealth()  === 13){
$p->setNameTag($p->getName()."\n§c55%");
}
if($p->getHealth()  === 12){
$p->setNameTag($p->getName()."\n§c50%");
}
if($p->getHealth()  === 11){
$p->setNameTag($p->getName()."\n§c45%");
}
if($p->getHealth()  === 9){
$p->setNameTag($p->getName()."\n§c40%");
}
if($p->getHealth()  === 8){
$p->setNameTag($p->getName()."\n§c35%");
}
if($p->getHealth()  === 7){
$p->setNameTag($p->getName()."\n§c30%");
}
if($p->getHealth()  === 6){
$p->setNameTag($p->getName()."\n§c25%");
}
if($p->getHealth()  === 5){
$p->setNameTag($p->getName()."\n§c20%");
}
if($p->getHealth()  === 4){
$p->setNameTag($p->getName()."\n§c15%");
}
if($p->getHealth()  === 3){
$p->setNameTag($p->getName()."\n§c10%");
}
if($p->getHealth()  === 2){
$p->setNameTag($p->getName()."\n§c5%");
}
if($p->getHealth()  === 1){
$p->setNameTag($p->getName()."\n§c1%");
}
}
}
}
