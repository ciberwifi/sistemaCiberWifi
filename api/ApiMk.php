<?php require_once('api_mt_include2.php'); ?>
<?php require_once('ConfigMk.php'); ?>
<?php

Class ApiMk {

private $configMk;
private $API;


public function __construct()
  {

$this->configMk= new ConfigMk();
$this->API = new routeros_api();		
$this->API->debug = false;
  
  }
  
  public function __destruct()
  {
	  unset($this->configMk);
	  unset($this->API);
	  //unset($this);
  }


function  cambiarPerfilUserAndRemove($idApiUser, $idApiActive,  $profile){
	
		if ($this->API->connect($this->configMk->ip , $this->configMk->username , $this->configMk->pass, $this->configMk->api_puerto)) {	
		
		$this->API->write("/ip/hotspot/user/set",false);
		$this->API->write('=profile='.$profile,false);
		$this->API->write("=.id=".$idApiUser,true);
		$this->API->write("/ip/hotspot/active/remove",false);
		$this->API->write("=.id=".$idApiActive,true);
		$READ = $this->API->read(false);
		$ARRAY = $this->API->parse_response($READ);
		$this->API->disconnect();

	}

}

function obtenerUsers(){
			if ($this->API->connect($this->configMk->ip , $this->configMk->username , $this->configMk->pass, $this->configMk->api_puerto)) {	
			$this->API->write("/ip/hotspot/user/getall",true);
			$READ = $this->API->read(false);
			$USUARIOS = $this->API->parse_response($READ);
			$this->API->disconnect();
			return $USUARIOS;
			}
		}
		
function obtenerActives(){	
	if ($this->API->connect($this->configMk->ip , $this->configMk->username , $this->configMk->pass, $this->configMk->api_puerto)) {		
			$this->API->write("/ip/hotspot/active/getall",true);
			$READ = $this->API->read(false);
			$ACTIVES = $this->API->parse_response($READ);
			$this->API->disconnect();
			return $ACTIVES;
		}
			}
			
}
?>