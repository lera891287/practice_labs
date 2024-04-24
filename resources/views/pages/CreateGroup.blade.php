@extends('layouts.app')

@section('content')


    <div class="container">

        <h3 align="center" class="mt-5">Добавить группу</h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <div class="form-area">
                    <form method="POST" action="{{ route('groups.create') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-3" style="width: 300px" >
                                <label for="name_group">Название группы</label>
                                <input type="text" class="form-control" name="name_group" style="width: 100%; margin-top: 5px; height: 38px; padding: 6px 12px;">
                            </div>
                            <div class="col-md-3" style="width: 300px" >
                                <label for="number">Номер Группа</label>
                                <input type="text" class="form-control" name="number" style="width: 100%; margin-top: 5px; height: 38px; padding: 6px 12px;">

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
