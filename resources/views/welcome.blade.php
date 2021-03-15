@extends('layouts.main')
@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://cdn.pixabay.com/photo/2014/04/02/17/01/logo-307673_1280.png" width="30" height="30">
        </a>
        <a class="navbar-brand" href="#">AUTOPATATO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="https://www.kindpng.com/picc/m/82-822881_home-icons-windows-house-icon-transparent-png-png.png" width="30" height="30" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Описание технологии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Продукция</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Обратная связь</a>
                </li>
            </ul>
            <a href="#" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#basicModal">
                Заказ
            </a>
        </div>
    </nav>
    <main class="card-body">
        <div class="text-center">
            Услуги печати
        </div>
    </main>
    <!-- Модальное окно-->
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Оформить заказ </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{route('submit-form')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  name="secoundName" placeholder="Фамилия">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  name="firstName"  placeholder="Имя">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"  name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Заполните текст заказа и выберите услуги:</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="text"  placeholder="Введите текст заказа">
                    </div>
                    <div class="form-group">
                        <label>Прикрепить файл</label>
                        <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  name="size" placeholder="Размеры">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="mat"  placeholder="Материал">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="workType"  placeholder="Тип работы">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="h"  placeholder="Высота">
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input" name="p1" >
                            <label class="form-check-label" >Пластик1</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input" name="workTypeH" >
                            <label class="form-check-label" >Худож</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  name="l" placeholder="Длина">
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input" name="p2" >
                            <label class="form-check-label" >Пластик2</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input" name="workTypeI" >
                            <label class="form-check-label" >Инженер</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="shirina" placeholder="Ширина">
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input" name="p3" >
                            <label class="form-check-label" >Пластик3</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Заказ</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
