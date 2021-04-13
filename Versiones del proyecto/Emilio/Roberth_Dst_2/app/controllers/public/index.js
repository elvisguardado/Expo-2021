//Metodo que agrega un controlador de eventos cuando el contenido del documento ha sido cargado.
document.addEventListener('DOMContentLoaded', function () {

    //Se inicializa el menu-responsive del navbar.
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

    //Se inicializan los Dropdown.
    let sidenav = document.querySelectorAll('.sidenav');
    let instancia_sidenav = M.Sidenav.init(sidenav, {});
    let dropdowns = document.querySelectorAll('.dropdown-trigger');
    let instancia_dropwdown = M.Dropdown.init(dropdowns, {
        hover: false,
        coverTrigger: false
    });
});