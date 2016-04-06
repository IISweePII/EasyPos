<?php
namespace EasyPos;

use pocketmine\Player;
use pocketmine\utils\TextFormat as Color;
use pocketmine\command\{Command, CommandSender};
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\plugin\PluginManager;
use pocketmine\math\Vector3;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
	$this->saveDefaultConfig();
    	$this->getServer()->getPluginManager()->registerEvents($this ,$this);
        $this->getLogger()->info(Color::GREEN ."Enabled!");
    }
    
    public function onDisable(){
    	$this->getLogger()->info(Color::RED ."Disabled");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if($cmd->getName() == "mypos"){
        $x = $sender->x;
        $y = $sender->y;
        $z = $sender->z;
        $sender->sendMessage(Color::YELLOW . "Your POS is:\n" . "Your X is: " . Color::GREEN . $x . Color::YELLOW . "\nYour Y is: " . Color::GREEN . $y . Color::YELLOW . "\nYour Z is: " . Color::GREEN . $z . Color::YELLOW . "\nJust use the first 3 numbers xP!");
        }
}
}
