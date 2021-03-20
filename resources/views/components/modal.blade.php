<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Оформить заказ </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- Вывод ошибок при заполнение полей модального окна-->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container">
                <!--Панель навигации-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                    <a class="navbar-brand" href="#">
                        <img src="https://cdn.pixabay.com/photo/2014/04/02/17/01/logo-307673_1280.png"
                             width="30" height="30">
                    </a>
                    <a class="navbar-brand" href="#">AUTOPATATO</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img
                            src="https://www.kindpng.com/picc/m/82-822881_home-icons-windows-house-icon-transparent-png-png.png"
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
                        <!-- Кнопка вызова модального окна-->
                        <a href="#" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal"
                           data-target="#basicModal">
                            Заказ
                        </a>
                    </div>
                </nav>
                <!-- Тело главной страницы-->
                <main role="main" class="border">
                    <section class="jumbotron text-center" style="margin: 0px">
                        <div class="container">
                            <h1 class="jumbotron-heading">Услуги 3D печати и моделирования</h1>
                            <p class="lead text-muted">Something short and leading about the collection
                                below—its contents, the
                                creator, etc. Make it short and sweet, but not too short so folks don't
                                simply skip over it
                                entirely.
                            </p>
                        </div>
                    </section>
                    <section class="text-center">
                        <h1 class="jumbotron-heading">Технология FDM печати</h1>
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                        </div>
                    </section>
                    <section class="text-center" style="background: lightgrey">
                        <h1 class="jumbotron-heading">Заказать услуги</h1>
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="rounded-circle"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.
                                    Nullam id dolor id nibh
                                    ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac,
                                    vestibulum at eros.
                                    Praesent commodo cursus magna.</p>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded-circle"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                    lacinia odio sem nec
                                    elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus,
                                    tellus ac cursus
                                    commodo, tortor mauris condimentum nibh.</p>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded-circle"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas
                                    eget quam. Vestibulum
                                    id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus
                                    commodo, tortor mauris
                                    condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                            </div>
                        </div>
                    </section>
                    <section class="text-center">
                        <h1 class="jumbotron-heading">Продукция</h1>
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                            <div class="col-lg-4">
                                <img class="rounded"
                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                     alt="Generic placeholder image" width="140" height="140">
                                <h2>Heading</h2>
                            </div>
                        </div>
                    </section>
                    <!-- Контактная форма и Контакты-->
                    <section style="background: lightgrey" class="container text-center">
                        <div class="row offset-1">
                            <!-- Контактная форма -->
                            <form class="col-5" action="{{ route('contact-form') }}" method="post">
                                <h2>Контактная форма</h2>
                                @csrf
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Имя" required>
                                    </div>
                                    <div class="form-group col-sm-5 offset-1">
                                        <input type="text" class="form-control" name="phone"
                                               placeholder="Телефон" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" name="email"
                                               placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                            <textarea name="message" class="form-control" rows="5" placeholder="Введите сообщение"
                                      required></textarea>
                                </div>
                                <button type="submit" id="form-submit" class="btn btn-primary">Отправить
                                </button>
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
                </main>
                <!-- Модальное окно-->
                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog"
                     aria-labelledby="basicModal"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title offset-md-1" id="myModalLabel">Оформить заказ </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <!-- Вывод ошибок при заполнение полей модального окна-->
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif
                        <!-- Форма заказа модального окна-->
                            <form action="{{route('submit-form')}}" method="post" class="offset-md-1"
                                  style="margin-top: 5px">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="secoundName"
                                               placeholder="Фамилия">
                                    </div>
                                    <div class="col-sm-5 offset-sm-1">
                                        <input type="text" class="form-control" name="firstName"
                                               placeholder="Имя">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control col-sm-11" name="email"
                                           placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Заполните текст заказа и выберите услуги:</label>
                                </div>
                                <div class="form-group">
                            <textarea class="form-control col-sm-11" name="text"
                                      placeholder="Введите текст заказа"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Прикрепить файл</label>
                                    <input type="file" class="form-control-file" name="fileName"
                                           id="exampleFormControlFile1">
                                </div>
                                <!-- Заголовки информации о работе-->
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <label>Размеры (см)</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Материал</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Тип работы</label>
                                    </div>
                                </div>
                                <!-- Ввод размеров-->
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="height"
                                                   placeholder="Высота">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="length"
                                                   placeholder="Длина">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="width"
                                                   placeholder="Ширина">
                                        </div>
                                    </div>
                                    <!-- Выбор материала -->
                                    <div class="form-check col-sm-3 offset-sm-1">
                                        <div>
                                            <input type="radio" class="form-check-input" name="matType"
                                                   value="Plastik1"
                                                   checked>
                                            <label class="form-check-label">Пластик1</label>
                                        </div>
                                        <div>
                                            <input type="radio" class="form-check-input" name="matType"
                                                   value="Plastik2">
                                            <label class="form-check-label">Пластик2</label>
                                        </div>
                                        <div>
                                            <input type="radio" class="form-check-input" name="matType"
                                                   value="Plastik3">
                                            <label class="form-check-label">Пластик3</label>
                                        </div>
                                    </div>
                                    <!-- Выбор типа работы-->
                                    <div class="form-check col-sm-3 offset-sm-1">
                                        <div>
                                            <input type="radio" class="form-check-input" name="workType"
                                                   value="Худож" checked>
                                            <label class="form-check-label">Худож</label>
                                        </div>
                                        <div>
                                            <input type="radio" class="form-check-input" name="workType"
                                                   value="Инженер">
                                            <label class="form-check-label">Инженер</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group offset-8">
                                    <button type="submit" class="btn btn-primary">Заказ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
