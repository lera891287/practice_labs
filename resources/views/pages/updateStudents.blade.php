@extends('layouts.app')

@section('content')

    <div class ="container">
        <h3 align="center" class="mt-5">Добавление оценок</h3>
        <div class = "row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-area">
                    <form method="POST" action="{{route('student.update',$student_id->$id)}}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <label>ФИО студента</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="col-md-4">
                                <label>Оценка</label>
                                <input type="text" class="form-control" name="grad">

                            </div>


                            <div class="col-md-4">
                                <label>Предмет</label>
                                <input type="text" class="form-control" name="name_disciplins">

                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-info" value="Добавить">
                            </div>

                        </div>
                    </form>
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
