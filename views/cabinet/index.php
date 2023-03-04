<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабінет користувача</h3>
            
            <h4>Привіт, <?php echo $user['name'];?>!</h4>
            <ul>
               <p><li><a href="/cabinet/edit">Редактировать данные</a></li></p>
                

                <p><li><a href="/admin">Панель адміністратора</a></li></p>
            
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>