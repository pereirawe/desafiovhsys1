<?php
class GamesModel extends MainModel{
    private $table;
     
    public function __construct(){
        $this->table="games";
        parent::__construct($this->table);
    }
     
    //Metodos de consulta
    public function getAGame(){
        $query="SELECT * FROM games WHERE id= 1 ";
        $game=$this->ejecutarSql($query);
        return $game;
    }
}
?>