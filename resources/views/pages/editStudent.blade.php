@extends('layouts.app')

@section('content')


    <div class="container">

        <h3 align="center" class="mt-5">Редактировать студента</h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">


                    <table class="table">
                        <thead class="thead-dark">

                        </thead>
                        <tr>

                            <th>Имя студента</th>

                            <th>Группа</th>
                            <th>Изменить имя студента</th>


                        </tr>
                        @foreach($students as $student)

                            <form method="POST" action="{{ route('student.edit', $student->id) }}">
                                @csrf

                                <tr>
                                   <td> {{ $student -> name}}</td>
                                   <td> {{ $student->groups?->name_group}}</td>
                                    <td>
                                        <input type="text" class="form-control" name="name" style="width: 100%; margin-top: 5px; height: 38px; padding: 6px 12px;">
                                    </td>
                                </tr>
                                <td>
                                    <form method="POST" action="{{route('student.update', $student->id)}}">

                                        @csrf
                                        @method('PUT')

                                        <button type="submit">Изменить</button>

                                    </form>
                                </td>
                            </form>

                        @endforeach



                    </table>





            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color: #d1d1ea;
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
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
@endpush
