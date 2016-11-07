<?php require_once(ROOT . '/application/template/header.php'); ?>


<table>
    <tr>
        <td>Назва</td>
    </tr>

    <tr>
        <td><a href="/chair/<?php echo $resultItem['id'] ?>"><?php echo $resultItem['name']; ?></a></td>
        <td><a href="/chair/edit/<?php echo $resultItem['id'] ?>">edit</a></td>
        <td><a href="/chair/delete/<?php echo $resultItem['id'] ?>">delete</a></td>
    </tr>
</table>

<?php require_once(ROOT . '/application/template/footer.php'); ?>


