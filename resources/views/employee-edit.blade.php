@extends('layouts.page')

@section('page-content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Редактирование информации о сотруднике
            </h1>
        </div>
        <div class="col-12">
            @if(isset($employee))
                <span>Сотрудник не найден.</span>
            @else
                <form class="card" action="" method="post">
                    <div class="card-body p-6">
                        <div class="form-group">
                            <label class="form-label">Имя</label>
                            <input type="text" class="form-control" placeholder="Введите имя">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Отчество</label>
                            <input type="text" class="form-control" placeholder="Введите отчество">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Фамилия</label>
                            <input type="text" class="form-control" placeholder="Введите фамилию">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Пол</div>
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="sex" value="male" checked>
                                    <span class="custom-control-label">Мужской</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="sex" value="female">
                                    <span class="custom-control-label">Женский</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label">Отделы</div>
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                    <span class="custom-control-label">Option 1</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                    <span class="custom-control-label">Option 2</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled>
                                    <span class="custom-control-label">Option Disabled</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked disabled>
                                    <span class="custom-control-label">Option Disabled Checked</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-footer text-right">
                            <button type="submit" class="btn btn-primary ">Сохранить</button>
                        </div>
                    </div>
                </form>
            @endif

        </div>
    </div>
@endsection