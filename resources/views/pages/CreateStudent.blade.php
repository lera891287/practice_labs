@extends('layouts.app')

@section('content')


    <div class="container">

        <h3 align="center" class="mt-5">Добавить студента</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
                <div class="col-md-8">

                    <div class="form-area">
                        <form method="POST" action="{{ route('student.create') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-3" style="width: 300px">
                                    <div style="display: flex; justify-content: space-between;">
                                        <label for="name" style="width: 100%;">Имя студента</label>
                                    </div>
                                    <input type="text" class="form-control" name="name" style="height: 38px; padding: 6px 12px; margin-top: 5px;">
                                </div>
                                <div class="col-md-3" style="width: 300px">
                                    <div style="display: flex; justify-content: space-between;">
                                        <label for="name_group" style="width: 100%;">Группа</label>
                                    </div>
                                    <input type="text" class="form-control" name="name_group" style="height: 38px; padding: 6px 12px; margin-top: 5px;">
                                    {{--<select name="name_group" id="name_group" style="width: 100%; margin-top: 5px; height: 38px; padding: 6px 12px;">
                                        @foreach($group as $groups)
                                            <option value="{{ $groups->id }}">{{ $groups->name }}</option>
                                        @endforeach
                                    </select>--}}
                                </div>


                                {{-- <div class="col-md-3" style="width: 300px">
                                     <div style="display: flex; justify-content: space-between;">
                                         <label for="name_group" style="width: 100%;">Группа</label>
                                     </div>

                                     <select name="name_group" id="name_group" style="width: 100%; margin-top: 5px; height: 38px; padding: 6px 12px;">

                                         @foreach($students as $student)
                                             <option value="{{ $student->groups_id }}">{{ $student->id }}</option>
                                         @endforeach
                                     </select>

                                 </div>--}}



                                {{--<div class="col-md-3">
                                    <label>Предмет</label>
                                    <input type="text" class="form-control" name="subject">

                                </div>--}}

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
