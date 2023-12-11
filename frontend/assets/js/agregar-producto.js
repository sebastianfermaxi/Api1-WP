
function agregarProd(categoria_id, prod_nombre){

    const objeto = {
        nombre: prod_nombre,
        categoria_id: categoria_id
    }
    console.log(objeto);

    fetch('backend/class/producto_controller.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(objeto)
        }).then(res=>{
            console.log(res);
          location.reload();        
       }).catch(error => {
        console.error('Error:', error);
       });
  }

  document.addEventListener('DOMContentLoaded',()=>{

    formularioProd = document.getElementById('formulario-producto');

    const selectCat = document.getElementById('select-cat');
    const nombreProd = document.getElementById('nombre-prod');

    formularioProd.addEventListener('click', (e)=>{

        if (e.target.id === 'agregar_producto') {
        e.preventDefault();
    
        const prodNombre = nombreProd.value;
        const idSeleccionado = parseInt( selectCat.value, 10);

        if (idSeleccionado > 0) {
            console.log(selectCat.value)
            agregarProd(idSeleccionado, prodNombre);
          } else {
            console.error('No se seleccionó ningún ID de categoría');
          }
        
    }})
    
  
})
