@extends('layouts.page')

@section('page-content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Редактирование информации об отделе
            </h1>
        </div>
        <div class="col-12">
            @if(!isset($department))
                <span>Отдел не найден.</span>
            @else
                <department-form
                        department="{{$department->toJson()}}"
                        mode="update"
                ></department-form>
            @endif

        </div>
    </div>
@endsection