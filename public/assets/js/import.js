
let btnImport = document.querySelector('#btnImport');

btnImport.addEventListener('click', importar);


function importar() {
    let importFile = document.getElementById('importFile');
    let nameTable = document.getElementById('selectTable').value;
    let file = importFile.files[0];

    
    let data = new FormData();
    data.append("importFile", file);
    data.append("nameTable", nameTable);

    axios.post(routes.ImportData, data)
        .then(function (response) {
            alert('La importación se realizó correctamente');
            console.log(response.data);
        })
        .catch(function (error) {
            alert('Error al importar, intentelo de nuevo');
            console.log(error.response.data);
        });


}