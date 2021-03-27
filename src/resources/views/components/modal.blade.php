<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title offset-md-1" id="myModalLabel">Оформить заказ </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>php
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
            <form enctype="multipart/form-data" action="{{route('submit-form')}}" method="post" class="offset-md-1" style="margin-top: 5px">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="secoundName" placeholder="Фамилия">
                    </div>
                    <div class="col-sm-5 offset-sm-1">
                        <input type="text" class="form-control" name="firstName" placeholder="Имя">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control col-sm-11" name="email" placeholder="Email">
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
                    <input type="file" class="form-control-file" name="fileName" id="exampleFormControlFile1">
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
                            <input type="text" class="form-control" name="height" placeholder="Высота">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="length" placeholder="Длина">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="width" placeholder="Ширина">
                        </div>
                    </div>
                    <!-- Выбор материала -->
                    <div class="form-check col-sm-3 offset-sm-1">
                        <div>
                            <input type="radio" class="form-check-input" name="matType" value="Plastik1"
                                   checked>
                            <label class="form-check-label">Пластик1</label>
                        </div>
                        <div>
                            <input type="radio" class="form-check-input" name="matType" value="Plastik2">
                            <label class="form-check-label">Пластик2</label>
                        </div>
                        <div>
                            <input type="radio" class="form-check-input" name="matType" value="Plastik3">
                            <label class="form-check-label">Пластик3</label>
                        </div>
                    </div>
                    <!-- Выбор типа работы-->
                    <div class="form-check col-sm-3 offset-sm-1">
                        <div>
                            <input type="radio" class="form-check-input" name="workType" value="Худож" checked>
                            <label class="form-check-label">Худож</label>
                        </div>
                        <div>
                            <input type="radio" class="form-check-input" name="workType" value="Инженер">
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
