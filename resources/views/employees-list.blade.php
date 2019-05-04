@extends('layouts.page')

@section('page-content')
    <div class="container">
        <div class="page-header mb-0">
            <h1 class="page-title">
                Список сотрудников
            </h1>
        </div>
        <div class="col-12">
            <div class="mb-2 text-right">
                <a href="/employees/create" data-toggle="tooltip"
                   title="Добавить сотрудника"
                   class="btn btn-icon btn-primary">
                    <i class="fe fe-plus"></i>
                </a>
            </div>

            @if(!(isset($employees) && count($employees)))
                <span>В списке нет ни одного сотрудника.</span>
            @else
                <div class="card">
                    <table class="table card-table table-vcenter">
                        <tr>
                            <th class="d-none d-md-table-cell">Имя</th>
                            <th class="d-none d-md-table-cell">Отчество</th>
                            <th>Фамилия</th>
                            <th class="d-none d-md-table-cell">Пол</th>
                            <th>З/п</th>
                            <th>Отдел</th>
                        </tr>
                        @foreach($employees as $employee)
                            <tr>
                                <td class="d-none d-md-table-cell">{{ $employee->first_name }}</td>
                                <td class="d-none d-md-table-cell">{{ $employee->middle_name }}</td>
                                <td>{{ $employee->last_name  }}</td>
                                <td class="d-none d-md-table-cell">
                                    @if($employee->sex === 'male')
                                        <span>мужской</span>
                                    @elseif($employee->sex === 'female')
                                        <span>женский</span>
                                    @endif
                                </td>
                                <td>{{ $employee->salary  }}</td>
                                <td>
                                    @foreach($employee->departments as $department)
                                        @if(!$loop->last)
                                            {{$department->name . ','}}
                                        @else
                                            {{$department->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td class="text-right">

                                    <form action="/employees/{{$employee->id}}" method="POST"
                                          onsubmit="return confirm('Вы хотите удалить сотрудника?');">
                                        @csrf
                                        @method('DELETE')
                                        <a href="/employees/{{$employee->id}}/edit" data-toggle="tooltip"
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
                {{ $employees->links() }}
            @endif

        </div>
    </div>
@endsection