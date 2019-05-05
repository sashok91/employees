@extends('layouts.page')

@section('page-content')
    <div class="container">
        <div class="page-header mb-0">
            <h1 class="page-title">
                Список отделов
            </h1>
        </div>
        <div class="col-12">
            <div class="mb-2 text-right">
                <a href="/departments/create" class="btn btn-primary">
                    Добавить отдел
                </a>
            </div>

            @if(session('successMessage'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Отдел был удален.
                </div>
            @endif

            @if(session('errorMessage'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <strong>При удалении отдела произошла ошибка. Попробуйте повторить попытку позже. Учитывайте, что нельзя удалять отделы, в которых есть сотрудники.</strong>
                    <br>
                    {{ session('errorMessage') }}
                </div>
            @endif

            @if(!(isset($departments) && count($departments)))
                <span>В списке нет ни одного отдела.</span>
            @else
                <div class="card">
                    <table class="table card-table table-vcenter">
                        <tr>
                            <th>Название отдела</th>
                            <th class="d-none d-md-table-cell">Количество сотрудников</th>
                            <th class="d-none d-md-table-cell">Максимальная з/п</th>
                        </tr>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{ $department->name }}</td>
                                <td class="d-none d-md-table-cell">{{ $department->employees_count }}</td>
                                <td class="d-none d-md-table-cell">{{ $department->max_salary  }}</td>

                                <td class="text-right">
                                    <form action="/departments/{{$department->id}}" method="POST"
                                          onsubmit="return confirm('Вы хотите удалить отдел?');">
                                        @csrf
                                        @method('DELETE')
                                        <a href="/departments/{{$department->id}}/edit" data-toggle="tooltip"
                                           title="Редактировать"
                                           class="btn btn-icon btn-primary">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <button type="submit" data-toggle="tooltip" title="Удалить"
                                                class="btn btn-icon btn-danger">
                                            <i class="fe fe-trash"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>

                        @endforeach
                    </table>
                </div>
                {{ $departments->links() }}
            @endif

        </div>
    </div>
@endsection