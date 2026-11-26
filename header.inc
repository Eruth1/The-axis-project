<?php
$page_title = $page_title ?? "Reel House";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if (!empty($page_desc)): ?>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
<?php endif; ?>
<title><?= htmlspecialchars($page_title) ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,800&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles/styles.css">
<?php if (!empty($page_css)): ?>
<style>
<?= $page_css ?>
</style>
<?php endif; ?>
</head>
<body<?= empty($body_class) ? "" : ' class="' . htmlspecialchars($body_class) . '"' ?>>
<input type="checkbox" id="dark" class="sr" aria-label="Dark mode">
<div class="progress" aria-hidden="true"></div>
