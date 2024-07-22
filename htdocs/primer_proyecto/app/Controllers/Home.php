<?php

namespace App\Controllers;

use App\Models\usuario_Model;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
        
    }
    public function quienes_somos()
    {
        $data['titulo']='quienes_somos';
        echo view('front/head_view',$data); 
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
        
    }
    public function acerca_de()
    {
        $data['titulo']='acerca_de';
        echo view('front/head_view',$data); 
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
        
    }
    public function registro()
    {
        $data['titulo']='registro';
        echo view('front/head_view',$data); 
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
        
    }
    public function login()
    {
        $data['titulo']='login';
        echo view('front/head_view',$data); 
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');   
        
    }
    public function clientes()
    {
    $data['titulo']='clientes';

    $model = new usuario_Model();
    $datos = $model->getClientes();
    
    echo view('front/head_view',$data); 
    echo view('front/navbar_view');
    echo view('back/usuario/clientes', compact('datos'));
    echo view('front/footer_view');
    
}
    public function edit()
    {
    $data['titulo']='edit';
    echo view('front/head_view',$data); 
    echo view('front/navbar_view');
    echo view('back/usuario/edit');
    echo view('front/footer_view');
    }


}