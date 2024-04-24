<?php

namespace App\Http\Controllers;

use App\Models\Enducations;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class EnducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enducations = Enducations::all();

        return view('pages.AllEnducations', compact('enducations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createPage()
    {
        return view('pages.CreateEnducations');
    }

    public function createEnducations(Request $request)
    {


        Enducations::create([
            'name_disciplins' => $request->name_disciplins,
        ]);

        return redirect('http://localhost/all_enducations');

    }
    public function deleteEnducation($id){
        Enducations::destroy($id);
        return redirect('http://localhost/all_enducations');
    }
}
