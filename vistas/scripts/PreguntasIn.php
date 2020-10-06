<?php
    include 'conexion.php';
    $query=mysqli_query($mysqli,"SELECT id_pregunta, pregunta FROM tbl_preguntas");
    
    if(isset($_POST['PreguntasIn']))
    {
        $estado=$_POST['PreguntasIn'];
        echo $estado;
    }
?>

<html>
    <head>
        <title>
            Ejemplo
        </title>
    </head>
    <body>
        <form action="PreguntasIn.php" method="post">
            <div style="width:900px; margin:0 auto; border:1px solid #FCC; padding: 10px;">
                <center>
                    <h3>¿De qué estado nos visitas?</h3>
                    <select name="PreguntasIn">
                    <?php 
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>
                            <option value="<?php echo $datos['pregunta']?>"> <?php echo $datos['pregunta']?> </option>
                    <?php
                        }
                    ?> 
                    </select>
                    <input type="submit" value="Contestar">
                </center>
            </div>
        </form>
    </body>
</html>