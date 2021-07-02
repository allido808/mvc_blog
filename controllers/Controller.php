<?php
require($_SERVER['DOCUMENT_ROOT'] . '/models/Models.php');


class Controller extends Model{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }
    
    public function insertController($data){

        // print_r($data);
        $title = stripcslashes($data['title']);
        $category = strtolower($data['category']);
        $body = stripcslashes(strip_tags($data['body']));
        $image = $data['image'];

        $sender = array(
            'title' => $title,
            'category' => $category,
            'body' => $body,
            'image' => $image
        );

        $res = $this->model->insertModel($sender);
        // echo '<pre>';
        // print_r($this->model);
        //  echo '</pre>';
        if($res){
            header("Location: /");
        } else {
            return 'shit bro';
        }

    }
    
    public function get_all(){
        $res = $this->model->get_data();
        return $res;
    }

    public function delete(Int $id){

        $res = $this->model->delete_article($id);
        if($res){
            header("Location: /");
        } else {
            return 'shit bro';
        }
    }

    
    
}
