<?php

namespace CustomEntity;

class CustomEntity extends PluginBase{
 
 public function onLoad(){
 $this->getLogger()->notice("CustomEntity is on Enable!");
 }
 
 public function onEnable(){
 $this->getServer()->getPluginManager()->registerEvents($this,$this);
 }
 
 public function onDisable(){
 $this->getLogger()->notice("CustomEntity is on Disable!");
 }
 
 
}
