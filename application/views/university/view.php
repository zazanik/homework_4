<?php require_once(ROOT . '/application/template/header.php'); ?>


<table>
    <tr>
        <td>Назва</td>
        <td>Місто</td>
        <td>Сайт</td>
    </tr>

    <tr>
        <td><a href="/university/<?php echo $universitiesItem['id'] ?>"><?php echo $universitiesItem['name']; ?></a></td>
        <td><?php echo $universitiesItem['city']; ?></td>
        <td><?php echo $universitiesItem['link']; ?></td>
        <td>edit</td>
        <td>delete</td>
    </tr>
</table>

<?php require_once(ROOT . '/application/template/footer.php'); ?>


