<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h1>Listado de Categorias</h1>
    <a href="/categoria/new">Crear</a>
    <table>
      <tr>
        <th>
          Id
        </th>
        <th>
          Titulo
        </th>
        <th>
          Opciones
        </th>
      </tr>
      <?php      
        foreach ($categorias as $key => $categoria) {
          echo '<tr>';
            echo '<td>'.$categoria['id'].'</td>';
            echo '<td>'.$categoria['title'].'</td>';
            echo '<td>
                    <a href="/categoria/show/'.$categoria['id'].'">Mostrar</a>
                    <a href="/categoria/edit/'.$categoria['id'].'">Editar</a>
                    <form action="/categoria/delete/'.$categoria['id'].'" method="post">
                      <button>Eliminar</button>
                    </form>
                  </td>';
          echo '</tr>';
        }
      ?> 
    </table>     
</body>
</html>