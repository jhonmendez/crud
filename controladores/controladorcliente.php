<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado Backend</title>
</head>
<body>

    <h1>Resultado Backend</h1>

    <table>
        
        <tr>

            <th>Identificación</th>
            <th>Nombres</th>
            <th>Apellidos</th>

        </tr>

        <tr>
            
            <td><?php 

                print $_REQUEST['identificacion'];
            ?></td>
            <td><?php 

                 print $_REQUEST['nombres'];
          ?></td>
            <td><?php 

                print $_REQUEST['apellidos'];?>
                    
                </td>

        </tr>


    </table>

</body>
</html>





