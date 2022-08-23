@extends('layouts.app')

@section('title-block')Страница контактов@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Форма обратной связи</h4>
                <form action="./mail.php" method="post">
                    <div class="form-group col-md-4">
                        <label for="name">Ваше имя:</label>
                        <input type="name" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email1">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Номер телефона:</label>
                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone">
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label for="message">Сообщение:</label>
                        <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Отправить сообщение</button>
                </form>
            </div>
        </div>
    </div>
@endsection
