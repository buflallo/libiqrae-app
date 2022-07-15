<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
    <!--plugins-->
    <link href="assets/css/style-log.css" rel="stylesheet">
    <title>IQRAE - gestion</title>
</head>

<body>  
<div class="main">
      
      <div class="container b-container is-txl is-z200" id="b-container">
        <form class="form" id="b-form" method="POST" action="./admin/login">>
          <h2 class="form_title title">Admin Panel</h2>
          @csrf
          <input class="form__input" name="email" type="text" placeholder="Email">
          <input class="form__input" type="password" name="password" placeholder="Password"><a class="form__link">Password oublier?</a>
          <button class="form__button button submit">Connecter</button>
        </form>
      </div>
      
    <div class="switch is-txr">
        <div class="switch__circle is-txr"></div>
        <div class="switch__circle switch__circle--t is-txr"></div>
        
        <div class="switch__container" id="switch-c2">
          <h2 class="switch__title title">Bienvenue</h2>
          <p class="switch__description description">Panel de gestion de Lib Iqrae</p>
          
        </div>
      </div></div>
</body>
</html>