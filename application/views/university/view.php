<?php require_once(ROOT . '/application/template/header.php'); ?>


<table>
    <tr>
        <td>Назва</td>
        <td>Місто</td>
        <td>Сайт</td>
    </tr>

    <?php foreach ($universitiesItem as $item) { ?>
        <tr>
            <td><a href="/university/<?= $item->id; ?>"><?php echo $item->name; ?></a></td>
            <td><?= $item->city; ?></td>
            <td><?= $item->link; ?></td>
            <td><a href="/university/edit/<?= $item->id ?>">edit</a></td>
            <td><a href="/university/delete/<?= $item->id ?>">delete</a></td>


        </tr>
    <?php } ?>
</table>

<h2 class="align-center">Кафедри університету</h2>
<table>
    <tr>
        <td>ID</td>
        <td>Кафедра</td>
        <td>Button</td>
    </tr>

    <?php foreach ($chairList as $item) { ?>
        <tr>
            <form action="#">
                <td><input type="text" value="<?= $item->id; ?>"></td>
                <td><a href="/chair/<?= $item->id ?>"> <?= $item->name; ?> </a></td>
                <td><input type="submit" value="remove"></td>
            </form>

        </tr>
    <?php } ?>
</table>

<h2 class="align-center">Кафедри які не входять до університету</h2>
<table>
    <tr>
        <td>ID</td>
        <td>Кафедра</td>
        <td>Button</td>
    </tr>

    <?php foreach ($chairItem as $item) { ?>
        <tr>
            <form action="/university/addchair/<?= $universitiesItem[0]->id; ?>/<?= $item->id; ?>" method="post">
                <td><input readonly type="text" name="id" value="<?= $item->id; ?>"></td>
                <td><a href="/chair/<?= $item->id ?>"> <?= $item->name; ?> </a></td>
                <td><input type="submit" value="add"></td>
            </form>
            
        </tr>
    <?php } ?>
</table>

<?php require_once(ROOT . '/application/template/footer.php'); ?>


