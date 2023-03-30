<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>
    <h1>Listado de Peliculas</h1>
    <a href="/pelicula/new">Crear</a>
    <table>
      <tr>
        <th>
          Id
        </th>
        <th>
          Titulo
        </th>
        <th>
          Descripcion
        </th>
        <th>
          Opciones
        </th>
      </tr>
      <?php      
        foreach ($peliculas as $key => $pelicula) {
          echo '<tr>';
            echo '<td>'.$pelicula['id'].'</td>';
            echo '<td>'.$pelicula['title'].'</td>';
            echo '<td>'.$pelicula['description'].'</td>';
            echo '<td>
                    <a href="/pelicula/show/'.$pelicula['id'].'">Mostrar</a>
                    <a href="/pelicula/edit/'.$pelicula['id'].'">Editar</a>
                    <form action="/pelicula/delete/'.$pelicula['id'].'" method="post">
                      <button>Eliminar</button>
                    </form>
                  </td>';
          echo '</tr>';
        }
      ?> 
    </table>     
</body>
</html>