<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        nav { margin-bottom: 25px; padding: 12px 15px; background-color: #f8f9fa; border-radius: 6px; border: 1px solid #e9ecef; }
        nav a { margin-right: 20px; text-decoration: none; color: #007bff; font-weight: bold; font-size: 16px; }
        nav a:hover { text-decoration: underline; color: #0056b3; }
        .card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; max-width: 400px; background-color: #fff; }
        p { margin: 8px 0; font-size: 15px; }
    </style>
</head>
<body>

    <nav>
        <a href="<?= site_url('/'); ?>">Tasks</a>
        <a href="<?= site_url('profile'); ?>">Profile</a>
    </nav>

    <h1>User Profile</h1>

    <?php if (!empty($user)): ?>
        <div class="card">
            <p><strong>ID:</strong> <?= esc($user['id']); ?></p>
            <p><strong>Username:</strong> <?= esc($user['username']); ?></p>
            <p><strong>Full Name:</strong> <?= esc($user['full_name']); ?></p>
            <p><strong>Email:</strong> <?= esc($user['email']); ?></p>
            <p><strong>Created At:</strong> <?= esc($user['created_at']); ?></p>
        </div>
    <?php else: ?>
        <p>No user profile found.</p>
    <?php endif; ?>

</body>
</html>