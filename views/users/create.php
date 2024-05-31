<?php include __DIR__ . '/../partials/header.php' ?>
<h1>Create User</h1>
<form action="/users/store" method="POST">
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Create</button>
</form>