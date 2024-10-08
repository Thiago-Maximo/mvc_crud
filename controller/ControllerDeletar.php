<?php
require_once("../model/banco.php");
Class deleta{
    private $deleta;

    public function __construct($id){
        $this-> deleta = new Banco();
        if($this->deleta->deleteLivro($id)==true){
            echo "<script>alert('Registro Deletado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao Deletar registro!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);
?>