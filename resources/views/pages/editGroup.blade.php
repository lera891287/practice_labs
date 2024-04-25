@extends('layouts.app')

@section('content')


    <div class="container">

        <h3 align="center" class="mt-5">Изменить группу</h3>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">


                    <table class="table">
                        <thead class="thead-dark"></thead>
                        <tr>
                            <th>Группа</th>
                            <th>Номер группы</th>
                            <th>Изменить группу</th>
                            <th>Изменить номер группы</th>

                        </tr>
                        @foreach($groups as $group)
                            <form method="POST" action="{{ route('group.edit', $group->id) }}">
                                @csrf

                                <tr>
                                    <td>
                                        {{ $group -> name_group}}
                                    </td>
                                    <td>
                                        {{ $group -> number }}
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="name_group" style="width: 100%; margin-top: 5px; height: 38px; padding: 6px 20px;">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="number" style="width: 100%; margin-top: 5px; height: 38px; padding: 6px 12px;">
                                    </td>
                                </tr>
                                <td>
                                    <form method="POST" action="{{route('group.update', $group->id)}}">

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
    </style>
@endpush
