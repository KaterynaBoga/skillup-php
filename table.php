<?php
# Путь к файлу
$file_name = "users.txt";

# Считываем информацию по строкам
$data = file( $file_name );
?>
<table border="1">
    <?php
    # В цикле обходим массив данных
    foreach( $data as $value ):

        # Разбиваем строку по |
        $value = explode( '|', $value );
        ?>
        <tr>
            <td><?=$value[0]?></td>
            <td><?=$value[1]?></td>
            <td><?=$value[2]?></td>
            <td><?=$value[3]?></td>
            <td><?=$value[4]?></td>
        </tr>
    <?php
    endforeach;
    ?>
</table>