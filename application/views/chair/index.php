<?php require_once(ROOT . '/application/template/header.php'); ?>


<table>
    <tr>
        <td>ID</td>
        <td>Назва</td>
    </tr>

    <?php foreach ($chairList as $chairItem) : ?>
        <tr>
            <td><?php echo $chairItem->id; ?></td>
            <td><a href="/chair/<?php echo $chairItem->id; ?>"><?php echo $chairItem->name; ?></a></td>
        </tr>

    <?php endforeach; ?>

    <tr>
        <td><a href="/chair/new/">Создать запись</a></td>
    </tr>

</table>

<?php require_once(ROOT . '/application/template/footer.php'); ?>


