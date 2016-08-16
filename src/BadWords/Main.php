<?php

namespace BadWords;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as F;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
	
    public function onEnable() {
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onChat(PlayerChatEvent $event){
		
        $player = $event->getPlayer();
	$message = $event->getMessage();
	
		
	$words = array(
          "дибил",
          "сука",
          "хуй",
          "пидар",
          "пизда",
          "блять",
          "бля",
          "ебать",
          "пиздец",
	  "долбаёб",
	  "пиздец",
	  "ебало",
	  "ебальник",
	  "уёбище",
	  "fuck",
	  "шлюха",
	  "шмара",
	  "мудак",
	  "мудило",
	  "мудачина",
	  "клитор",
	  "блеать",
	  "лох",
	  "дилда",
	  "нихуя",
	  "ахуеть",
	  "ебаться",
	  "ебатся",
	  "трахать",
	  "трахаться",
	  "хуя",
	  "хуи"
        );

        $words2 = array(
          "можно админку",
          "дайте админку",
          "дайте оп",
          "дай оп",
          "можно оп",
          "можно креатив",
          "дай креатив",
          "дай креат",
          "дай модерку",
          "можно быть модератором"
        );	
		
		
		
	foreach($words as $word){
	    $pos = strpos(mb_strtolower($message), $word);
	    if($pos !== false){
	    	if(!$player->hasPermissions("badwords")){
		   $player->sendMessage(F::RED."Нецензурная брань!");
		   $event->setCancelled();
		   break;
	        }
	    }
	}
		
	foreach($words2 as $word2){
	    $pos = strpos(mb_strtolower($message), $word2);
	    if($pos !== false){
	    	if(!$player->hasPermissions("badwords")){
	    	   $event->setCancelled();
		   $player->kick(F::RED."Прекрати попрошайничать");
		   break;
	    	}
	    }
	}
    }
}
