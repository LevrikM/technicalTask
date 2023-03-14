<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Оберіть дію</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#login-form" class="btn btn-primary btn-block" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="login-form">Авторизація</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#registration-form" class="btn btn-success btn-block" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="registration-form">Реєстрація</a>
                        </div>
                    </div>
                    <div class="collapse mt-3" id="login-form">
                        <form>
                            <input type="text" class="form-control" id="controller" name="controller" value="Cabinet" hidden>
                            <input type="text" class="form-control" id="action" name="action" value=""hidden>
                            <div class="form-group">
                                <label for="login-login">Ім'я користувача</label>
                                <input type="text" class="form-control" id="login-login" name="login-login" placeholder="Введіть ім'я користувача" required>
                            </div>
                            <div class="form-group">
                                <label for="login-password">Пароль</label>
                                <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Введіть пароль" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Авторизуватись</button>
                        </form>
                    </div>
                    <div class="collapse mt-3" id="registration-form">
                        <form>
                            <input type="text" class="form-control" id="controller" name="controller" value="Cabinet" hidden>
                            <input type="text" class="form-control" id="action" name="action" value=""hidden>
                            <div class="form-group">
                                <label for="registration-username">Логін користувача</label>
                                <input type="text" class="form-control" id="registration-login" name="registration-login" placeholder="Введіть логін користувача" required>
                            </div>
                            <div class="form-group">
                                <label for="registration-name">Ім'я користувача</label>
                                <input type="text" class="form-control" id="registration-name" name="registration-name" placeholder="Введіть ім'я користувача" required>
                            </div>
                            <div class="form-group">
                                <label for="registration-email">Email адреса</label>
                                <input type="email" class="form-control" id="registration-email" name="registration-email" placeholder="Введіть email адресу" required>
                            </div>
                            <div class="form-group">
                                <label for="registration-phone">Номер телефону</label>
                                <input type="text" class="form-control" id="registration-phone" name="registration-phone" placeholder="Введіть номер телефону" required>
                            </div>
                            <div class="form-group">
                                <label for="registration-password">Пароль</label>
                                <input type="password" class="form-control" id="registration-password" name="registration-password" placeholder="Введіть пароль" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-block mt-3">Зареєструватись</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
