<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Tasks</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .status-pending { color: orange; font-weight: bold; }
        .status-completed { color: green; font-weight: bold; }
        nav { margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; }
    </style>
</head>
<body>

    <nav>
        <a href="<?= base_url('/'); ?>">Home (Today's Tasks)</a>
        <a href="<?= base_url('/tasks'); ?>">All Tasks</a>
    </nav>

    <h1>All Tasks (Ordered by Date)</h1>

    <?php if (!empty($tasks)): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Task Date</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['id']); ?></td>
                        <td><?= esc($task['title']); ?></td>
                        <td class="status-<?= strtolower(esc($task['status'])); ?>">
                            <?= esc(ucfirst($task['status'])); ?>
                        </td>
                        <td><?= esc($task['task_date']); ?></td>
                        <td><?= esc($task['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No tasks found.</p>
    <?php endif; ?>

</body>
</html>