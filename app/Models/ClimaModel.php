<?php

namespace App\Models;

use CodeIgniter\Model;

class ClimaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'clima';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['latitud','longitud','ubicacion','fecha','hora','temperatura','humedad','altitud','sensacionTermica','tipo','CP'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    // 1.- Funcionando
    public function getUbicaciones(){
        $db = db_connect();

        $builder = $db->table('clima')->select('ubicacion')->groupBy('ubicacion');

        $query = $builder->get();

        return $query->getResult();
    }

    // 2.-Funcionando
    public function getClimaByCP(){
        $request = request();
        $cp = $request->getGet('cp');
        $db = db_connect();
        $sql = $db->table('clima')
        ->select('latitud','longitud','fecha','hora','temperatura')->
        where('CP',$cp);
        $query = $sql->get();
        return $query->getResult();
    }

    // 3.-Funcionando con ciertas modificaciones
    public function getClimaByFecha($fechaIncial,$fechaFinal){
        // $request = request();
        // $fechaIncial = $request->getGet('fechaInicial');
        // $fechaFinal = $request->getGet('fechaFinal');

        $db = db_connect();
        $sql = $db->table('clima')
        ->select('latitud','longitud','fecha','hora','temperatura')
        ->where('fecha>=',$fechaIncial)
        ->where('fecha<=',$fechaFinal);
        $query = $sql->get();
        return $query->getResult();
    }

    // 4.- Funcionando
    public function getClimaByHora(string $hora)
    {
        $request = request();
        $db = db_connect();
        // Consulta los datos del clima para la hora especificada
        $sql = $db->table('clima')->where('hora', $hora);        
        $query = $sql->get();

        // Devuelve los datos del clima encontrados
        return $query->getResult();
    }

    // 5.-Funcionando
    public function getClimaExtremo()
    {
        $db = db_connect();
    
        // Consulta para obtener datos extremos del clima
        $climaExtremo = [
            'temperatura_maxima' => $db->table('clima')->selectMax('temperatura')->get()->getRow()->temperatura,
            'temperatura_minima' => $db->table('clima')->selectMin('temperatura')->get()->getRow()->temperatura,
            'hora_mas_lluviosa' => $db->table('clima')->select('hora')->orderBy('humedad', 'desc')->get()->getRow()->hora
        ];
    
        // Devuelve los datos extremos del clima
        return $climaExtremo;
    }
    

    // 6.-Funcionando
    public function getClimaPorUbicacion(string $ubicacion)
    {
        $db = db_connect();
        // Consulta los datos del clima para la ubicación especificada
        $sql = $db->table('clima')->where('ubicacion', $ubicacion);
        $query = $sql->get();

        // Devuelve los datos del clima encontrados
        return $query->getResult();
    }

    // 7.-Funcionando
    public function getClimaPromedio(string $fechaInicio, string $fechaFin)
    {
        $db = db_connect();
    
        // Consulta los datos del clima para el período especificado
        $query = $db->table('clima')
                    ->selectAvg('temperatura')
                    ->where('fecha >=', $fechaInicio)
                    ->where('fecha <=', $fechaFin)
                    ->get();
    
        // Verifica si se obtuvieron resultados
        if ($query->getNumRows() == 0) {
            return null;
        }
    
        // Obtiene el resultado y calcula el promedio de temperatura
        $result = $query->getRow();
        $temperaturaPromedio = $result->temperatura;
    
        // Devuelve el clima promedio
        return [
            'temperatura_promedio' => $temperaturaPromedio,
        ];
    }
    

    // 8.-Funcionando
    public function getClimaPorHoraYUbicacion(string $ubicacion, string $hora)
    {
        $db = db_connect();
    
        // Consulta los datos del clima para la ubicación y hora especificadas
        $query = $db->table('clima')
                    ->where('ubicacion', $ubicacion)
                    ->where('hora', $hora)
                    ->get();
    
        // Verifica si se obtuvieron resultados
        if ($query->getNumRows() == 0) {
            return null;
        }
    
        return $query->getResult();
    }
    

    // 9.-
    public function getCoordenadasPorUbicacion(string $ubicacion)
    {
        $db = db_connect();
    
        // Consulta las coordenadas (latitud y longitud) para la ubicación especificada
        $query = $db->table('clima')
                    ->select('latitud, longitud')
                    ->where('ubicacion', $ubicacion)
                    ->get();
    
        // Verifica si se obtuvieron resultados
        if ($query->getNumRows() == 0) {
            return null;
        }
    
        // Devuelve el primer resultado encontrado
        return $query->getResult();
    }
    

    // 10.-
    public function getSensacionTermicaPorUbicacion(string $ubicacion)
    {
        $db = db_connect();
    
        // Consulta la sensación térmica, fecha y hora para la ubicación especificada
        $query = $db->table('clima')
                    ->select('sensacionTermica, fecha, hora')
                    ->where('ubicacion', $ubicacion)
                    ->get();
    
        // Verifica si se obtuvieron resultados
        if ($query->getNumRows() == 0) {
            return null;
        }
    
        // Devuelve el primer resultado encontrado
        return $query->getResult();
    }
    
}
