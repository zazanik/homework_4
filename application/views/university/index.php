<?php require_once(ROOT . '/application/template/header.php'); ?>


<table>
    <tr>
        <td>Назва</td>
        <td>Місто</td>
        <td>Сайт</td>
    </tr>

    <?php foreach ($universitiesList as $universitiesItem) : ?>
    <tr>
        <td><?php echo $universitiesItem['name']; ?></td>
        <td><?php echo $universitiesItem['city']; ?></td>
        <td><?php echo $universitiesItem['link']; ?></td>
        <td>edit</td>
        <td>delete</td>
    </tr>

    <?php endforeach; ?>
    
</table>

<?php require_once(ROOT . '/application/template/footer.php'); ?>
    

