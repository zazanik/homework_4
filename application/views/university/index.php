<?php require_once(ROOT . '/application/template/header.php'); ?>


<table>
    <tr>
        <td>Назва</td>
        <td>Місто</td>
        <td>Сайт</td>
    </tr>

    <?php foreach ($universitiesList as $universitiesItem) : ?>
    <tr>
        <td><a href="/university/<?php echo $universitiesItem['id'] ?>"><?php echo $universitiesItem['name']; ?></a></td>
        <td><?php echo $universitiesItem['city']; ?></td>
        <td><?php echo $universitiesItem['link']; ?></td>
    </tr>

    <?php endforeach; ?>
    <tr>
        <td><a href="/university/create/">Создать запись</a></td>
    </tr>
</table>

<?php require_once(ROOT . '/application/template/footer.php'); ?>
    

