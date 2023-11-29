<?php
    include __DIR__ . '/../model/db.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="">
        <h1>Hotels</h1>
        <form action="index.php" class="d-flex" method="GET">
            <select name="available" class="p-2" aria-label="Search">
                <option value="available">Available</option>
                <option value="notavailable">Not Available</option>
            </select>
            <button class="btn btn-primary">Search</button>
        </form>
    </header>