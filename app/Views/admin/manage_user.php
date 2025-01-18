<h1>Manage Users</h1>
<table>
    <tr>
        <th>Username</th>
        <th>Role</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['username'] ?></td>
        <td><?= $user['role'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
