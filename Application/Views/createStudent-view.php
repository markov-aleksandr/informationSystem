<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Абітурієнти</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Додати нового абітурієнта</h2>
            <!-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
        </div>

        <div class="row g-3">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Пільги</span>
                    <!-- <span class="badge bg-secondary rounded-pill">3</span> -->
                </h4>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        АТО
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Інвалід
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Сирота
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Навіп сирота
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Під опікою
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        ЧС
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Переселенці
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Багатодітні
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Мати одиначка
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Малозабезпечені
                    </label>
                </div>
            </div>

            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Дані про абітурієнта</h4>
                <form class="needs-validation" novalidate method="post">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="username" class="form-label">Прізвище</label>
                            <div class="input-group has-validation">

                                <input type="text" class="form-control" id="username" required>
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Ім'я</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">По-батькові</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Професія</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Виберіть зі списку</option>
                                <option value="1">Професія</option>
                                <option value="2">Професія</option>
                                <option value="3">Професія<option>
                            </select>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Тип заяви</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Виберіть зі списку</option>
                                <option value="1">Попередня</option>
                                <option value="2">Вступ</option>
                                <option value="3">Зареєстровано<option>
                                <option value="4">Знято<option>
                            </select>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>



                        <div class="col-12">
                            <label for="email" class="form-label">Номер телефону<span class="text-muted"></span></label>
                            <input type="number" class="form-control" id="email">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Номер телефону батьків<span class="text-muted"></span></label>
                            <input type="number" class="form-control" id="email">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="address" class="form-label">Школа</label>
                            <!-- <input type="select" class="form-control" id="address" placeholder="1234 Main St" required> -->
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Виберіть зі списку</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3<option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="address" class="form-label">Школа район</label>
                            <input type="select" class="form-control" id="address" required>


                        </div>

                        <div class="col-6">
                            <label for="address" class="form-label">Кількість класів</label>
                            <!-- <input type="select" class="form-control" id="address" placeholder="1234 Main St" required> -->
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Виберіть зі списку</option>
                                <option value="1">9</option>
                                <option value="2">11</option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="address" class="form-label">Рік закінчення</label>
                            <input type="date" class="form-control" id="address" required>

                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>



                        <div class="col-12">
                            <label for="address2" class="form-label">Адреса реєстрації</label>
                            <input type="text" class="form-control" id="address2">
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Адреса проживання</label>
                            <input type="text" class="form-control" id="address2">
                        </div>

                        <div class="col-12">
                            <label for="gurtoj" class="form-label">Потреба у гуртожитку</label>
                            <div class="form-check">
                                <input id="gurtoj" name="gurtoj" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="gurtoj">Потрібно</label>
                            </div>
                            <div class="form-check">
                                <input id="gurtoj" name="gurtoj" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="gurtoj">Не потрібно</label>
                            </div>
                        </div>


                        <hr class="my-4">

                        <h4 class="mb-3">Документи та інші атрибути</h4>

                        <div class="my-3 col-6">
                            <h5>Наявність свідоцтва/атестата:</h5>
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Так</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Ні</label>
                            </div>
                        </div>

                        <div class="my-3 col-6">
                            <h5>Форма №13</h5>
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Так</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Ні</label>
                            </div>
                        </div>

                        <div class="my-3 col-6">
                            <h5>Папір</h5>
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Так</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Ні</label>
                            </div>
                        </div>

                        <div class="my-3 col-6">
                            <h5>Медична довідка</h5>
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Так</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Ні</label>
                            </div>
                        </div>

                        <div class="my-3">
                            <h5>Тип документу, що посвідчує особу:</h5>
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">ID-карта</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Паспорт</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">Свідоцтво</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">Відсутній</label>
                            </div>
                        </div>



                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Паспорт (серія, №)</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <!-- <small class="text-muted">Full name as displayed on card</small> -->
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">ІПН</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>


                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Додати</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 </p>
    </footer>
</div>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="form-validation.js"></script>
</body>
</html>
<?php var_dump($_POST); ?>
