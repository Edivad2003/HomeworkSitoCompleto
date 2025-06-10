<?php
session_start();
$utente = $_SESSION['utente'] ?? null;
?>

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="ReplicaPaginaEtnapolis.css">
  <link rel="stylesheet" type="text/css" href="VisualizzaOrari.css">
  <link rel="stylesheet" href="iscrizione.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="tooltip.css">
  <title>Replica pagina principale Etnapolis</title>
</head>

<body>
  <nav>
  <div class="nav-left">
    <em>APERTO --
    <a href="VisualizzaOrari.html">Guarda gli orari</a></em><br>
    <span class="indirizzo">+39 095 7867432 CONTRADA VALCORRENTE, 23 - BELPASSO CT</span>
  </div>
 <div class="login-container">
  <?php if ($utente): ?>
    <span style="color:white; margin-right:10px;">
      <?= htmlspecialchars($utente['nome']) . ' ' . htmlspecialchars($utente['cognome']) ?>
    </span>
    <form method="POST" action="logout.php" style="display:inline;">
      <button id="login-btn" type="submit">
        <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="Login" class="login-icona">
      </button>
    </form>
  <?php else: ?>
    <button id="login-btn" disabled title="Iscriviti per attivare il login">
      <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="Login" class="login-icona">
    </button>
  <?php endif; ?>
</div>
</nav>
  <header>
    <div class="flex-container">
      <img src="https://www.centroetnapolis.it/wp-content/uploads/2023/03/raggruppa_8.png">
      <button id="home-btn"> Home </button>
      <button id="negozi-btn">Negozi</button>
      <button>Evento</button>
      <button>Promo</button>
      <button>Gift-Card</button>
      <button>Trend</button>
      <button>Servizi</button>
      <button>Contatti</button>
      <button class="info-btn">Info</button>
    </div>
    <div class="flex-container2">
      <img src="https://www.centroetnapolis.it/wp-content/uploads/2023/03/ETNA_sito_HEADER-2048x1154.jpg">
    </div>
    <div class="flex-container3">
      <span>
        <strong>ISCRIVITI</strong> ALLA NOSTRA NEWSLETTER PER
        <strong>OFFERTE</strong> E <strong>BUONI ESLUSIVI!!</strong>
      </span>
      <a href="iscrizione.php">
        <button id="iscrizione-btn">ISCRIVITI</button>
      </a>
    </div>
    <section>
      <div class="flex-container4">
        <button id="negozi-btn-tooltip" class="col col-1"
          data-tooltip="Scopri, vedi e cerca tutti i negozi">NEGOZI</button>
        <button class="col col-2" data-tooltip="Scopri tutti gli eventi in programma">EVENTO</button>
        <button class="col col-3" data-tooltip="Scopri tutte le promozioni in negozio">PROMO</button>
      </div>
      <div class="flex-container4">
        <button  class="col col-4">TREND</button>
        <button class="col col-5" data-tooltip="Scopri tutti i ristoranti">RISTORANTI</button>
        <button class="info-btn col col-6" data-tooltip="Scopri come e dove trovarci e tutte le info">INFO</button>
      </div>
    </section>
  </header>

  <script src="api_negozi.php"></script>
  <script src="database.php"></script>
  <script src="index.php"></script>
  <script src="login.php"></script>
  <script src="utente_iscritto.php"></script>
  <script src="logout.php"></script>
  <script src="verifica_username.php"></script>
  <script src="script.js"></script>
  <script src="ReplicaPaginaEtnapolis.js"></script>
  <script src="login.js"></script>  
  <script src="utente.js"></script>
  <script src="api.js"></script>
</body>
</html>
