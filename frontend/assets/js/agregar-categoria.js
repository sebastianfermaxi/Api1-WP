
//Suma categorias del input
async function agregarCat(cat_val){

    const new_cat = document.createElement('th');
    new_cat.innerHTML= `
    <th scope="row"> ${cat_val} </th>
    `;

    fetch('backend/class/categoria_controller.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          tipo: 'categoria', // Indicar que es un producto
          nombre: cat_val,
        })
        }).then(res=>{
        location.reload();        
       }).catch(error => {
        console.error('Error:', error);
       });
    
}

//Formulario agregar categoría
document.addEventListener('DOMContentLoaded',()=>{

    const formulario_cat = document.getElementById('form-cat');
    formulario_cat.addEventListener('submit', (e)=>{

        e.preventDefault();

        const cat_val = document.getElementById('name-cat').value;

        if(cat_val){
        document.getElementById('name-cat').value = null;

        agregarCat(cat_val);
            
        document.getElementById('noti_cat').innerHTML= "Agregado";
        setTimeout(() => {
            document.getElementById('noti_cat').innerHTML="";
        }, 1500);
        }else{
            console.log('categoria no creada');
            document.getElementById('noti_cat').innerHTML= "El campo no puede estar vacio";
            setTimeout(() => {
                document.getElementById('noti_cat').innerHTML="";
            }, 1500);
            
        }
        }
        
    )
    
  
})
