@extends('layouts.page')

@section('page-content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Новый отдел
            </h1>
        </div>
        <div class="col-12">
            <department-form mode="create"></department-form>
        </div>
    </div>
@endsection