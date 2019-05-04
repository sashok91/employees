@extends('layouts.page')

@section('page-content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Редактирование информации о сотруднике
            </h1>
        </div>
        <div class="col-12">
            @if(!isset($employee))
                <span>Сотрудник не найден.</span>
            @else
                <employee-form
                        employee="{{$employee->toJson()}}"
                        departments="{{$departments->toJson()}}"
                        mode="update"
                ></employee-form>
            @endif

        </div>
    </div>
@endsection