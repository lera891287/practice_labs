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

                    <td>

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
            <tr>
                <td>

                        <form method="POST" action="{{route('student.edit', $student->id)  }}">

                            @csrf()

                            <a href="{{route('student.edit', $student->id) }}" class="btn btn-secondary" > Изменить данные</a>
                        </form>

                </td>
                <td><a href="{{route('create_students') }}" class="btn btn-secondary"> Создать </a></td>
            </tr>
        </table>



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
        .button-row {
            display: flex;
            justify-content: flex-end;
            padding: 12px;
        }
        .button {
            margin-left: 10px;
            padding: 6px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
@endpush
