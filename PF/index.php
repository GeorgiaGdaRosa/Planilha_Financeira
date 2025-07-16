
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilha Financeira</title>
<!-- CSS -->
<link rel="stylesheet" href="style.css">

<!-- BootStrap Icons -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<!-- DataTables CSS com Bootstrap -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

<!-- DataTables Responsive CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

</head>
<body>
  <div class="main-content">
    <h1>Planilhas</h1>
    <table id="tab_planilhas">
    <thead>
    <tr>
      <th>Planilha</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

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

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<!-- DataTables Responsive JS -->
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

    
</body>

<!-- Seu script personalizado -->
<script src="js/planilhas.js"></script>
<script src="connection.php"></script>
</html>