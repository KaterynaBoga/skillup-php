<?php
/**
 * @var User $user
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
            }
        </style>
    </head>
    <body>
    <?php foreach ($errors as $error) { ?>
        <p class="error"><?= $error ?></p>

    <?php } ?>

        <form action="index.php" method="post">Форма подписки
            <label>Имя <input name="firstName" value="<?= $user->firstName ?>"></label>
            <label>Фамилия <input name="lastName" value="<?= $user->lastName ?>"></label>
            <label>E-mail <input type="email" name="email" name="email" value="<?= $user->email ?>"></label>
            <label>Phone <input name="phone" value="<?=$user->phone ?>"></label>
            <label>
                <input type="checkbox" name="confirm" value="1"
                    <?= $user->confirm ? 'checked' : '' ?>>
                Я согласен с правилами сайта
            </label>
            <button type="submit">Зарегистрировать</button>
        </form>
    </body>
    </html>