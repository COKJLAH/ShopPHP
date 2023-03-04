<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель адміністратора</a></li>
                    <li><a href="/admin/product">Управління товарами</a></li>
                    <li class="active">Редагування товарів</li>
                </ol>
            </div>


            <h4>Додати новий товар</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Назва товару</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Артикул</p>
                        <input type="text" name="code" placeholder="" value="">

                        <p>Вартість, Грн</p>
                        <input type="text" name="price" placeholder="" value="">

                        <p>Категорія</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Лікарня що продає товар</p>
                        <input type="text" name="brand" placeholder="" value="">

                        <p>Зображення товара</p>
                        <input type="file" name="image" placeholder="" value="">

                        <p>Склад</p>
                        <textarea name="description"></textarea>
                        <p>Особливості щодо застосування</p>
                        <textarea name="description2"></textarea>
                        <p>Передозування</p>
                        <textarea name="description3"></textarea>
                        <p>Умови зберігання</p>
                        <textarea name="description4"></textarea>
                        <p>Адреса лікарні</p>
                        <textarea name="description5"></textarea>
                        <p>ОТермін придатності</p>
                        <textarea name="description6"></textarea>

                        <br/><br/>

                        <p>Наявність в аптеці</p>
                        <select name="availability">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <br/><br/>

                        <p>Новий товар</p>
                        <select name="is_new">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <br/><br/>

                        <p>Рекомендації</p>
                        <select name="is_recommended">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Відображати</option>
                            <option value="0">Скрити</option>
                        </select>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

