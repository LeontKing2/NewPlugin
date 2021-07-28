<?php
namespace main\main;
use pocketmine\plugin\pluginbase;

use pocketmine\command\command;
use pocketmine\command\CommandSender;
use pocketmine\player;

class main extends pluginbase{
  public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool[
               switch($cmd->getName()){
                 case "hi":
                 if($sender instanceof Player){
                   $sender->sendMessage("§a Test Message");
              }
              break;

            }

               }
              return true;


             ]

}
