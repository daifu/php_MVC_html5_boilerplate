<?php
/**
 * Controller
 **/
class UserController
{
   private $load;
   private $user;
   
   function __construct()
   {
      $this->load = new Load();
      $this->user = new Model();
   }

   function showAll()
   {
      $this->load->view("home", $this->user);
   }
}
