<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель адміністратора</a></li>
                    <li><a href="/admin/order">Управління замовленнями</a></li>
                    <li class="active">Видалити замовленнями</li>
                </ol>
            </div>


            <h4>Видалити замовлення #<?php echo $id; ?></h4>


            <p>Ви дійсно бажаєти видалити це замовлення?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

