<?php

//  CONTROLLER <- THE MIDDLE MAN

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Models\User; // <-- Book model
use App\Models\Publisher; // publisher model
use App\Traits\ApiResponser; // <-- use to standardized our code for api response


class UserController extends Controller
{
    use ApiResponser;
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
// GET

    public function getAllData()
    {
        // eloquent style
        $users = User::all();
        // return response()->json($users, 200); // <-- before
        return $this->successResponse($users);
    }

// GET (ID)
public function showId($id)
{ 
    return User::where('bookId', $id)->get();

}

// ADD
public function add(Request $request)
{
    
    $rules = [
    'bookName' => 'required',
    'category' => 'required',
    'publisherId' => 'required|numeric|min:1|not_in:0',
    ];
    $this->validate($request, $rules);
    $publisher = Publisher::findOrFail($request->publisherId);
    $user = User::create($request->all());

    return $this->successResponse($user, Response::HTTP_CREATED);
    
    
    
}

// UPDATE
public function update(Request $request, $id)
{
    $rules = [
        'bookName' => 'required',
        'category' => 'required',
        'publisherId' => 'required|numeric|min:1|not_in:0',
    ];
    $this->validate($request, $rules);
    $publisher = Publisher::findOrFail($request->publisherId);
    $user = User::findOrFail($id);
    $user->fill($request->all());

    $user->save();

    return $user;
}

// DELETE

public function delete($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return $this->successResponse($user);
}

    // Index

public function index()
    {
        $users = User::all();

        return $this->successResponse($users);
    }
}
