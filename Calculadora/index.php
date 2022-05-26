<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <link href="style.css" rel="stylesheet"><link>
    <h1 align="center">Calculadora</h1>
    <div id="principal">
        <table align="center">
            <tr>
                <td id="pantalla" colspan="5"></td>
            </tr>
            <tr>
                <td><button onclick="picar(this)">7</button></td>
                <td><button onclick="picar(this)">8</button></td>
                <td><button onclick="picar(this)">9</button></td>
                <td><button onclick="picar(this)"><</button></td>
                <td><button onclick="picar(this)">DEL</button></td>
            </tr>
            <tr>
                <td><button onclick="picar(this)">4</button></td>
                <td><button onclick="picar(this)">5</button></td>
                <td><button onclick="picar(this)">6</button></td>
                <td><button onclick="picar(this)">/</button></td>
                <td><button onclick="picar(this)">*</button></td>
            </tr>
            <tr>
                <td><button onclick="picar(this)">1</button></td>
                <td><button onclick="picar(this)">2</button></td>
                <td><button onclick="picar(this)">3</button></td>
                <td><button onclick="picar(this)">+</button></td>
                <td><button onclick="picar(this)">-</button></td>
            </tr>
            <tr>
                <td><button onclick="picar(this)">.</button></td>
                <td><button onclick="picar(this)">0</button></td>
                <td colspan="3"><button id="igual" onclick="picar(this)">=</button></td>
            </tr>
        </table>
    </div>

    <script>
        const picar = (b) => {
            // console.log(b);
            let contenido = b.textContent;

            if (contenido != "=" && contenido != "DEL" && contenido != "<"){
                pantalla.innerHTML += contenido;
            }
            else if(contenido == "="){
                let res = eval(pantalla.textContent);
                pantalla.innerHTML = res;
            }
            else if(contenido == "<"){
                let res = pantalla.textContent.slice(0,-1);
                pantalla.innerHTML = res;
            }
            else{
                pantalla.innerHTML = "";
            }
        }

    </script>
</body>
</html>