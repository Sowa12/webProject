@extends('layouts.main')
@section('content')
    <!-- Главная страница-->
    <img src="/images/1.png" class="img-fluid">

    <div class="container">
        <!--Панель навигации-->
        <nav class="col-sm-12 navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="#">
                <img src="https://cdn.pixabay.com/photo/2014/04/02/17/01/logo-307673_1280.png" width="30" height="30">
            </a>
            <a class="navbar-brand" href="#">AUTOPATATO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img
                    src="https://www.flaticon.com/svg/vstatic/svg/1946/1946488.svg?token=exp=1616146227~hmac=6671fefce2d473a472feadf9211071fb"
                    width="30" height="30" alt="">
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
        <!-- Тело главной страницы-->
        <main class="card-body">
            <div class="col-sm-12 panel-element mt-5 mb-5">
                <div class="mt-5 mb-5 pt-3 pb-3">
                    Услуги 3D моделирования и печати
                </div>
            </div>
            <div class="col-sm-12 rounded content-menu mt-5">
                <div class="text-center row mt-5 mb-5 pt-3 pb-5 justify-content-center">
                    <div class="align-content-center col-sm-12">
                        <h1 class="mb-2">Технология FDM печати</h1>
                    </div>
                    <div class="align-content-center col-sm-12">
                        <p>Послойное наплавнение пластиков и композитов, описание тех.процесса</p>
                    </div>
                    <div class="align-content-center col-sm-10">
                        <p>Бла бла бла описание тех процессаБла бла бла описание тех процессаБла бла бла описание тех
                            процессаБла бла бла описание тех процессаБла бла бла описание тех процессаБла бла бла
                            описание тех процессаБла бла бла описание тех процессаБла бла бла описание тех процессаБла
                            бла бла описание тех процессаБла бла бла описание тех процессаБла бла бла описание тех
                            процессаБла бла бла описание тех процессаБла бла бла описание тех процессаБла бла бла
                            описание тех процессаБла бла бла описание тех процессаБла бла бла описание тех процессаБла
                            бла бла описание тех процессаБла бла бла описание тех процесса</p>
                    </div>
                    <div class="align-content-center col-sm-4">
                        <img src="../images/2.png">
                    </div>
                    <div class="align-content-center col-sm-4">
                        <img src="../images/3.png">
                    </div>
                    <div class="align-content-center col-sm-4">
                        <img src="../images/4.png">
                    </div>
                </div>
                <div class="text-center row grey-color-fantastyk mt-5 pt-3 pb-5 justify-content-center">
                    <div class="align-content-center col-sm-12">
                        <h1 class="mb-2 mt-2">ЗАКАЗАТЬ УСЛУГИ</h1>
                    </div>
                    <div class="align-content-center col-sm-10">
                        <p>Описание заказа услуг бла бла бла Описание заказа услуг бла бла бла Описание заказа услуг бла
                            бла бла Описание заказа услуг бла бла бла Описание заказа услуг бла бла блаОписание заказа
                            услуг бла бла блаОписание заказа услуг бла бла бла</p>
                    </div>
                    <div class="align-content-center col-sm-4">
                        <img src="../images/5.png">
                    </div>
                    <div class="align-content-center col-sm-4">
                        <img src="../images/6.png">
                    </div>
                    <div class="align-content-center col-sm-4">
                        <img src="../images/7.png">
                    </div>
                </div>
                <div class="text-center row pt-3 pb-5 justify-content-center">
                    <div class="align-content-center col-sm-12">
                        <h1 class="mb-2 mt-2">Продукция</h1>
                    </div>
                    <div class="align-content-center col-sm-10">
                        <p>ОПИСАНИЕ продукции и компаний бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла
                            бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла
                            бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла
                            бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла
                            бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла
                            бла бла бла бла</p>
                    </div>
                    <div class="align-content-center col-sm-3">
                        <img src="../images/8.png">
                    </div>
                    <div class="align-content-center col-sm-3">
                        <img src="../images/9.png">
                    </div>
                    <div class="align-content-center col-sm-3">
                        <img src="../images/10.png">
                    </div>
                    <div class="align-content-center col-sm-3">
                        <img src="../images/11.png">
                    </div>
                    <div class="align-content-center col-sm-3">
                        <img src="../images/12.png">
                    </div>
                    <div class="align-content-center col-sm-3">
                        <img src="../images/13.png">
                    </div>
                    <div class="align-content-center col-sm-3">
                        <img src="../images/14.png">
                    </div>
                    <div class="align-content-center col-sm-3">
                        <img src="../images/15.png">
                    </div>
                </div>
                <section class="container grey-color-fantastyk mt-5 pt-3 pb-5 text-center">
                    <div class="row grey-color-fantastyk offset-1">
                        <!-- Контактная форма -->
                        <form class="col-5">
                            <h2>Контактная форма</h2>
                            @csrf
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="name" placeholder="Имя" required>
                                </div>
                                <div class="form-group col-sm-5 offset-1">
                                    <input type="text" class="form-control" name="phone" placeholder="Телефон" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <textarea name="message" class="form-control" rows="5" placeholder="Введите сообщение"
                                      required></textarea>
                            </div>
                            <button type="submit" id="form-submit" class="btn btn-primary">Отправить</button>
                        </form>
                        <div class="text-center col-5 offset-1">
                            <h2>Контакты</h2>
                            <div class="text-left">
                                <p> ООО «AutoPatato»
                                <p> 648400, г. Сургут,
                                <p> ул. Пушкина д.Колотушкина
                                <p> Директор: Директорский Директор Директорович
                                <p> E: fedorchuckvlad@gmail.com
                                <p> T: +7(912)513-22-86
                                <p> www.autopatato.com/print
                                    Автоматизация тех. процессов
                                <p> www.autopatato.com
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <!-- Модальное окно-->
    @include('components.modal')
@endsection
