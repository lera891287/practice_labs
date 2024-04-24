@extends('layouts.app')

@section('content')


    <div class="container">

        <h3 align="center" class="mt-5">Редактировать студента</h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <div class="form-area">

                    @foreach($students as $student)
                        <td>
                            {{ $student -> name}}
                        </td>
                        <td>{{ $student->groups?->name_group}}</td>
                        <form method="POST" action="{{ route('student.edit', $student->id) }}">

                            @csrf

                            <div class="row">
                                <div class="col-md-3" style="width: 300px" >
                                    <label for="name">Имя студента</label>
                                    <input type="text" class="form-control" name="name" style="width: 100%; margin-top: 5px; height: 38px; padding: 6px 12px;">
                                </div>
{{--                                <div class="col-md-3" style="width: 300px" >--}}
{{--                                    <label for="name_group">Группа</label>--}}
{{--                                    <input type="text" class="form-control" name="name_group" style="width: 100%; margin-top: 5px; height: 38px; padding: 6px 12px;">--}}

{{--                                </div>--}}

                            </div>


                            <form method="POST" action="{{route('student.update', $student->id)}}">

                                @csrf
                                @method('PUT')

                                <button type="submit">Добавить</button>

                            </form>
                        </form>
                    @endforeach


                </div>
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
    </style>
@endpush
