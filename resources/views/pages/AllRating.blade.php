@extends('layouts.app')

@section('content')


    <h1>Группа номер </h1>


    <div style="margin-top: 100px">
        <table class="table">
            <thead class="thead-dark">
            <tr>

                <th scope="col">имя студента</th>
                <th scope="col">название предмета</th>
                <th scope="col">оценка</th>


            </tr>
            </thead>

            <tbody>

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

            </tbody>
        </table>

        {{--<a href="{{route('create_enducations') }}" class="btn btn-secondary"> Создать </a>--}}
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
