@extends('layouts.app')

@section('content')

    <div class="container">
        <h3 align="center" class="mt-5">Список групп</h3>
        <div class = "row">
            <div class="col-md-12">

            </div>

        </div>
    </div>

    <div style="margin-top: 100px">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Название группы</th>
                <th scope="col">Номер группы</th>



            </tr>
            </thead>

            @foreach($groups as $group)

                    <tr>
                        <td>
                            {{ $group -> name_group}}
                        </td>
                        <td>
                            {{ $group -> number }}
                        </td>
                        <td>
                            <form method="POST" action="{{route('group.edit', $group->id)  }}">

                                @csrf()

                                <a href="{{route('group.edit', $group->id) }}" class="btn btn-secondary" > Изменить </a>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{route('group.destroy' , $group->id )  }}">
                                @csrf()
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
            @endforeach
        </table>

        <a href="{{route('create.groups') }}" class="btn btn-secondary"> Создать </a>
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
