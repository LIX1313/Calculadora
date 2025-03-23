<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <?php include "complementos/menú.php"; ?>
    <div class="container-fluid">
        <a href="index.php" class="btn btn-secondary">Volver</a>
        <br><br>
        <div class="grid_3_2">
            <div class="sección_izquierda_3_2">
                <h3>Fórmula área</h3>
                <figure class="figure">
                    <img src="img/Form_Área.png" class="figure-img img-fluid rounded img" alt="...">
                </figure>
                <label for="Procedimiento_A" class="form-label">Procedimiento</label>
                <textarea class="form-control" id="Procedimiento_A" rows="3" aria-label="Disabled input example" disabled></textarea>
            </div>
            <div class="sección_central_3_2">
                <h3>Figura</h3>
                <figure class="figure">
                    <img src="img/figura.png" class="figure-img img-fluid rounded img" alt="...">
                </figure>
            </div>
            <div class="sección_derecha_3_2">
                <h3>Fórmula perímetro</h3>
                <figure class="figure">
                    <img src="img/Form_Perímetro.png" class="figure-img img-fluid rounded img" alt="...">
                </figure>
                <label for="Procedimiento_P" class="form-label">Procedimiento</label>
                <textarea class="form-control" id="Procedimiento_P" rows="2" aria-label="Disabled input example" disabled></textarea>
            </div>
        </div>
    </div>
    <script>
        let urlParams = new URLSearchParams(window.location.search);
        let xValue = parseInt(urlParams.get('x'));
        let yValue = parseInt(urlParams.get('y'));
        //Área
        document.getElementById("Procedimiento_A").textContent = 'A= (' + xValue + ' * ' + yValue + ')/2 \nA= (' + xValue * yValue + ')/2 \nA= ' + (xValue * yValue) / 2 + ' (cm^2 ó m^2)';
        //Períemtro
        document.getElementById("Procedimiento_P").textContent = 'P= √((' + xValue + '/2)^2) + (' + yValue + '^2) \n'+
        'P= √((' + xValue/2 + ')^2) + (' + yValue + '^2)) \n'+
        'P= √' + (xValue/2)**2 + ' + ' + yValue**2 + ' \n'+
        'P= √' + (((xValue/2)**2) + (yValue**2)) +' \n'+
        'P= ' + Math.sqrt(((xValue / 2) ** 2) + (yValue ** 2)) +' * 2 \n'+
        'P= ' + (Math.sqrt(((xValue / 2) ** 2) + (yValue ** 2)) * 2) +' + '+xValue+' \n'+
        'P= ' + ((Math.sqrt(((xValue / 2) ** 2) + (yValue ** 2)) * 2)+ xValue) +' (cm ó m)';
    </script>
</body>

</html>