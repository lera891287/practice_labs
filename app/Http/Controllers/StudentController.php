<?php

namespace App\Http\Controllers;

use App\Models\Enducations;
use App\Models\EnducationsStudents;
use App\Models\Students;
use App\Models\Groups;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Students::with('groups')->get();


        return view('pages.AllStudents', compact('students'));
    }

    public function StudentList()
    {
        $stEn = [];

        $students = Students::all();
        foreach ($students as $student) {
            $stEn[] = [$student->name,  $student->enducations()->get()->map(function (Enducations $enducation) {
                return [
                    'disciplina' => $enducation->name_disciplins,

                ];
            })];
        }
        $stEnn =[];
        foreach ($students as $student) {
            $stEnn[] = [$student->name, $student->studentsEn()->get()->map(function (EnducationsStudents $enducationsStudents) {
                return [
                    'grad' => $enducationsStudents->grad,
                ];
            })];
        }

        return view('pages.index', compact('students', 'stEn','stEnn'));

    }


    public function createPage()
    {
        $students = Students::all();
        return view('pages.create',compact('students'));
    }
    public function createPageTwo()
    {
        $students = Students::all();
        return view('pages.CreateStudent',compact('students'));
    }

    public function createStudent(Request $request)
    {
        /*dd($request);*/

        $request->validate([
            'name' => 'required',
            'name_group' => 'required',
        ]);

        $group = Groups::where('name_group', $request->name_group)->first();

        if (!$group) {
            return redirect()->back()->withErrors(['name_group' => 'Группа не найдена']);
        }

        Students::create([
            'name' => $request->name,
            'groups_id' => $group->id,
        ]);

        /*$groups = Groups::all();

        Students::create([
            'name' => $request->name,
            'groups_id' => $request->groups_id,

        ]);*/

        return redirect('http://localhost/all_students');

    }

    public function createGrad(Request $request)
    {
        $student = Students::whereName($request->name)->first();
        if (!$student) {
            return view('pages.create', ['students' => 'Пользователь не найден']);
        }
        $enduction = Enducations::whereNameDisciplins($request->name_disciplins)->first();
        if (!$enduction) {
            return view('pages.create', ['students' => 'Такого предмета не существует']);
        }

        if (EnducationsStudents::whereEnducationsId($enduction->id)->whereStudentsId($student->id)->first()) {
            return view('pages.create', ['students' => 'unknown']);
        }

        EnducationsStudents::create([
            'students_id' => Students::whereName($request->name)->first()->id,
            'grad' => $request->grad,
            'enducations_id' => Enducations::whereNameDisciplins($request->name_disciplins)->first()->id,

        ]);

        return redirect('http://localhost/marks');
    }
    public function editGrad()
    {
        $grad=EnducationsStudents::all();
        return view('pages.edit', compact('grad'));
    }
    public function updateGrad(Request $request,$id)
    {
        $request->validate(['grad'=>'required']);
        EnducationsStudents::find($id)->update($request->all());
        return redirect('http://localhost/marks');
    }

    public function updateStudent(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
//            'name_group' => 'required',
        ]);

//        $group = Groups::where('name_group', $request->name_group)->first();

       Students::find($id)->update($request->all());

        return redirect('http://localhost/all_students');
    }
    public function editStudent()
    {
        $students = Students::all();
        return view('pages.editStudent', compact('students'));
    }
    public function deleteStudent($id){
        Students::destroy($id);
        return redirect('http://localhost/all_students');
    }
}
