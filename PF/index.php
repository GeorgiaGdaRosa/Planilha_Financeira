
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilha Financeira</title>
<!-- CSS -->
<link rel="stylesheet" href="style.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- BootStrap Icons -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
  <div class="main-content">
    <h1>Planilhas</h1>
    <table id="tabelha_planilhas"></table>
  </div>
  <div class= "menu"> 
    <nav class="menu_lateral" id="menu">
    <div class="btn_menu_lateral">
      <button class="btn_menu" onclick="toggleMenu()" hidden>
      <i class="bi bi-list"></i>
    </div>

    <div class="menu_conteudo">
      <ul class="menu_topo">
        <li class="item_planilhas">
          <a href="#">
            <span class="txt_link">Planilhas Criadas:</span>
          </a>
        </li>
      </ul>

      <ul class="menu_base">
        <li class="item_menu">
          <a href="#">
            <span class="icon"><i class="bi bi-person-circle"></i></span>
            <span class="txt_link">Perfil</span>
          </a>
        </li>
        <li class="item_menu">
          <a href="#">
            <span class="icon"><i class="bi bi-gear"></i></span>
            <span class="txt_link">Configurações</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>


  

    
    
</body>

<!-- Seu script personalizado -->
<script src="js/planilhas.js"></script>
</html>