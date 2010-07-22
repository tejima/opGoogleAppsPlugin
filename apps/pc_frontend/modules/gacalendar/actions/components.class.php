<?php

class gacalendarComponents extends sfComponents{
  public function executeCalendarBox(sfWebrequest $request){
    $this->domain = ($this->gadget) ? $this->gadget->getConfig('domain') : "example.com";
    $mail = $this->getUser()->getMember()->getEmailAddress(); 
    $this->mail = $mail ? $mail : "sns@example.com";
  }
  public function executeCalendarBoxFriend(sfWebrequest $request){
    $this->domain = ($this->gadget) ? $this->gadget->getConfig('domain') : "example.com";
    $mail = Doctrine::getTable('Member')->find($request->getParameter('id'))->getEmailAddress();
    $this->mail = $mail ? $mail : "sns@example.com";
  }
}

