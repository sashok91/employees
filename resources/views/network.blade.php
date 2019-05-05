@extends('layouts.page')

@section('page-content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Сетка
            </h1>
        </div>
        <div class="col-12">
            <network-table
                    departments-json="{{$departments->toJson()}}"
                    employees-json="{{$employees->getCollection()->toJson()}}"
            ></network-table>
            {{$employees->links()}}

        </div>
    </div>
@endsection