<H1>Calculadora</H1>
<form action="clientep.php" method="get">
    Numero 1: <input type="text" name="a"><br> 
    Numero 2: <input type="text" name="b"><br>
    Operacion: <select name="action">
        <option value="suma">Sumar</option>
        <option value="multiplicacion">Multiplicar</option>
</select><br><br>
<input type ="submit" value="Calcular">
</form>


<?php
if (isset($_GET["action"]) && $_GET["action"] == "suma")
{
    $calculadora = file_get_contents(
        'http://localhost/practicas_progweb_unidad05/Calculadora2/servicio.php?action=suma&a='.$_GET["a"].'&b='.$_GET["b"]);
    $calculadora = json_decode($calculadora,true);
?>

<h1>SUMA</h1>
<table>
    <tr>
        <td>Primer numero : </td><td> <?php echo $calculadora["a"] ?></td>
    </tr>
    <tr>
        <td>Segundo numero : </td><td> <?php echo $calculadora["b"] ?></td>
    </tr>
    <tr>
        <td>Total : </td><td><h3> <?php echo $calculadora["total"] ?></h3></td>
    </tr>
    </table>
    <?php
}

if (isset($_GET["action"]) && $_GET["action"] == "multiplicacion")
{
    $calculadora = file_get_contents(
        'http://localhost/practicas_progweb_unidad05/Calculadora2/servicio.php?action=suma&a='.$_GET["a"].'&b='.$_GET["b"]);
    $calculadora = json_decode($calculadora,true);
?>

<h1>MULTIPLICACI0N</h1>
<table>
    <tr>
        <td>Primer numero : </td><td> <?php echo $calculadora["a"] ?></td>
    </tr>
    <tr>
        <td>Segundo numero : </td><td> <?php echo $calculadora["b"] ?></td>
    </tr>
    <tr>
        <td>Total : </td><td><h3> <?php echo $calculadora["total"] ?></h3></td>
    </tr>
    </table>
    <?php
}

?>