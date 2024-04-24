@extends('layouts.app')

@section('content')


    <div class="container">
        <h3 align="center" class="mt-5">Группы</h3>
        <div class = "row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-area">
                    <form method="GET" action="{{ route('group.rating') }}">
                        @csrf

                        <input type="text" class="form-control" name="groups_id">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-info" value="Найти">
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
