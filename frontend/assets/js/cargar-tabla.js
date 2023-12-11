document.addEventListener('DOMContentLoaded', () => {
  cargar_categorias();
  });
  
async function cargar_categorias(){

fetch('backend/class/categoria_controller.php').then(async res=>{

  //categorias
  
  const tabla = await res.json(res);
  console.log(tabla)
  mostrarOpciones(tabla);

  tabla.forEach(e=>{

    const new_cat = document.createElement('th');
    new_cat.textContent = e.nombre;
    document.getElementById('tabla-cat').appendChild(new_cat);

    prod_body = document.createElement('td');
    prod_body.setAttribute('id',"categoria" + e.id);
    document.getElementById('tabla-prod').appendChild(prod_body);

  })
})



fetch('backend/class/producto_controller.php').then(async res=>{

  const tabla2 = await res.json(res);

  console.log(tabla2);


  tabla2.forEach(e=>{

    const filaCategoria = document.getElementById('categoria' + e.categoria_id);

    if (filaCategoria) {
    
    const new_prod = document.createElement('tr');
    new_prod.textContent = e.nombre;
    filaCategoria.appendChild(new_prod);

    } else {
     //console.error('No se encontró la fila para la categoría con ID:', e.categoria_id);
    }
    //document.getElementById('categoria'+ e.id).appendChild(new_prod);
      
  })
  


});

}

//Muestra las categorías en las opciones de agregar producto
function mostrarOpciones(tabla){

  tabla.forEach(e=>{

    const nombre_prod = document.createElement('option');
    nombre_prod.textContent=e.nombre;
    nombre_prod.setAttribute('value', e.id)
    document.getElementById("select-cat").appendChild(nombre_prod);
    
  });

}