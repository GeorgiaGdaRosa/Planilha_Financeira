
  var tab_planilhas; 

  function toggleMenu() {
    document.getElementById('menu').classList.toggle('menu_aberto');
  }

  carrega_planilhas();

  function carrega_planilhas() {
  if (tab_planilhas) {
    tab_planilhas.destroy();
  }

  tab_planilhas = $('#tab_planilhas').DataTable({
    pageLength: 10,
    responsive: true,
    processing: true,
    ajax: {
      type: 'POST',
      dataType: 'json',
      url: '/bll/bll_planilhas.php',
      data: { acao: 'carrega_planilhas' }
    },
    columns: [
      { data: 'nome' },
      { data: 'acao',
        render: function(data, type, row) {
          return `
            <button onclick="exportar('${data}', 'csv')">CSV</button>
            <button onclick="exportar('${data}', 'excel')">Excel</button>
            <button onclick="exportar('${data}', 'pdf')">PDF</button>
          `;
        }
      }
    ],
    dom: 'lfrtip'
  });
}

