@extends('layouts.app')

@section('content')


    <h1>Рейтинг студентов </h1>


    <div style="margin-top: 100px">
        <div class="table-container">
            <table class="table mt-5">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Фамилия</th>

                    <th scope="col">Предмет</th>


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

                        </tr>

                    @endforeach
                @endforeach
            </table>

            <table class="table mt-5" >
                <thead class="thead-dark">
                <tr>

                    <th scope="col">Оценка</th>

                </tr>
                </thead>
                @foreach($stEnn as $student)
                    @foreach($student[1] as $dis)

                        <tr>
                            <td scope="col" style="display: none;">
                                {{ $student[0]}}
                            </td>
                            <td colspan="2">
                                {{ $dis['grad'] }}

                            </td>

                        </tr>


                    @endforeach

                @endforeach
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
        .table-container {
            display: flex;
        }

        .table-container table {
            margin-right: 10px;
        }
    </style>
@endpush
