
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
                    onclick="location.href='/healthone_mvc/logout.php'">Uitloggen</button>
            </div>
        </div>
    </header>