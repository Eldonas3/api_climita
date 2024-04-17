<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class ClimaController extends Controller{

    public function index(){
        
    }

    public function getUbicaciones(){
        
        $model = model('ClimaModel');
        $data['datos'] = $model->getUbicaciones();

        return view('datos',$data);
    }

    public function getClimaByCP(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByCP();
        return view('datos',$data);
    }

    public function getClimaByHora($horaEspecifica){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByHora($horaEspecifica);
        return view('datos',$data);
    }

    public function getClimaByFecha($fechaIncial,$fechaFinal) {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByFecha($fechaIncial,$fechaFinal);
        return view('datos', $data);
    }
    

    public function getClimaExtremo(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaExtremo();
        return view('datos',$data);
    }

    public function getClimaPorUbicacion($ubicacion){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaPorUbicacion($ubicacion);
        return view('datos',$data);
    }

    public function getClimaPromedio($fechaInicio,$fechaFin){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaPromedio($fechaInicio,$fechaFin);
        return view('datos',$data);
    }

    public function getClimaPorHoraYUbicacion($ubicacion,$hora){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaPorHoraYUbicacion($ubicacion,$hora);
        return view('datos',$data);
    }

    public function getCoordenadasPorUbicacion($ubicacion){
        $model = model('ClimaModel');
        $data['datos'] = $model->getCoordenadasPorUbicacion($ubicacion);
        return view('datos',$data);
    }

    public function getSensacionTermicaPorUbicacion($ubicacion){
        $model = model('ClimaModel');
        $data['datos'] = $model->getSensacionTermicaPorUbicacion($ubicacion);
        return view('datos',$data);
    }

}