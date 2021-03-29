<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<style>
    th{padding-right: 0; transform: rotate(90deg); text-align: center}
</style>
<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>№ п\п</th>
        <th>ПІБ</th>
        <th>Співбесіда</th>
        <th>Дата народження</th>
        <th>Українська мова</th>
        <th>Українська література</th>
        <th>Зарубіжна література</th>
        <th>Іноземна мова (англійська)</th>
        <th>Історія України</th>
        <th>Всесвітня історія</th>
        <th>Правознавство</th>
        <th>Алгебра</th>
        <th>Геометрія</th>
        <th>Біологія</th>
        <th>Географія</th>
        <th>Фізика</th>
        <th>Хімія</th>
        <th>Інформатика</th>
        <th>Фізична культура</th>
        <th>Основи здоров’я</th>
        <th>Трудове навчання</th>
        <th>Музичне мистецтво</th>
        <th>Мистецтво</th>
        <th>Образотворче мистецтво</th>
        <th>Етика</th>
        <th>Природознавство</th>
        <th>Креслення</th>
        <th>Російська мова</th>
        <th>Німецька мова</th>
        <th>Французька мова</th>
        <th>Варіативна (1)</th>
        <th>Варіативна (2)</th>
        <th>Варіативна (3)</th>
        <th>Варіативна (4)</th>
        <th>Варіативна (5)</th>
        <th>Середній бал свідоцтва
            (без урахування іспитів)
        </th>
        <th>Алгебра</th>
        <th>Геометрія</th>
        <th>Фізика</th>
        <th>Середній бал
            точних дисциплін
        </th>
        <th>Сума балів (свідоцтво)</th>
        <th>Іноземна мова, що вивчалася</th>
        <th>Школа</th>
        <th>Оцінка за співбесіду</th>
        <th>Загальна кількість балів (загальний показник)</th>
        <th>Рейтинг</th>
        <th>Рішення комісії</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
    </tr>
    <tr>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>63</td>
        <td>2011/07/25</td>
        <td>$170,750</td>
    </tr>
    </tbody>
</table>

<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>