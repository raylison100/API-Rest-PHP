<?php
/**
 * Created by PhpStorm.
 * User: raylison100
 * Date: 26/10/18
 * Time: 10:37
 */
require_once('/var/www/html/Projetos/PHP/API-Rest/model/Conteudo.php');


class ConteudoControl{
    function insert($obj){
        $conteudo = new Conteudo();
        //echo $obj->titulo;
        return $conteudo->insert($obj);
        header('Location:listar.php');
    }
    function update($obj,$id){
        $conteudo = new Conteudo();
        return $conteudo->update($obj,$id);
    }
    function delete($obj,$id){
        $conteudo = new Conteudo();
        return $conteudo->delete($obj,$id);
    }
    function find($id = null){
    }
    function findAll(){
        $conteudo = new Conteudo();
        return $conteudo->findAll();
    }
}