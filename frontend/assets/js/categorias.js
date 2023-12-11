

const categorias = ['PCs Armadas', 'PCs Outlet', 'Monitores', 'Periféricos'];


const categorias2 = [
    {
        nombre_cat : 'PCs Armadas',
        id: 'PC_0',
        productos : [
            'PC 1',
            'PC 2',
            'PC 3' 
        ]
    },
    {
        nombre_cat : 'Periféricos',
        id: 'PC_1',
        productos : [
            'Mouse',
            'Teclado'
        ]
    },
    {
        nombre_cat : 'Monitores',
        id: 'PC_2',
        productos : [
            'Monitor 22"',
            'Monitor 24"',
            'Monitor 27"',

        ]
    },
    {
        nombre_cat : 'PCs Outlet',
        id: 'PC_3',
        productos : [
            'PC 1',
            'PC 2',
            'PC 3' 
        ]
    }
]

localStorage.setItem('categorias', JSON.stringify(categorias));