<?php
namespace App\Controllers;

use App\Models\LineasTelefonicasModel;

class LineasTelefonicasController extends BaseController
{
    public  function index(): string
    {
        $lineas = new LineasTelefonicasModel();
        $datos ['datos']=$lineas->findAll();
     //  print_r($datos);
        return view('lineas_telefonicas',$datos);
    }



    //agregar y nuevas
    
    //agregar planes y nuevo planes
    public function nuevasLineas():string 
    {
        return view('lineas_nuevas');
    }
    public function agregarLineas()
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