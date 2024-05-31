<?php include __DIR__ . '/../partials/header.php' ?>
    <h1>Users</h1>
    <a href="/users/create">Create New User</a>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?php echo htmlspecialchars($user->email); ?>
                <a href="/users/edit/<?php echo $user->id; ?>">Edit</a>
                <form action="/users/destroy/<?php echo $user->id; ?>" method="POST" style="display:inline;">
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

