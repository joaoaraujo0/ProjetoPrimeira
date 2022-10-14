<?php
include 'CadastraPub.php';


class Pub extends CadastraPub{

private $tit_projeto;
private $res_projeto;
private $dti_projeto;
private $dtt_projeto;


public function __construct($tit_projeto, $res_projeto, $dti_projeto,  $dtt_projeto)
{
    $this->tit_projeto = $tit_projeto;  
    $this->res_projeto = $res_projeto;
    $this->dti_projeto = $dti_projeto;
    $this->dtt_projeto = $dtt_projeto;
}

//Metodos Set
public function settit_projeto($string){
    $this->tit_projeto = $string;
}
public function setres_projeto($string){
    $this->res_projeto = $string;
}
public function setdti_projeto($string){
    $this->dti_projeto = $string;
}

public function setdtt_projeto($string){
    $this->dtt_projeto = $string;
}


//Metodos Get
public function gettit_projeto(){
    return $this->tit_projeto;
}
public function getres_projeto(){
    return $this->res_projeto;
}
public function getdti_projeto(){
    return $this->dti_projeto;
}
public function getdtt_projeto(){
    return $this->dtt_projeto;
}


public function CadastroPub(){
    $tit_projeto=$this->gettit_projeto();    
    $res_projeto=$this->getres_projeto();  
    $dti_projeto=$this->getdti_projeto(); 
    $dtt_projeto=$this->getdtt_projeto(); 

    return $this->setCadastroPub($tit_projeto,$res_projeto, $dti_projeto, $dtt_projeto,);
}
}
?>