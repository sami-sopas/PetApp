<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        table{
            font-size: x-small;
        }
        tr td{
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }
        .information {
            background-color: #faf6f2;"
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>
</head>
<body>

  <table width="100%">
    <tr>
        <td valign="top"><img src="https://i.imgur.com/TuLoqht.png"/></td>
        <td align="right">
            <h3>PET APP: REPORTE GENERAL</h3>
            <pre>
                Adoptable
                Blvd. Marcelino García Barragán #1421, esq Calzada Olímpica, C.P. 44430
                Guadalajara, Jalisco, México.
                52 (33) 1378 5900.
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><strong>Administrador:</strong> {{ Auth()->user()->name }} </td>
        <td><strong>Correo:</strong> {{ Auth()->user()->email }} </td>
    </tr>

  </table>

  <br/>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>#</th>
        <th>General</th>
        <th>Dato</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td> Promedio de Usuarios Registrados a la Semana</td>
        <td align="right"> {{ $Usuarios_Prom }} </td>
      </tr>
      <tr>
          <th scope="row">2</th>
          <td>Publicaciones Hechas</td>
          <td align="right"> {{ $PostPDF }} </td>
      </tr>
      <tr>
          <th scope="row">3</th>
          <td>Mascotas Adoptadas</td>
          <td align="right"> {{ $AdoptPDF }} </td>
      </tr>
      <tr>
          <th scope="row">4</th>
          <td>Total de Usuarios</td>
          <td align="right"> {{ $UsersPDF }} </td>
      </tr>
    </tbody>
  </table>

  <br><br>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>#</th>
        <th>Status de Mascotas</th>
        <th>Dato</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>En Adopción</td>
        <td align="right"> {{ $AdoptPDF }} </td>
      </tr>
      <tr>
          <th scope="row">2</th>
          <td>En Proceso</td>
          <td align="right"> {{ $AdoptedPDF }}</td>
      </tr>
      <tr>
          <th scope="row">3</th>
          <td>Adoptado</td>
          <td align="right"> {{ $ProcessPDF }}</td>
      </tr>
    </tbody>
  </table>

  <div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - Todos los derechos reservados.
            </td>
            <td align="right" style="width: 50%; font-weight: bold;">
                ADOPTABLE.
            </td>
        </tr>

    </table>
</div>

</body>
</html>