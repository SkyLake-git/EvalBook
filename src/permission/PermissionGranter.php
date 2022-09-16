<?php

declare(strict_types=1);

namespace NeiroNetwork\EvalBook\permission;

use NeiroNetwork\EvalBook\OperatorsStore;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;

class PermissionGranter implements Listener{

	public function onLogin(PlayerLoginEvent $event) : void{
		$player = $event->getPlayer();
		if(OperatorsStore::exists($player->getName())){
			$player->setBasePermission(EvalBookPermissions::ROOT_OPERATOR, true);
		}
	}
}
