<?PHP

class homeController extends Controller{

    public $controller;
    

function __construct(){

    $this->controller=new Controller();
    $model=$this->controller->model_object->create_model('home');
    $d=$model->getAll($_POST);
    $this->controller->view_object->create_view('home',$d);
   
}
function show(){
   

}

function search(){

}


}
?>