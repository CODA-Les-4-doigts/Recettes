<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
<h1>Search</h1>
<form method="GET" action="">
    <input type="text" name="q" value="<?= htmlspecialchars($query) ?>" placeholder="Search...">
    <button type="submit">Search</button>
</form>

<?php if (!empty($results)): ?>
    <h2>Results</h2>
    <ul>
        <?php foreach ($results as $result): ?>
            <li><?= htmlspecialchars($result['title']) ?></li>
        <?php endforeach; ?>
    </ul>
<?php elseif ($query): ?>
    <p>No results found for "<?= htmlspecialchars($query) ?>"</p>
<?php endif; ?>
</body>
</html>
