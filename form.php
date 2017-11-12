<?php
/**
 * @var array $user
 */
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Форма</title>
        <style>
            label {
                display: block;
                margin: 15px;

            }
            button {
                margin: 15px;
            }
            .error {
                color: red;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
    <?php foreach ($errors as $error) { ?>
        <p class="error"><?= $error ?></p>

    <?php } ?>

        <form action="index.php" method="post">Форма подписки
            <label>Имя <input name="first_name" value="<?= $user['first_name'] ?>"></label>
            <label>Фамилия <input name="last_name" value="<?= $user['last_name'] ?>"></label>
            <label>E-mail <input type="email" name="email" name="email" value="<?= $user['email'] ?>"></label>
            <button type="submit">Оформить подписку</button>
        </form>
    </body>
    </html>