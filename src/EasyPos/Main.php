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
        $this->getLogger()->info(Color::GREEN ."EasyPos has been enabled!");
    }
    
    public function onDisable(){
    	$this->getLogger()->info(Color::RED ."EasyPos has been disabled");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if($cmd->getName() == "pos"){
        $x = $sender->x;
        $y = $sender->y;
        $z = $sender->z;
        $sender->sendMessage("X Coordinate: " . $x . "\nY Coordinate: " . $y . "\nZ Coordinate: " . $z . "\nRemember these coordinates if they are important!");
	}
	elseif(cmd->getName() == "position"){
	$x = $sender->x;
        $y = $sender->y;
        $z = $sender->z;
        $sender->sendMessage("X Coordinate: " . $x . "\nY Coordinate: " . $y . "\nZ Coordinate: " . $z . "\nRemember these coordinates if they are important!");
	}
    }
}
