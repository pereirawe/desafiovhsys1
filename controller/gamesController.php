<?php
class GamesController extends MainController{
    
    private $id;
    public $date;
    public $location;
    public $referee;
    public $localTeamId;
    public $visitorTeamId;

    public function index(){
        $game=new Main('games');
         
        //Conseguimos todos los games
        $allGames = $game->getAll();
        
        // see to delete Cargamos la vista index y le pasamos valores
        $this->view("index",array(
            "allGames"=>$allGames,
            "Hi"    =>"William Pereira"
        ));
    }

    public function crear(){
        if(isset($_POST["nombre"])){
            //Create a Game
            $usuario=new Usuario();
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setPassword(sha1($_POST["password"]));
            $save=$usuario->save();
        }
        $this->redirect("Games", "index");
    }
     
    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
             
            $game=new Main('games');
            $game->deleteById($id);
        }
        $this->redirect();
    }
    
    /*
    public function hola(){
        $usuarios=new UsuariosModel();
        $usu=$usuarios->getUnUsuario();
        var_dump($usu);
    }
    */
 
}
 
?>