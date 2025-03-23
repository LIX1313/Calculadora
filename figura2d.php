<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.geogebra.org/apps/deployggb.js"></script>

    <title>Figura 2D</title>
</head>

<body>
    <?php include "complementos/menú.php"; ?>
    <div class="container-fluid">
        <a href="index.php" class="btn btn-secondary">Volver</a>
        <br><br>
        <div class="grid_2_2">
            <div class="sección_izquierda_2_2">
                <div allowfullscreen></div>
                <div id="ggb-element" src="https://www.geogebra.org/classic/cgfykqac?embed" class="grafico" allowfullscreen></div>
                <button type="button" class="btn btn-secondary" onclick="cambiarVistaGrafica();">Vista</button>
            </div>
            <div class="sección_derecha_2_2">
                <div class="container-fluid">
                    <h4>Cambiar color</h4>
                    <div class="mb-3">
                        <label for="rValue" class="form-label">Valor de r:</label>
                        <span id="MostrarValuer">0</span>
                    </div>
                    <div class="mb-3">
                        <label for="gValue" class="form-label">Valor de g:</label>
                        <span id="MostrarValueg">0</span>
                    </div>
                    <div class="mb-3">
                        <label for="bValue" class="form-label">Valor de b:</label>
                        <span id="MostrarValueb">0</span>
                    </div>
                    <div class="mb-3">
                        <label for="ValueColor">Elegir color:</label>
                        <input type="color" name="ValueColor" id="ValueColor" oninput="ActualizarValor()">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // Inicializar GeoGebra Applet
        var ggbApp = new GGBApplet({
            "material_id": "cgfykqac",
            "appName": "classic",
            "showToolbar": false,
            "showMenuBar": false,
            "width": 870,
            "height": 300,
            "enableShiftDragZoom": true,
            "appletOnLoad": ggbOnInit
        }, true);
        ggbApp.inject('ggb-element');


        function cambiarVistaGrafica() {
            ggbApplet.setCoordSystem(-20, 20, -10, 10); // Cambia a vista gráfica estándar
        }
        //Diferentes opciones de perspectiva
        function cambiarVistaGrafCasos(caso) {
            switch (caso) {
                case '20':
                    //x y y >20
                    ggbApplet.setCoordSystem(-40, 40, -30, 30);
                    console.log("1");
                    break;
                case '30':
                    //x y y >40
                    ggbApplet.setCoordSystem(-50, 50, -40, 40);
                    console.log("2");
                    break;
                case '40':
                    //x y y >40
                    ggbApplet.setCoordSystem(-60, 60, -50, 50);
                    console.log("3");
                    break;
                case '50':
                    //x y y >50
                    ggbApplet.setCoordSystem(-70, 70, -60, 60);
                    console.log("4");
                    break;
                case '100':
                    //x y y >100
                    ggbApplet.setCoordSystem(-120, 120, -110, 110);
                    console.log("5");
                    break;
                case '150':
                    //x y y >150
                    ggbApplet.setCoordSystem(-170, 170, -160, 160);
                    console.log("6");
                    break;
                case '200':
                    //x y y >200
                    ggbApplet.setCoordSystem(-220, 220, -210, 210);
                    console.log("7");
                    break;
            }
        }

        //document.getElementById("pointForm").addEventListener("submit", function(event) {
        //Cambiar tamaño y perspectiva
        function ggbOnInit() {
            let urlParams = new URLSearchParams(window.location.search);
            let xValue = parseInt(urlParams.get('x'));
            let yValue = parseInt(urlParams.get('y'));

            // Cambiar las coordenadas del punto en GeoGebra
            ggbApplet.setValue('X', xValue);
            ggbApplet.setValue('Y', yValue);

            //Para modificar el zoom según el valor ingresado
            if (xValue > 20 && xValue < 30) {
                cambiarVistaGrafCasos('20');
            } else if (xValue > 29 && xValue < 40) {
                cambiarVistaGrafCasos('30');
            }else if (xValue > 39 && xValue < 50) {
                cambiarVistaGrafCasos('40');
            }else if (xValue > 49 && xValue < 60) {
                cambiarVistaGrafCasos('50');
            }else if (xValue > 59 && xValue < 100) {
                cambiarVistaGrafCasos('100');
            }else if (xValue > 99 && xValue < 150) {
                cambiarVistaGrafCasos('150');
            }else if (xValue > 149 && xValue < 200) {
                cambiarVistaGrafCasos('200');
            }
            ActualizarValor();
        }

        //Mostrar el valor de un range y envíar el valor a geogebra para cambiar color
        function ActualizarValor() {
            var valuecolor = document.getElementById("ValueColor").value;
            // Convertir a decimal
            let valor = valuecolor.slice(1, 3);
            let decimalValuer = parseInt(valor, 16);
            // Convertir a decimal
            let valog = valuecolor.slice(3, 5);
            let decimalValueg = parseInt(valog, 16);
            // Convertir a decimal
            let valob = valuecolor.slice(5, 7);
            let decimalValueb = parseInt(valob, 16);
            document.getElementById("MostrarValuer").textContent = decimalValuer;
            document.getElementById("MostrarValueg").textContent = decimalValueg;
            document.getElementById("MostrarValueb").textContent = decimalValueb;
            console.log(valuecolor);

            ggbApplet.setColor('t1', decimalValuer, decimalValueg, decimalValueb); // Cambia el color a rojo (RGB)
        }
    </script>
</body>

</html>