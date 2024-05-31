<?php include __DIR__ . '/../partials/header.php' ?>
    <h1>Edit User</h1>
    <form action="/users/update/<?php echo $user->id; ?>" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user->email); ?>">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Update</button>
    </form>
