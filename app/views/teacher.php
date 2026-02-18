<h2>Teacher List</h2>
<a href="index.php?action=create">Add New</a>
<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Course</th>
    <th>Department</th>
</tr>

<?php foreach($students as $s): ?> 
<tr>
    <td><?= $s['id'] ?></td>
    <td><?= $s['name'] ?></td>
    <td><?= $s['email'] ?></td>
    <td><?= $s['phone'] ?></td>
    <td><?= $s['course'] ?></td>
    <td><?= $s['department'] ?></td>
    <td>
        <a href="index.php?action=edit&id=<?= $s['id'] ?>">Edit</a>
    </td>
    <td>
        <a href="index.php?action=delete&id=<?= $s['id'] ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</table>