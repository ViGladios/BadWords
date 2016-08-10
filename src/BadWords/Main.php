<?php

namespace BadWords;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as F;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

    public function onChat(PlayerChatEvent $event){
		
        $player = $event->getPlayer();
	$message = $event->getMessage();
	
		
	$words = array(
          'дибил',
          'сука',
          'хуй',
          'пидар',
          'пизда',
          'блять',
          'бля',
          'ебать',
          'пиздец',
	  'дурак'
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
		
		
		
	foreach($words as $word){
	    $pos = strpos($word, strtolower($message));
	    if($pos != false){
		$player->sendMessage(F::RED."Нецензурная брань!");
		$event->setCancelled();
	    }
	}
		
	foreach($words2 as $word2){
	    $pos = strpos($word2, strtolower($message));
	    if($pos != false){
		$player->kick(F::RED."Прекрати попрошайничать");
                $event->setCancelled();
	    }
	}
    }
}
