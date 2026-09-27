<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Developer</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        nav { margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; }
        .info-box { border: 1px solid #ddd; padding: 20px; border-radius: 8px; max-width: 500px; background-color: #f9f9f9; }
    </style>
</head>
<body>

    <nav>
        <a href="<?= base_url('/'); ?>">Home</a>
        <a href="<?= base_url('/tasks'); ?>">All Tasks</a>
        <a href="<?= base_url('/profile'); ?>">Profile</a>
        <a href="<?= base_url('/about'); ?>">About</a>
    </nav>

    <h1>About the Developer</h1>

    <div class="info-box">
        <p><strong>Developer:</strong> Janina Charisse Torre</p>
        <p><strong>Program:</strong> BS Information Technology (Specialization in Cybersecurity)</p>
        <p><strong>Institution:</strong> FEU Diliman</p>
        <p><strong>System Description:</strong> Task and User Management Web Application built using CodeIgniter 4.</p>
    </div>

</body>
</html>