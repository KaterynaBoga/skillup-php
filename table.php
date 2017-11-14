<?php
# Путь к файлу
$file_name = "subscribers.txt";

# Считываем информацию по строкам
$data = file( $file_name );
?>
<table border="1">
    <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>E-mail</td>
    </tr>
    <?php
    # В цикле обходим массив данных
    foreach( $data as $value ):

        # Разбиваем строку по |
        $value = explode( "\t", $value );
        ?>

        <tr>
            <td><?=$value[0]?></td>
            <td><?=$value[1]?></td>
            <td><?=$value[2]?></td>
        </tr>
    <?php
    endforeach;
    ?>
</table>