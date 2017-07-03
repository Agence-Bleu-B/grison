<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    //verification de session
    public function isconnect(){

        $adminco = $this->session->userdata('adminco');

        if ($adminco) {
            return true ;
        }
        else{
            return false;
        }
    }
    //connection et mise en session
    public function connection($login,$mdp){

        if ($login == "adminccas" && $mdp == "ccas2017ADMIN") {
            $this->session->adminco = true;
        }
        
    }
    //deconnection et destruction session
    public function deco(){
        $this->session->unset_userdata('adminco');
    }
}
