@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Список студентов</h3>
        <div class = "row">
            <div class="col-md-2"></div>

                </div>
            </div>

    </div>
    <div style="margin-top: 100px">
        <table class="table mt-5">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Фамилия</th>

                <th scope="col">Предмет</th>
                <th scope="col">Оценка</th>

            </tr>
            </thead>

            @foreach($stEn as $student)
                @foreach($student[1] as $dis)

                    <tr>
                        <td scope="col">
                            {{ $student[0]}}
                        </td>
                        <td scope="col">
                            {{ $dis['disciplina'] }}
                        </td>
                        <td scope="col">
                            {{ $dis['grad'] }}

                        </td>


                    </tr>
                @endforeach
            @endforeach
        </table>

        <a href="{{route('pages.create') }}" class="btn btn-secondary"> Поставить оценку </a>


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
    </style>
@endpush
