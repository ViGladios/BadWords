<?php

namespace BadWords;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

    $worlds = array(
      'дибил',
      'сука',
      'хуй',
      'пидар',
      'пизда'
    );

    public function onChat(PlayerChatEvent $ev){
       if(strpos($worlds, strtolower($ev->getMessage()))){
          $event->getName()->sendMessage(C::RED."You cannot say that!");
  	      $ev->setCancelled();
       }
    }
}
