<?php
include_once 'dialog.php';

class Carousel{

  use ModalTrait;

    public $con;
    public $imagem;
    public $descricao;
    public $status;
    public $pagina;

    public function __construct($con, $imagem, $descricao, $status, $pagina){
      $this->con = $con;
      $this->imagem = $imagem;
      $this->descricao = $descricao;
      $this->status = $status;
      $this->pagina = $pagina;
    }

    public function UploadImagemCarousel(){

      $sql = 'insert into tb_carousel set
              url_imagem_carousel = "'.$this->imagem.'",
              ds_carousel = "'.$this->descricao.'",
              st_carousel = "'.$this->status.'"';
      $res = $this->con->query($sql);
      if($res){
        $this->ValidarActive();
        $this->Confirma("Cadastrado com sucesso!", $this->pagina);
      }
      else{$this->Erro("Ops! Imagem não foi cadastrada!");
      }
    }
    
    
      public function ValidarActive(){
        $sql = 'select cd_carousel from tb_carousel 
                where
                ic_active = "1" and
                st_carousel = "1"';
        $res = $this->con->query($sql);
        if($res->num_rows == 0){
          $this->Active();
        }        
      }
      public function Active (){
        $sql = 'update tb_carousel set ic_active = "1"
                where 
                url_imagem_carousel = "'.$this->imagem.'"';
        $res =  $this->con->query($sql);
      }
    }

  function ListarImagem(){
    $sql = 'select cd_carousel, url_imagem_carousel from tb_carousel';
    $res = $GLOBALS['con']->query($sql);
    if($res->num_rows > 0){
        return $res;
    }
    else{
      echo 'sem imagens cadastradas!';
    }
  }
?>