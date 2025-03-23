<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
    <title>Document</title>
</head>

<body>
    <?php include "complementos/menú.php"; ?>
    <div class="container">
        <h2 class="titulo">Calculadora de la figura triángulo isósceles</h2>
        <div class="grid_2_2">
            <div class="sección_izquierda_2_2">
                <div class="container">
                    <form id="pointForm">
                        <div class="mb-3">
                            <label for="xValue" class="form-label">Valor de base</label>
                            <input type="number" id="xValue" name="xValue" step="any" value="4" min="0" required class="form-control" placeholder="Valor 1">
                        </div>
                        <div class="mb-3">
                            <label for="yValue" class="form-label">Valor de altura</label>
                            <input type="number" id="yValue" name="yValue" step="any" value="5" min="0" required class="form-control" placeholder="Valor 2">
                        </div>
                        <div class="botones">
                            <button type="submit" class="btn btn-success">Calcular</button>
                            <button type="submit" class="btn btn-danger" onclick="borrardatos();">Borrar</button>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Resultado</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" aria-label="Disabled input example" disabled></textarea>
                            <a class="btn btn-secondary" onclick="enviardatospagina ('procedimiento.php', 'x','xValue','y','yValue');">Procedimiento</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="sección_derecha_2_2">
                <figure class="figure">
                    <img src="img/triángulo.jpeg" class="figure-img img-fluid rounded img" alt="...">
                </figure>
            </div>
            <div class="sección_botones">
                <div>
                    <a class="btn btn-secondary" onclick="enviardatospagina ('figura2d.php', 'x','xValue','y','yValue');">Gráfico 2D</a>
                </div>
            </div>
        </div>
        <script>
            //Para hacer las operaciones de perímetro y área
            document.getElementById("pointForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Evitar que la página recargue

                // Obtener valores del formulario
                const xValue = parseInt(document.getElementById("xValue").value);
                const yValue = parseInt(document.getElementById("yValue").value);
                //Operación perímetro
                const peri = (Math.sqrt(((xValue / 2) ** 2) + (yValue ** 2)) * 2) + xValue;

                const area = (xValue * yValue) / 2;
                document.getElementById("exampleFormControlTextarea1").textContent = 'Perímetro: ' + peri + '\nÁrea: ' + area + '';
            });

            function borrardatos() {
                document.getElementById("xValue").value = '';
                document.getElementById("yValue").value = '';
                document.getElementById("exampleFormControlTextarea1").textContent = '';
            }
        </script>
</body>

</html>
