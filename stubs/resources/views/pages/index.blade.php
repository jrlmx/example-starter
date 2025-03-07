<?php

use function Laravel\Folio\name;

name("welcome");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen">
    <div class="max-w-xl p-6">
        <h1 class="text-xl">Sourdough</h1>
        <p>
            A customizable installer for new Laravel projects.
        </p>
    </div>
</body>
</html>
