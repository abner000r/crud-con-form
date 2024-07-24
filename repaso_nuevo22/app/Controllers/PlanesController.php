<?php
namespace App\Controllers;

use App\Models\PlanesModel;

class PlanesController extends BaseController
{
    public function index(): string
    {
        $planes = new PlanesModel();
        $datos ['datos']=$planes->findAll();
      // print_r($datos);
        return view('planes',$datos);
    }




    //agregar planes y nuevo planes
    public function nuevoPlan():string 
    {
        return view('planes_nuevos');
    }
    public function agregarPlan()
    {
        $id = $this->request->getVar('txtId');
        //echo "<br>Id = ". $id;
        $nombre=$this->request->getVar('txtNombre');
        //echo "<br>nombre = ". $nombre;
        $pago = $this->request->getVar('txtPagoMensual');
        //echo "<br>Pago =". $pago;
        $minutos = $this->request->getVar('txtCantidadMinutos');
        //echo "<br>Minutos = ". $minutos;
        $mensajes = $this->request->getvar('txtCantidadMensajes');
        //echo "<br>Mensajes = ". $mensajes;
        $planes = new PlanesModel();
        $datos=[
            'plan_id'=>$id,
            'nombre'=>$nombre,
            'pago_mensual'=>$pago,
            'cantidad_minutos'=>$minutos,
            'cantidad_mensajes'=>$mensajes
        ];
        $planes->insert($datos);
        echo "Datos guardados";
        return redirect()->route('planes');
    }







//eliminar y actualizar planes
    public function eliminarPlan($id=null){
        //echo "id o codigo: ".$id;
        $planes = new PlanesModel();
        $planes->delete($id);
        return redirect()->route('planes');
    }

    public function buscarPlan($id=null){
        //echo "id o codigo: ".$id;
        $planes = new PlanesModel();
       $datos['datos'] =$planes ->where ('plan_id', $id)->first();
       print_r($datos);
       return view('form_modificar_plan',$datos);
    }

    public function modificarPlan(){
        $datos=[
            'plan_id'=>$this->request->getVar('txtPlanId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'pago_mensual'=>$this->request->getVar('txtPagoMensual'),
            'cantidad_minutos'=>$this->request->getVar('txtCantidadMinutos'),
            'cantidad_mensajes'=>$this->request->getVar('txtCantidadMensajes')    
        ];
       //print_r($datos);
         $planes = new PlanesModel();
         $planes->update($datos['plan_id'], $datos);
         return redirect()->route()('plan_id');  
    }




}