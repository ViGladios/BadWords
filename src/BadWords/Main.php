<?php

namespace BadWords;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as F;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

    $words = array(
      'дибил',
      'сука',
      'хуй',
      'пидар',
      'пизда',
      'блять',
      'бля',
      'ебать'
    );

    $words2 = array(
      'можно админку',
      'дайте админку',
      'дайте оп',
      'дай оп',
      'можно оп',
      'можно креатив',
      'дай креатив',
      'дай креат',
      'дай модерку',
      'можно быть модератором'
    );

    public function onChat(PlayerChatEvent $ev){
       if(strpos($words, strtolower($ev->getMessage()))){
          $ev->getPlayer()->sendMessage(F::RED."Нецензурная брань!");
  	      $ev->setCancelled();
       }
       if(strpos($words2, strtolower($ev->getMessage()))){
           $ev->getPlayer->kick(F::RED."Прекрати попрошайничать");
           $ev-setCancelled();
       }
    }
}
