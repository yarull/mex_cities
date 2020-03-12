<?php

namespace Yarull\Mex_cities;

use Illuminate\Http\Request;
use Yarull\Mex_cities\Estado;
use Yarull\Mex_cities\Municipio;
use Response;

use App\Http\Controllers\Controller;


class EstadosController extends Controller
{

  public function index(Request $request){
    $estados = Estado::orderBy('name', 'asc');
    if($request->q){
      $estados->where('name','like','%'.$request->q.'%');
    }
    $estados = $estados->get();
    
    return Response::json($estados);
  }
  
  
  public function municipio(Request $request)
  {
    $municipios = Municipio::orderBy('name','asc');
    
    if($request->estado){
      $municipios->where('estado_id',$request->estado);
    }
    if($request->q){
      $municipios->where('name','like','%'.$request->q.'%');
    }
  
    $municipios = $municipios->get();
    return Response::json($municipios);
  }

}
