<template>
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Оформить заказ </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="/submit" method="post">
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  placeholder="Фамилия">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  placeholder="Имя">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"  placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Заполните текст заказа и выберите услуги:</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Введите текст заказа">
                    </div>
                    <div class="form-group">
                        <label>Прикрепить файл</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  placeholder="Размеры">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  placeholder="Материал">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  placeholder="Тип работы">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  placeholder="Размеры">
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" >Пластик1</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" >Худож</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  placeholder="Размеры">
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" >Пластик2</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" >Инженер</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  placeholder="Размеры">
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" >Пластик3</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Заказ</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    import { mdbBtn } from 'mdbvue';

    export default {
        components: {
            mdbBtn
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
