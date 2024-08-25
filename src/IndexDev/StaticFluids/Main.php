<?php
namespace IndexDev\StaticFluids;

use pocketmine\block\Lava;
use pocketmine\event\block\BlockSpreadEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\block\Water;
use pocketmine\Server;

class Main extends PluginBase implements Listener
{
    public function onEnable():void{Server::getInstance()->getPluginManager()->registerEvents($this,$this);}

    public function onSpread(BlockSpreadEvent $e):void{if($e->getSource() instanceof Water || $e->getSource() instanceof Lava)$e->cancel();}
}
