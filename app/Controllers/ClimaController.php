<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Response;

class ClimaController extends Controller{

    public function index(){
        
    }

    public function getUbicaciones(){
        
        $model = model('ClimaModel');
        $data['datos'] = $model->getUbicaciones();

        return view('datos',$data);
    }

    public function getUbicaciones2(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getUbicaciones();

        $response = response();

        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type','text/html');
        $response->noCache();

        $response->send();
    }

    public function getClimaByCP(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByCP();
        return view('datos',$data);
    }

    public function getClimaByCP2(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByCP();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type','text/html');
        $response->noCache();

        $response->send();
    }

    public function getClimaByHora($horaEspecifica){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByHora($horaEspecifica);
        return view('datos',$data);
    }

    public function getClimaByHora2($horaEspecifica){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByHora($horaEspecifica);

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type','text/html');
        $response->noCache();

        $response->send();
    }

    public function getClimaByFecha($fechaIncial,$fechaFinal) {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByFecha($fechaIncial,$fechaFinal);
        return view('datos', $data);
    }

    public function getClimaByFecha2($fechaIncial,$fechaFinal){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByFecha($fechaIncial,$fechaFinal);

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type','text/html');
        $response->noCache();

        $response->send();
    }
    

    public function getClimaExtremo(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaExtremo();
        return view('datos',$data);
    }

    public function getClimaExtremo2(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaExtremo();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type','text/html');
        $response->noCache();

        $response->send();        
    }

    public function getClimaPorUbicacion($ubicacion){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaPorUbicacion($ubicacion);
        return view('datos',$data);
    }

    public function getClimaPorUbicacion2($ubicacion){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaPorUbicacion($ubicacion);
        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type','text/html');
        $response->noCache();

        $response->send();
    }

    public function getClimaPromedio($fechaInicio,$fechaFin){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaPromedio($fechaInicio,$fechaFin);
        return view('datos',$data);
    }

    public function getClimaPromedio2($fechaInicio,$fechaFin){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaPromedio($fechaInicio,$fechaFin);
        
        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type','text/html');
        $response->noCache();

        $response->send();
    }

    public function getClimaPorHoraYUbicacion($ubicacion,$hora){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaPorHoraYUbicacion($ubicacion,$hora);
        return view('datos',$data);
    }

    public function getClimaPorHoraYUbicacion2($ubicacion,$hora){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaPorHoraYUbicacion($ubicacion,$hora);

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type','text/html');
        $response->noCache();

        $response->send();        
    }

    public function getCoordenadasPorUbicacion($ubicacion){
        $model = model('ClimaModel');
        $data['datos'] = $model->getCoordenadasPorUbicacion($ubicacion);
        return view('datos',$data);
    }

    public function getCoordenadasPorUbicacion2($ubicacion){
        $model = model('ClimaModel');
        $data['datos'] = $model->getCoordenadasPorUbicacion($ubicacion);

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type','text/html');
        $response->noCache();

        $response->send();             
    }

    public function getSensacionTermicaPorUbicacion($ubicacion){
        $model = model('ClimaModel');
        $data['datos'] = $model->getSensacionTermicaPorUbicacion($ubicacion);
        return view('datos',$data);
    }

    public function getSensacionTermicaPorUbicacion2($ubicacion){
        $model = model('ClimaModel');
        $data['datos'] = $model->getSensacionTermicaPorUbicacion($ubicacion);

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type','text/html');
        $response->noCache();

        $response->send(); 
    }

}