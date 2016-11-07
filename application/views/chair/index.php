<?php require_once(ROOT . '/application/template/header.php'); ?>


<table>
    <tr>
        <td>Назва</td>
    </tr>

    <?php foreach ($chairList as $chairItem) : ?>
        <tr>
            <td><a href="/chair/<?php echo $chairItem['id']; ?>"><?php echo $chairItem['name']; ?></a></td>
        </tr>

    <?php endforeach; ?>

    <tr>
        <td><a href="/chair/create/">Создать запись</a></td>
    </tr>

</table>

<?php require_once(ROOT . '/application/template/footer.php'); ?>


