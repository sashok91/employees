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
                <a href="/employees/create" class="btn btn-primary">
                    Добавить сотрудника
                </a>
            </div>

            @if(session('successMessage'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Сотрудник был удален.
                </div>
            @endif

            @if(session('errorMessage'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    При удалении сотрудника произошла ошибка.
                    <br>
                    {{ session('errorMessage') }}
                </div>
            @endif

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
                                    <div>
                                        <a href="/employees/{{$employee->id}}/edit" data-toggle="tooltip"
                                           title="Редактировать"
                                           class="btn btn-icon btn-primary">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <button data-toggle="modal" title="Удалить"
                                                data-target="#deleteemployee" data-employeeid="{{$employee->id}}"
                                                class="btn btn-icon btn-danger">
                                            <i class="fe fe-trash"></i>
                                        </button>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                {{ $employees->links() }}
            @endif

        </div>
    </div>

    <!-- Modal -->
    @component('components.delete-modal', ['id' => 'deleteemployee'])
        Вы действительно хотите удалить сотрудника?
    @endcomponent

@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#deleteemployee').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget);
                let employeeId = button.data('employeeid');
                let modal = $(this);
                modal.find('form')[0].action = '/employees/' + employeeId;
            });
        });
    </script>
@endsection