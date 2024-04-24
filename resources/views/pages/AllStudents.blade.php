@extends('layouts.app')

@section('content')

    <h3 align="center" class="mt-5">Список студентов</h3>
    <div style="margin-top: 100px">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Имя студента</th>



            </tr>
            </thead>

            @foreach($students as $student)

                <tr>
                    <td>
                        {{ $student -> name}}
                    </td>
                    <td>{{ $student->groups?->name_group}}</td>
{{--                    ? $student->groups->name : 'Нет группы' --}}
                    <td>
                        <form method="POST" action="{{route('student.edit', $student->id)  }}">

                            @csrf()

                            <a href="{{route('student.edit', $student->id) }}" class="btn btn-secondary" > Изменить </a>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('student.destroy' , $student->id )  }}">
                            @csrf()
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

        <a href="{{route('create_students') }}" class="btn btn-secondary"> Создать </a>
    </div>





@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color: #8e8e81;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color: #92afd1;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush