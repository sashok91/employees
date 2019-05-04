@extends('layouts.page')

@section('page-content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Новый сотрудник
            </h1>
        </div>
        <div class="col-12">
            <employee-form
                    departments="{{$departments->toJson()}}"
                    mode="create"
            ></employee-form>

        </div>
    </div>
@endsection