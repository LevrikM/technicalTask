<style>
    body {
        font-family: Arial, sans-serif;
    }

    .card {
        margin-bottom: 30px;
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: none;
    }

    .card-title {
        margin-bottom: 0;
    }

    .table thead th {
        border-top: none;
    }

    .table tbody td {
        vertical-align: middle;
    }

</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Ваш профіль: </h5>
                </div>
                {foreach $user as $item}
                    <div class="card-body">
                        <p>Логін: {$item["login"]}</p>
                        <p>Ім'я: {$item["name"]}</p>
                        <p>Email: {$item["email"]}</p>
                        <p>Телефон: {$item["phone"]}</p>
                        <p>Тип користувача: {$item["type"]}</p>
                    </div>
                {/foreach}
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Замовлення | Тестові</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Номер замовлення</th>
                            <th>Дата</th>
                            <th>Сума</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>12345</td>
                            <td>01.03.2023</td>
                            <td>1000 ₴</td>
                        </tr>
                        <tr>
                            <td>54321</td>
                            <td>02.03.2023</td>
                            <td>2000 ₴</td>
                        </tr>
                        <tr>
                            <td>98765</td>
                            <td>03.03.2023
                            <td>3000 ₴</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Подключаем jQuery и Popper.js для работы Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS3U6d" crossorigin="anonymous"></script>
<!-- Подключаем Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
