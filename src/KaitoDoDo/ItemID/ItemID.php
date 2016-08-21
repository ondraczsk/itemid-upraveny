<?php
# plugin hecho por KaitoDoDo
namespace KaitoDoDo\ItemID;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;

class ItemID extends PluginBase implements Listener {

        public $slogan = "§f§l[§eITEM ID§f]";
        
	public function onEnable()
	{
		  $this->getLogger()->info("§eItemsID by KaitoDoDo");
                  $this->getServer()->getPluginManager()->registerEvents($this ,$this);
        }
        
        public function ItemHeld(PlayerItemHeldEvent $event)
        {
            $pl = $event->getPlayer();
            if($pl->isOp())
            {
            $pl->sendTip($this->slogan . " " . $event->getItem()->getId() . "§b:§f" . $event->getItem()->getDamage());
            }
        }

}
