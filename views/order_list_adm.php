<?php require_once '../templates/admin_head.php' ?>

<link rel="stylesheet" href="../css/admin_order.css">

<nav aria-label="breadcrumb" >
  <ol class="breadcrumb bg-white">
    <li class="breadcrumb-item"><a href="#">Начало</a></li>
    <li class="breadcrumb-item active" aria-current="page">Список заказов</li>
  </ol>
</nav>
<hr>
<div class="container">
  <h2>Список заказов</h2>
    <!-- Форма поиска заказов. По умолчанию выводит последний месяц.  -->
    <form method="POST" class="form-inline  mt-4 mb-4" action="/sort_date.php">
      <label for="dateFrom" class="mr-sm-2">Отобразить заказы с: </label>
      <input type="date" class="form-control mr-sm-2" id="dateFrom">
      <label for="dateTo" class="mr-sm-2">по: </label>
      <input type="date" class="form-control mr-sm-2" id="dateTo">
      <button type="submit" class="btn btn-primary">Показать</button>
  </form>
  <div class="table-responsive-md table-striped">
  <div class="row">
  <div class="col-sm-2">14.11.2018</div>
  <div class="col-sm-2">Заказ: 005632</div>
  <div class="col-sm-2 font-weight-bold text-success">Отгружен</div>
  <div class="col-sm-3">метод доставки: Курьером</div>
  <div class="col-sm-3  font-weight-bold">Общая сумма: 25600 руб.</div>
</div>
    <table class="table">
      <thead>
        <tr>
          <th>Артикул</th>
          <th>Фото</th>
          <th>Описание товара</th>
          <th>Размер</th>          
          <th>Кол-во</th>
          <th>Цена</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>24371</td>
          <td>Картинка</td>
          <td>Куртка кожанная мужская</td>
          <td>48</td>         
          <td>1</td>
          <td>12800 руб.</td>
        </tr>
        <tr>
          <td>00815</td>
          <td>Картинка</td>
          <td>Кеды серые</td>
          <td>41</td>
          <td>1</td>
          <td>2900 руб.</td>
        </tr>
        <tr>
          <td>00025</td>
          <td>Картинка</td>
          <td>Джинсы GAS</td>
          <td>32</td>
          <td>2</td>
          <td>9600 руб.</td> 
        </tr>
        <tr>
          <td>00125</td>
          <td>Картинка</td>
          <td>Услуга: "Доставка курьером"</td>
          <td>__</td>
          <td>1</td>
          <td>300 руб.</td>
        </tr>
      </tbody>
    </table>
  </div> <!--конец контейнера с таблицей -->
  <div class="cutting_line mb-3 pt-2"></div>
  <div class="table-responsive-md table-striped">
  <div class="row">
  <div class="col-sm-2">13.11.2018</div>
  <div class="col-sm-2">Заказ: 005620</div>
  <div class="col-sm-2 font-weight-bold text-danger">Отменен</div>
  <div class="col-sm-3">метод доставки: Курьером</div>
  <div class="col-sm-3  font-weight-bold">Общая стоимость: 25600 руб.</div>
</div>
    <table class="table">
      <thead>
        <tr>
          <th>Артикул</th>
          <th>Фото</th>
          <th>Описание товара</th>
          <th>Размер</th>          
          <th>Кол-во</th>
          <th>Цена</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>24371</td>
          <td>Картинка</td>
          <td>Куртка кожанная мужская</td>
          <td>48</td>         
          <td>1</td>
          <td>12800 руб.</td>
        </tr>
        <tr>
          <td>00815</td>
          <td>Картинка</td>
          <td>Кеды серые</td>
          <td>41</td>
          <td>1</td>
          <td>2900 руб.</td>
        </tr>
        <tr>
          <td>00025</td>
          <td>Картинка</td>
          <td>Джинсы GAS</td>
          <td>32</td>
          <td>2</td>
          <td>9600 руб.</td> 
        </tr>
        <tr>
          <td>00125</td>
          <td>Картинка</td>
          <td>Услуга: "Доставка курьером"</td>
          <td>__</td>
          <td>1</td>
          <td>300 руб.</td>
        </tr>
      </tbody>
    </table>
  </div> <!--конец контейнера с таблицей -->
  <div class="cutting_line mb-3 pt-2"></div>
  <div class="mt-3 pb-3">
    <!-- Форма поиска заказов по номеру.  -->
    <form method="POST" class="form-inline  mt-4 mb-4" action="#">
      <label for="orderId" class="mr-sm-2">Не нашли свой заказ, но знаете номер?</label>
      <input type="text" class="form-control mr-sm-2" placeholder="введите номер" id="orderId">
      <button type="submit" class="btn btn-primary">Найти заказ</button>
    </form>
  </div> 
</div>

<?php require_once '../templates/admin_foot.php' ?>