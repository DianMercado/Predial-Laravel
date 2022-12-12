<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Municipio de Sombrerete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJ1SAwiGgFAW/dAiS6JXm" crossorigin=" anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {
            margin: 3cm 2cm 2cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 28cm;
            background-color: #E2DCD5;
            color: black;
            text-align: center;
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2.5cm;
            background-color:#E2DCD5 ;
            color: black;
            text-align: center;
            line-height: 35px;
          
        }
      
    </style>
</head>
<body>
    <div class="container">
      <header>
        <h3 class="text-center"></h3>
        <h3 class="text-center"></h3>
        <h3 class="text-center">Municipio de Sombrerete</h3>
        <h4 class="text-center">Impuesto Predial</h4>
        <h5 class="text-center">Tesorería Municipal</h5>
        <h5 class="text-rigth">Recibo de pago: 461522</h5>
      </header>
    </div>
    <h5 class="text-rigth"></h5>
    <h5 class="text-rigth"></h5>
    <h5 class="text-rigth"></h5>
    <h5 class="text-rigth"></h5>
    <h5 class="text-rigth"></h5>
    
    <table ALIGN="Center" BORDER="0" BORDERCOLOR="White">
 
                <TH>Fecha de emisión: 08 de Noviembre 2022</TH>
                <TH style="color:#E2DCD5">-------------------------------------------</TH>
                <TH>  </TH>
                <TH>  </TH>
                <TH>  </TH>
                <TH>  </TH>
                <TH>Año: 2022 </TH>
             
    </table>
    
    <div class="card-body">
      <table class="table">
        <thead >
            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido materno</th>
            <th scope="col">Clave catastral</th>
            <th scope="col">Predio</th>
          
       </thead>
       <tbody>
    @foreach($contribuyentes as $contribuyentes)
          
            <td>{{$contribuyentes->nombre}}</td>
            <td>{{$contribuyentes->apellido_paterno}}</td>
            <td>{{$contribuyentes->apellido_materno}}</td>
            <td>{{$contribuyentes->clave_catastral}}</td>
            <td>Urbano</td>
      
    @endforeach
  </tbody>
</table>
</div>
   <table class="table">
   <thead>
          <th scope="col">Cuenta</th>
          <th scope="col">Ubicación</th>
          <th scope="col">Zona</th>
          <th scope="col">Terreno (m2)</th>
          <th scope="col">Superficie</th>

      </thead>
  <tbody>
      <td>00057J</td>
      <td>Camino a tocayos</td>
      <td>4</td>
      <td>292.90</td>
      <td>0.0</td>

  </tbody>
  </table>
</div>
  <div class="container">
                <h5 class="text-right">Entero: $584.59</h5>
                <h5 class="text-right">Bonificación: $87.69</h5>
                <h5 class="text-right">Total: $496.90</h5>
  </div>
</div>

<footer>
        <h6 class="text-center">Municipio de Sombrerete</h6>
        <h6 class="text-center">Administración 2021-2024</h6>
        <h6 class="text-center">Palacio Municipal S/N   Centro   C.P. 99100   Tel. 935-00-88   Sombrerete, Zac.</h6>
</footer>
        </div>
    </div>
   
