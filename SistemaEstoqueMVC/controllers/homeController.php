<?php
class homeController extends Controller {

    private $user;

    public function __construct(){
        parent::__construct();

        $this->user = new Users();
        if(!$this->user->checkLogin()){
            header("Location: ".BASE_URL."login");
            exit;

        }

    }
    

    public function index() {
        $data = array(
            'menu' => array(
              BASE_URL.'home/add' => 'Adicionar Produto',
              BASE_URL.'relatorio' => 'Relatório',
              BASE_URL.'login/sair' => 'Sair'  
            )
        );
        $p = new Products();
        $s = '';

        if(!empty($_GET['busca'])){
            $s = $_GET['busca'];
        }

        $data['list'] = $p->getProducts($s);

        $this->loadTemplate('home', $data);

    }


    public function add(){
        $data = array(
            'menu' => array(
                BASE_URL => 'Voltar'
            )
        );
        $p = new Products();

        if(!empty($_POST['cod'])){
            $cod = filter_input(INPUT_POST, 'cod', FILTER_VALIDATE_INT);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $price = $this->filter_post_money('price');
            $quantity = $this->filter_post_money('quantity');
            $min_quantity = $this->filter_post_money('min_quantity');

            if($cod && $name && $price && $quantity && $min_quantity){
                $p->addProduct($cod, $name, $price, $quantity, $min_quantity);

                header("Location: ".BASE_URL);
                exit;
            }else{
                $data ['warning'] = 'Digite os campos corretamente.';
            }

            
        }

        $this->loadTemplate('add' , $data);
    }

    public function filter_post_money($t){
        $price = filter_input(INPUT_POST, $t);
        $price = str_replace('.', '', $price);
        $price = str_replace(',', '.', $price);
        $price = filter_var($price, FILTER_VALIDATE_FLOAT);


        return $price;
    }

    public function edit($id){

        $data = array(
            'menu' => array(
                BASE_URL => 'Voltar'
            )
        );
        $p = new Products();

        if(!empty($_POST['cod'])){
            $cod = filter_input(INPUT_POST, 'cod', FILTER_VALIDATE_INT);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $price = $this->filter_post_money('price');
            $quantity = $this->filter_post_money('quantity');
            $min_quantity = $this->filter_post_money('min_quantity');

            if($cod && $name && $price && $quantity && $min_quantity){
                $p->editProduct($cod, $name, $price, $quantity, $min_quantity, $id);

                header("Location: ".BASE_URL);
                exit;
            }else{
                $data['warning'] = 'Digite os campos corretamente.';
            } 
        }

        $data['info'] = $p->getProduct($id);


        $this->loadTemplate('edit' ,$data);
    }

}