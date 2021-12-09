var abrirpp2 = document.getElementById('openpopup2'),
    overlay2 = document.getElementById('overlay2'),
    popup2 = document.getElementById('popup2'),
    cerrar2 = document.getElementById('cerrar2');


    abrirpp2.addEventListener('click', function(){
        overlay2.classList.add('active');
        popup2.classList.add('active');
    })
    cerrar2.addEventListener('click', function(){
        overlay2.classList.remove('active');
    })