<?php
namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $cliente = new ClientesModel();
        $datos ['datos']=$cliente->findAll();
       // print_r($datos);
        return view('clientes',$datos);
    }




    //agregar y nuevos clientes-
    public function nuevosClientes():string 
    {
        return view('clientes_nuevos');
    }
    public function agregarClientes()
    {
        $cliente = $this->request->getVar('txtCliente');
        //echo "<br>Id = ". $id;
        $telefono=$this->request->getVar('txtTelefono');
        //echo "<br>nombre = ". $nombre;
        $fecha = $this->request->getVar('txtFecha');
        //echo "<br>Pago =". $pago;
        $meses = $this->request->getVar('txtMeses');
        //echo "<br>Minutos = ". $minutos;
        $plan = $this->request->getvar('txtPlanId');
        //echo "<br>Mensajes = ". $mensajes;
        $lineas = new LineasTelefonicasModel();
        $datos=[
            'cliente_id'=>$cliente,
            'no_telefono'=>$telefono,
            'fecha_pago'=>$fecha,
            'meses_atraso'=>$meses,
            'plan_id'=>$plan
        ];
        $lineas->insert($datos);
        echo "Datos guardados";
        return redirect()->route('lineas_telefonicas');
    }
}