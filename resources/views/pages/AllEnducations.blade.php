@extends('layouts.app')

@section('content')

    <h3 align="center" class="mt-5">Список предметов</h3>
    <div style="margin-top: 100px">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Название предмета</th>



            </tr>
            </thead>

            @foreach($enducations as $enducation)

                <tr>
                    <td>
                        {{ $enducation -> name_disciplins}}
                    </td>
                    <td>
                        <form method="POST" action="{{route('enducations.destroy' , $enducation->id )  }}">
                            @csrf()
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td>

                    <form method="POST" action="{{route('enducation.edit', $enducation->id)  }}">

                        @csrf()

                        <a href="{{route('enducation.edit', $enducation->id) }}" class="btn btn-secondary" > Изменить данные</a>
                    </form>

                    <a href="{{route('create_enducations') }}" class="btn btn-secondary"> Создать </a>
                </td>

            </tr>
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
    </style>
@endpush
