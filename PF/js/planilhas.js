 function toggleMenu() {
      document.getElementById('menu').classList.toggle('menu_aberto');
    }

    function carrega_planilhas(){
      $.ajax({
          type: 'POST',
          dataType: 'JSON',
          url:'',
          data: {
              'acao':'carrega_planilhas'
          }
      })
    }
