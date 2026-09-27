<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Today's Tasks</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        nav { margin-bottom: 25px; padding: 12px 15px; background-color: #f8f9fa; border-radius: 6px; border: 1px solid #e9ecef; }
        nav a { margin-right: 20px; text-decoration: none; color: #007bff; font-weight: bold; font-size: 16px; }
        nav a:hover { text-decoration: underline; color: #0056b3; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        
        /* Status styling */
        .status-pending { color: orange; font-weight: bold; }
        .status-completed { color: green; font-weight: bold; }
        .status-in_progress, .status-in-progress { color: #17a2b8; font-weight: bold; }
    </style>
</head>
<body>

    <nav>
        <a href="<?= site_url('/'); ?>">Tasks</a>
        <a href="<?= site_url('profile'); ?>">Profile</a>
    </nav>

    <h1>Welcome! Today's Tasks (<?= $today; ?>)</h1>

    <?php if (!empty($tasks)): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Task Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['id']); ?></td>
                        <td><?= esc($task['title']); ?></td>
                        <td class="status-<?= strtolower(esc($task['status'])); ?>">
                            <?= esc(ucwords(str_replace('_', ' ', $task['status']))); ?>
                        </td>
                        <td><?= esc($task['task_date']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No tasks scheduled for today.</p>
    <?php endif; ?>

</body>
</html>