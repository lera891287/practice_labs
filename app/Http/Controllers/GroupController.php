<?php

namespace App\Http\Controllers;

use App\Models\Enducations;
use App\Models\Groups;
use App\Models\Students;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function groupRating(Request $request)
    {


        $students = Students::whereGroupsId($request->groups_id)->get();

        $stEn = [];
        foreach ($students as $student) {
            $stEn[] = [$student->name, $student->enducations()->get()->map(function (Enducations $enducation) {
                return [
                    'disciplina' => $enducation->name_disciplins,
                    'grad' => $enducation->studentsEn->grad,
                ];
            })];
        }
        /*dd($stEn);*/
        return view('pages.AllRating', compact('students', 'stEn', 'request'));
    }
    public function updateGroup(Request $request, $id)
    {
        $request->validate([
            'name_group' => 'required',
            'number' => 'required',
        ]);
        $groups = Groups::find($id);
        $groups->update($request->all());
        return redirect()->route('list_group');
    }
    public function editGroup()
    {
        $groups=Groups::all();
        return view('pages.EditGroup', compact('groups'));
    }
    public function per(){
        $groups = Groups::all();
        return view('pages.Rating', compact('groups'));

    }
}
