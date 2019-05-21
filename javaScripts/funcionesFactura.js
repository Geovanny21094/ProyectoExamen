obtenerFechaActual();
obtenerFechaAbonada();
agregarFila();
eliminarFila();
calculos();


function obtenerFechaActual(elemento){
	var fecha = new Date();
	var mes = fecha.getMonth()+1;
	elemento.value = fecha.getDate() + "/" + mes + "/" + fecha.getFullYear();
}


function obtenerFechaAbonada() {
    var numeroDias=0;
    var radios = document.getElementsByName('radioAbono');
        for (var i = 0; i < radios.length; i++){
            if (radios[i].checked) {
                // do whatever you want with the checked radio
                numeroDias = parseInt(radios[i].value);
                 // only one radio can be logically checked, don't check the rest
            break;
            }
        }

    var fechaAbonada= new Date();
    fechaAbonada.setDate(fechaAbonada.getDate() + numeroDias);
    var dia = fechaAbonada.getDate();
    var mes = fechaAbonada.getMonth() + 1;
    var anio = fechaAbonada.getFullYear();
    var formatoFecha = dia + "/" + mes + "/" + anio;
    document.getElementById('fechaAbono').value = formatoFecha;

}

function agregarFila() {

    var tableID="tablaDetalleFac";
    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;

    if(rowCount>1){
    
        var row = table.insertRow(rowCount);
       
        var cell1 = row.insertCell(0);
        var element1 = document.createElement('input');
        element1.type="text";
        element1.placeholder="Ingrese su producto";
        element1.style['width'] = '99%';
        cell1.appendChild(element1);
        
        var cell2 = row.insertCell(1);
        var element2 = document.createElement('input');
        element2.type="text";
        element2.setAttribute('name', 'precioUnitario');
        element2.style['width'] = '99%';
        cell2.appendChild(element2);

        var cell3 = row.insertCell(2);
        var element3 = document.createElement('input');
        element3.type="text";
        element3.setAttribute('name', 'cantidad');
        element3.style['width'] = '99%';
        cell3.appendChild(element3);

        var cell4 = row.insertCell(3);
        var element4 = document.createElement('input');
        element4.type="text";
        element4.setAttribute('name', 'precioTotal');
        element4.disabled="<true></true>";
        element4.style['width'] = '99%';
        cell4.appendChild(element4);

   
        row.insertCell(-2);
    }
}

function eliminarFila(){
    var tableID="tablaDetalleFac";
    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;

    if(rowCount>3){        
        table.deleteRow(-1); 
    }
}

function calculos(){

    var formulario = document.facturass;
    var itemsPrecio = formulario.precioUnitario;
    var itemsCantidad = formulario.cantidad;
    var itemsPrecioTotal =  formulario.precioTotal;
//elementes con mismo nombre de un formulario forma un array de colecion
    for(var i = 0; i< itemsPrecio.length; i++){
        itemsPrecioTotal[i].value = itemsPrecio[i].value * itemsCantidad[i].value;
    }

    var itemSubtotal =document.getElementById('lblSubtotal');
    var arrayPrecioTotal = document.getElementsByName('precioTotal');
    var sumPrecioTotal = 0;

     for(var j = 0; j<arrayPrecioTotal.length; j++){
        if(parseFloat(arrayPrecioTotal[j].value)){
            sumPrecioTotal += parseFloat(arrayPrecioTotal[j].value);
        }
    }

    itemSubtotal.value = sumPrecioTotal;

    var impuesto =document.getElementById('lblIVA');
    var iva12 = sumPrecioTotal * 0.12;
    impuesto.value = iva12;

    var itemTotal=document.getElementById('lblTotal');
    var totaltotal = 0;
    totaltotal = iva12 + sumPrecioTotal;
    itemTotal.value = totaltotal;

  /* --------------------------------------------------

  var precioProducto = parseFloat(document.getElementById('precioUnitario').value);
  var cantidadProducto= parseInt(document.getElementById('cantidad').value);
  var precioToltalProducto =0 ;

   for (var i=0;i < document.getElementById('tablaDetalleFac').rows.length -1; i++){
        if(precioProducto != "" && precioProducto !=null){
precioToltalProducto = precioProducto * cantidadProducto;


   document.getElementById('precioTotal').value = precioToltalProducto;
        }

}
----------------------------------------------
*/

}
/*
function addColumn(tblId)
{
    var tblHeadObj = document.getElementById(tblId).tHead;
    for (var h=0; h<tblHeadObj.rows.length; h++) {
        var newTH = document.createElement('th');
        tblHeadObj.rows[h].appendChild(newTH);
        newTH.innerHTML = '[th] row:' + h + ', cell: ' + (tblHeadObj.rows[h].cells.length - 1)
    }

    var tblBodyObj = document.getElementById(tblId).tBodies[0];
    for (var i=0; i<tblBodyObj.rows.length; i++) {
        var newCell = tblBodyObj.rows[i].insertCell(-1);
        newCell.innerHTML = '[td] row:' + i + ', cell: ' + (tblBodyObj.rows[i].cells.length - 1)
    }
}
function deleteColumn(tblId)
{
    var allRows = document.getElementById(tblId).rows;
    for (var i=0; i<allRows.length; i++) {
        if (allRows[i].cells.length > 1) {
            allRows[i].deleteCell(-1);
        }
    }
}


*/


//-----Este codifo funciona ---------------------
/*
function addRow(){

var tbody = document.getElementById('tablaDetalleFac').getElementsByTagName("TBODY")[0];

var row = document.createElement("TR") //filas


var td1 = document.createElement("TD") //columnas

td1.appendChild(document.createTextNode(""))

var td2 = document.createElement("TD")

td2.appendChild (document.createTextNode(""))


var td3 = document.createElement("TD")

td3.appendChild (document.createTextNode(""))


var td4 = document.createElement("TD")

td3.appendChild (document.createTextNode(""))


row.appendChild(td1).innerHTML="<input type=text>";

row.appendChild(td2).innerHTML="<input type=text>";

row.appendChild(td3).innerHTML="<input type=text>";

row.appendChild(td4).innerHTML="<input type=text>";

tbody.appendChild(row);

}
*/

