<?php

class IndexController extends MainController{
    
    private $id;
    public $date;
    public $location;
    public $referee;
    public $localTeamId;
    public $visitorTeamId;

    public function index(){
        $ans = "";
        return $ans;
    }
     
    public function __construct() {
        $table="games";
        parent::__construct($table);
    }
     
    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
     
    public function getDate() {
        return $this->date;
    }
 
    public function setDate($date) {
        $this->date = $date;
    }
 
    public function getLocation() {
        return $this->location;
    }
 
    public function setLocation($location) {
        $this->location = $location;
    }
 
    public function getReferee() {
        return $this->referee;
    }
 
    public function setReferee($referee) {
        $this->referee = $referee;
    }
 
    public function getLocalTeamId() {
        return $this->localTeamId;
    }
 
    public function setLocalTeamId($localTeamId) {
        $this->localTeamId = $localTeamId;
    }
 
    public function getVisitorTeamId() {
        return $this->visitorTeamId;
    }
 
    public function setVisitorTeamId($visitorTeamId) {
        $this->visitorTeamId = $visitorTeamId;
    }
 
    public function save(){
        $query="INSERT INTO games (date, location, referee, localTeamId, visitorTeamId)
                VALUES(NULL,
                       '".$this->date."',
                       '".$this->location."',
                       '".$this->referee."',
                       '".$this->localTeamId."',
                       '".$this->visitorTeamId."');";
        $save= $this->db()->query($query);
        // $this->db()->error;
        return $save;
    }
}
    // $game = new GamesController;
    // $game->save();
    // print_r($game->getId());
    // print_r ($game);
?>