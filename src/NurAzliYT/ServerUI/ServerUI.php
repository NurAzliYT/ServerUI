<?php

namespace NurAzliYT\ServerUI;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\item\VanillaItems;

class ServerUI extends PluginBase{
  public function OnEnable():void{
    
  }
  public function onCommand(CommandSender $sender, Command $command, string $label, array $args):bool{
    
    if($command-getName() == "ui"){
      if($sender instanceof Player){
        $this->onSimpleForm($sender);
      }
    }
    return true;
  }
  
  public function onSimpleForm(Player $player):void{
    $form = new SimpleForm(function (Player $player, $data){
      if(!isset($data)){
        return;
      }
      switch ($data){
          case 0;
          $inv = $player->getInventory();
          $inv->setItem(Index:0, VanillaItems::DIAMOND()->setCount:(30));
          $player->sendMessange("Successfully Gives 30 Diamonds");
          break;
          
          case 1;
          $inv = $player->getInventory();
          $inv->setItem(Index:0, VanillaItems::GOLD_INGOT()->setCount:(30));
          $player->sendMessange("Successfully Gives 30 Gold");
          break;
          
          case 2;
          $inv = $player->getInventory();
          $inv->setItem(Index:0, VanillaItems::IRON_INGOT()->setCount:(30));
          $player->sendMessange("Successfully Gives 30 Iron Ingot");
          break;
          
          case 3;
          $inv = $player->getInventory();
          $inv->setItem(Index:0, VanillaItems::EMERALD()->setCount:(30));
          $player->sendMessange("Successfully Gives 30 Emerald");
          break;
          
          case 4;
          $inv = $player->getInventory();
          $inv->setItem(Index:0, VanillaItems::NETHERITE_INGOT()->setCount:(30));
          $player->sendMessange("Successfully Gives 30 netherite Ingot");
          break;
      }
    }
    
  });
  $form->setTitle("ServerUI");
  $form->setContent("Server Menu");
  $form->addButton("Claim Free Diamonds");
  $form->addButton("Claim Free Gold");
  $form->addButton("Claim Free Iron Ingot");
  $form->addButton("Claim Free Emerald");
  $form->addButton("Claim Free Netherite");
  $player->sendForm($form);
  }
}
