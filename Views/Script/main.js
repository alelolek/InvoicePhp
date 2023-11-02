
  document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('#menu li');

    menuItems.forEach(function(item) {
      item.addEventListener('click', function() {
        // Eliminar 'active' de todos los elementos
        menuItems.forEach(function(item) {
          item.classList.remove('active');
        });

        // Agregar 'active' al elemento clicado
        this.classList.add('active');
      });
    });
  });


  
