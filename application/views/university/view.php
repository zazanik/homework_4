<?php require_once(ROOT . '/application/template/header.php'); ?>


<table>
    <tr>
        <td>Назва</td>
        <td>Місто</td>
        <td>Сайт</td>
    </tr>

    <tr>
        <?php foreach ($universitiesItem as $item) {

        } ?>
        <td><a href="/university/<?php echo $item->id; ?>"><?php echo $item->name; ?></a></td>
        <td><?php echo $item->city; ?></td>
        <td><?php echo $item->link; ?></td>
        <td><a href="/university/edit/<?php echo $item->id ?>">edit</a></td>
        <td><a href="/university/delete/<?php echo $item->id ?>">delete</a></td>
    </tr>
</table>

<?php require_once(ROOT . '/application/template/footer.php'); ?>


