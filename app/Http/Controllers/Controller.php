<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function groupAll()
    {
        $groups = Groups::all();

        return view('pages.AllGroup', compact('groups'));
    }

    public function createPage()
    {
        return view('pages.CreateGroup');
    }

    public function createGroup(Request $request)
    {


        Groups::create([
                'name_group' => $request->name_group,
                'number' => $request->number,
            ]);

        return redirect('http://localhost/all_group');

    }
    public function deleteGroup($id){
        Groups::destroy($id);
        return redirect('http://localhost/all_group');
    }
}
