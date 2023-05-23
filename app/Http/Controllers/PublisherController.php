<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Models\Publisher; // <-- The model
use App\Traits\ApiResponser; // <-- use to standardized our code for api response
class PublisherController extends Controller
{

  use ApiResponser;

  private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
  
  public function index(){

    $publisher = Publisher::all();
    return $this->successResponse($publisher);

  }

  public function show($publisherId){
    $publisher = Publisher::findOrFail($publisherId);
    return $this->successResponse($publisher);
  }

}
