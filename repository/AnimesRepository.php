<?php 

require_once('Connection.php');


function fnAddAnimes($nome, $foto, $sinopse ,$genero, $episodios, $lancamento, $zip) {

    $con = getConnection();
    
    $sql = "insert into animes (nome, foto, sinopse ,genero, episodios, lancamento, zip) values (:pNome, :pFoto , :pSinopse ,:pGenero, :pEpisodios, :pLancamento, :pZip)";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pNome", $nome);
    $stmt->bindParam(":pSinopse", $sinopse);
    $stmt->bindParam(":pFoto", $foto);
    $stmt->bindParam(":pGenero", $genero);
    $stmt->bindParam(":pEpisodios", $episodios);
    $stmt->bindParam(":pLancamento", $lancamento);
    $stmt->bindParam(":pZip", $zip);

   return $stmt->execute();
}

function fnListaAnimes(){
    $con = getConnection();

    $sql = "select * from animes";

    $result = $con->query($sql);

    $listaAnimes = array();
    while($animes = $result->fetch(PDO::FETCH_OBJ)) {
        array_push($listaAnimes, $animes);
    }
    return $listaAnimes;
}

function fnLocalizaAnimesPorNome($nome){
    $con = getConnection();

    $sql = "select * from animes where nome like :pNome";

    $stmt = $con->prepare($sql);
    $stmt->bindValue(":pNome", "%{$nome}%");

    if($stmt->execute()) {
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        return $stmt->fetchAll();
    }

}
     
function fnLocalizaAnimesPorID($id) {
    $con = getConnection();

    $sql = "select * from animes where id = :pID";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);
    
    if($stmt->execute()) {
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    return null;
}

function fnUpdateAnimes($id, $nome, $foto, $sinopse ,$genero, $episodios, $lancamento, $zip) {

    $con = getConnection();
    
    $sql = "update animes set nome = :pNome, foto = :pFoto, sinopse = :pSinopse,genero = :pGenero, episodios = :pEpisodios, lancamento = :pLancamento, zip = :pZip where id = :pID";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);
    $stmt->bindParam(":pNome", $nome);
    $stmt->bindParam(":pSinopse", $sinopse);
    $stmt->bindParam(":pFoto", $foto);
    $stmt->bindParam(":pGenero", $genero);
    $stmt->bindParam(":pEpisodios", $episodios);
    $stmt->bindParam(":pLancamento", $lancamento);
    $stmt->bindParam(":pZip", $zip);

   return $stmt->execute();
}

function fnDeleteAnimes($id) {

    $con = getConnection();
    
    $sql = "delete from animes where id = :pID";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);
    
   return $stmt->execute();
}

