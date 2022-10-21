<?php

declare(strict_types=1);

namespace TERAMI\NoColor;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\event\player\PlayerChatEvent;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener
{
	protected function onEnable() : void
	{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onChat(PlayerChatEvent $event) : void
	{
		$event->setMessage(TextFormat::clean($event->getMessage()));
	}
}