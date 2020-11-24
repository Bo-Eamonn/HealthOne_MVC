<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthOne</title>
    <link rel="stylesheet" href="/HealthOne/frontend/static/css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/healthone/frontend/static/js/search.js"></script>
</head>

<body>
    <header>
        <div>
            <img src="/healthone/frontend/static/images/logo.png" alt="Logo" id="logo">
            <div class="search-container">
                <form class="search-box">
                    <input type="text" placeholder="Zoeken" title="Zoek naar patienten" name="search" autocomplete="off">
                    <button type="submit"><i title="zoeken..." class="fa fa-search"></i></button>
                </form>
                <div class="result"></div>
            </div>
            <div>
                <button id="logout" title="uitloggen"
                    onclick="location.href='/HealthOne/backend/logout.php'">Uitloggen</button>
            </div>
        </div>
    </header>