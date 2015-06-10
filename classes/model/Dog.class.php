<?php 
require "DB.class.php";

class Dog extends DB{

	public function listaRacas($racaId=""){
		static::getConn();

		if($racaId == ""){
			$q = static::$pdo->prepare("SELECT * FROM categorias");
			$q->execute();
		}else{
			$q = static::$pdo->prepare("SELECT * FROM categorias WHERE id=?");
			$q->bindParam(1,$racaId);
			$q->execute();
		}

		$dogs = array();
		$i = 1;
		while($res = $q->fetch(PDO::FETCH_OBJ)):
			$dogs[$i]['id'] = $res->id; 
			$dogs[$i]['raca'] = $res->raca; 
			$dogs[$i]['capa'] = $res->capa; 
			$i++;
		endwhile;

		return $dogs;
	}

	public function listaRacasPorCategoria($racaId=""){
		static::getConn();

			$q = static::$pdo->prepare("SELECT * FROM dogs WHERE id_cat=?");
			$q->bindParam(1,$racaId);
			$q->execute();
			
			$dogs = array();

			if( $q->rowCount() > 0 ){

				$i = 1;
				while($res = $q->fetch(PDO::FETCH_OBJ)):
					$dogs[$i]['id'] = $res->id; 
					$dogs[$i]['id_cat'] = $res->id_cat; 
					$dogs[$i]['nome'] = $res->nome; 
					$dogs[$i]['thumb'] = $res->thumb; 
					$i++;
				endwhile;

			
			}else{
				echo "<span class='void'>Nenhum cão dessa raça foi encontrado.</span>";
			}
				return $dogs;

	}	

	public function listaDogDetail($dogId){
		static::getConn();
			$q = static::$pdo->prepare("SELECT * FROM dogs WHERE id=? LIMIT 1");
			$q->bindParam(1,$dogId);
			$q->execute();

			while($res = $q->fetch(PDO::FETCH_OBJ)):
				echo $res->nome;
			endwhile;
	}

	public function listaDogDetailImage($dogId){
		static::getConn();
			$q = static::$pdo->prepare("SELECT * FROM album WHERE album_id=?");
			$q->bindParam(1,$dogId);
			$q->execute();

			$gallery = array();
			$i = 1;
			while($res = $q->fetch(PDO::FETCH_OBJ)):
				$gallery[$i]['foto'] =  $res->foto;
				$i++;
			endwhile;

			return $gallery;
	}	

	public function findDog($nome){
		static::getConn();
			$q = static::$pdo->prepare("SELECT * FROM dogs WHERE nome LIKE %?% ");
			$q->bindParam(1,$nome);
			$q->execute();

			while($res = $q->fetch(PDO::FETCH_OBJ)):
				echo $res->nome;
			endwhile;		
	}
}