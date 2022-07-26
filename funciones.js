addEventListener("DOMContentLoaded", obtenerDatos);

// funcion para llamar los datos cada cierto tiempo
function obtenerDatos(){
    let id = [];
    let valores = [];
    
    fetch("./leer.php")
    .then(respuesta => respuesta.json())
    .then(resp => {
        id = resp.id.split(",").reverse();
        valores = resp.valores.split(",").map(valor => parseInt(valor)).reverse();
        // asignar valores a la chartist
        let data = {labels: id, series: [ valores ]};
        let options = {width: 700, height: 500 };
        new Chartist.Line('.ct-chart', data, options);
    });

      

    setTimeout(obtenerDatos, 5000);
}


