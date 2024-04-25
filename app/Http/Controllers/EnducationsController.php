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
    public function editEnducation()
    {
        $enducations = Enducations::all();
        return view('pages.editEnducations', compact('enducations'));

    }
    public function updateEnducation(Request $request,$id){
        $request->validate([
            'name_disciplins'=> 'required',
        ]);
        Enducations::find($id)->update($request->all());
        return redirect()->route('all_enducations');
    }
    public function deleteEnducation($id){
        Enducations::destroy($id);
        return redirect('http://localhost/all_enducations');
    }
}
