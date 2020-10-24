<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Calculadora dificil</title>
    <style type="text/css"> </style>
    <script type="text/javascript"> </script>
    <link rel="stylesheet" type="text/css" href="css.css" />
    <script src="calculadora.js" charset="utf-8"></script>
</head>
<body>
    <form name="calcform" method="post" action="">
    <fieldset>
        <legend>Calculadora</legend>

        <input type="text" name="visor" id="visor" />

        <table id="calc">
            <tr>
                <td><input type="button" name="num9" class="num" value="9" onclick="calcNum(9)" /></td>
                <td><input type="button" name="num8" class="num" value="8" onclick="calcNum(8)" /></td>
                <td><input type="button" name="num7" class="num" value="7" onclick="calcNum(7)" /></td>
                <td><input type="button" name="somar" class="oper" value="+" onclick="calcParse('somar')" /></td>
            </tr>
            <tr>
                <td><input type="button" name="num6" class="num" value="6" onclick="calcNum(6)" /></td>
                <td><input type="button" name="num5" class="num" value="5" onclick="calcNum(5)" /></td>
                <td><input type="button" name="num4" class="num" value="4" onclick="calcNum(4)" /></td>
                <td><input type="button" name="subtrair" class="oper" value="-" onclick="calcParse('subtrair')" /></td>
            </tr>
            <tr>
                <td><input type="button" name="num3" class="num" value="3" onclick="calcNum(3)" /></td>
                <td><input type="button" name="num2" class="num" value="2" onclick="calcNum(2)" /></td>
                <td><input type="button" name="num1" class="num" value="1" onclick="calcNum(1)" /></td>
                <td><input type="button" name="multiplicar" class="oper" value="*" onclick="calcParse('multiplicar')" /></td>
            </tr>
            <tr>
                <td><input type="button" name="num0" class="num" value="0" onclick="calcNum(0)" /></td>
                <td><input type="button" name="igual" class="num" value="=" onclick="calcParse('resultado')" /></td>
                <td><input type="button" name="limpar" class="num" value="C" onclick="calcLimpar()" /></td>
                <td><input type="button" name="dividir" class="oper" value="/" onclick="calcParse('dividir')" /></td>
            </tr>
        </table>
    </fieldset>
    </form>
    </body>
</html>
