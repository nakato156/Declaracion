<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>¿Quieres jugar?</title>
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1" style="color:antiquewhite">Acierta :D</span>
        </div>
    </nav>
    <div class="enunciado" id="enunciado">
        <h3>Adivina la serie</h3>
        <i class='bx bxs-file readme' data-bs-toggle="modal" data-bs-target="#infoModal"></i>
    </div>
    <section class="acertijos">
        <div class="container primero" style="display: none;">
            <div class="row" id="serie1">
                <div class="col"><input class="form-control form-control-sm" type="number"></div>
                <div class="col"><input class="form-control form-control-sm" type="number"></div>
                <div class="col"><input class="form-control form-control-sm" type="number"></div>
                <div class="col"><input class="form-control form-control-sm" type="number"></div>
                <div class="col"><input class="form-control form-control-sm" type="number"></div>
                <div class="col"><input class="form-control form-control-sm" type="number"></div>
                <div class="col"><input class="form-control form-control-sm" type="number"></div>
            </div>
        </div>
        <div class="container segundo" style="display: none;">
            <h3>Verbo to be</h3>
            <div class="row tobe" id="serie2">
                <div class="col"><input class="letras form-control" type="text"></div>
                <div class="col"><input class="letras form-control" type="text"></div>
                <div class="col"><input class="letras form-control" type="text"></div>
            </div>
        </div>
        <div class="container tercero" style="display: none;">
            <h3>Onomatopeya de las vacas</h3>
            <div class="row tobe" id="serie3">
                <div class="col"><input class="letras form-control" type="text"></div>
                <div class="col"><input class="letras form-control" type="text"></div>
                <div class="col"><input class="letras form-control" type="text"></div>
            </div>
        </div>
        <div class="container cuarto" style="display: none;">
            <h3>Cuarta</h3>
            <div class="row tobe" id="serie4">
                <div class="col"><input class="letras form-control" type="text"></div>
                <div class="col"><input class="letras form-control" type="text"></div>
                <div class="col"><input class="letras form-control" type="text"></div>
            </div>
        </div>
        <div class="container final" style="display: none;">
            <div id="final"></div>
        </div>
    </section>
    <section class="desbloquear">
        <i class='bx bxs-lock-alt' id="verificar"></i>
    </section>

    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">No pienso perder</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Tipica pregunta que realizas al no saber que más decir. <br>
              Pista:
              <ul>
                <li>Tiene 2 palabras</li>
                <li>Necesitas la segunda palabra</li>
              </ul>
              Pasos a seguir para hallar el número central de la serie actual. <br>
              <ul>
                <li>
                    Luego de saber la palabra deberás convertir cada letra a su representación numérica en el abecedario
                </li>
                <li>Elije el número central</li>
                <li>
                    Utiliza la fórmula de sucesión de números impares, reemplaza "n" por el número central que has obtenido. <br>
                    Hay 2 variaciones de esta serie. Un resultado corresponde a la longitud de la serie actual y el otro corresponde al número que va en la pocisión central.
                </li>
              </ul>
              El último número de esta serie es el ultimo número de la palabra. <br>
              Tengo fe en que lo lograrás.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button class="btn btn-primary" data-bs-target="#paso2Q1" data-bs-toggle="modal">Paso 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade"tabindex="-1" id="question" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Espero te haya gustado el ¿juego?<br> Bueno, Respondeme a la pregunta por Whatsapp.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="infoFinal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pista</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Es un anagrama</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="paso2Q1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel2">Primer número de la serie actual</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Para hallar el primer número de esta serie deberás sumar los números impares que se hallan en la palabra que has escogido (sigue siendo la segunda palabra de la pregunta) <br>
            Tip:
            <ul>
            <li>El 1 no cuenta como impar.</li>
            <li>Hay 3 números impares</li>
            </ul>
            Al resultado de la suma restale 10. El resultado es el primer número de esta serie.
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-target="#infoModal" data-bs-toggle="modal">Volver</button>
            <button class="btn btn-primary" data-bs-target="#paso3Q1" data-bs-toggle="modal">Paso 3</button>
        </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="paso3Q1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel2">Cuál es mi juego de mesa favorito?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Nuevamente convierte cada letra a su representación numérica en el abecedario. <br>
                El pénúltimo y trasantepenúltimo son los números que van exactamente en esa posición en la serie.
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#paso2Q1" data-bs-toggle="modal">Volver</button>
              <button class="btn btn-primary" data-bs-target="#paso4Q1" data-bs-toggle="modal">Paso 4</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="paso4Q1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel2">Segundo número de la serie actual</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                El segundo número de la serie es: <br>
                <b>Pareja Blanca</b> <br>
                Pista :
                <ul>
                    <li>Cada palabra corresponde a un número</li>
                    <li>Cada palabra representa un número de 1 dígito</li>
                </ul>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#paso3Q1" data-bs-toggle="modal">Volver</button>
              <button class="btn btn-primary" data-bs-target="#paso5Q1" data-bs-toggle="modal">Paso 5</button>
            </div>
          </div>
    </div>
    <input type="hidden" value="ser" id="sumaryCode">
    <input type="hidden" value="oo$uu" id="codecs">
    <div class="modal fade" id="paso5Q1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel2">Tercer número de la serie</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                El tercer número de la serie se obtiene sumando el último dígito del primer número con el primer dígito del segundo número. <br>
                Pista: 
                <ul>
                    <li>La suma de los dígitos del segundo número es múltiplo del tercer número</li>
                </ul> 
            </div>
            Una vez terminado todo dale click al icono del candado. Si se vuelve rojo pues... intenta otra vez, de lo contrario pasarás a la siguiente pregunta. <br>
            Por favor logralo.
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#paso3Q1" data-bs-toggle="modal">Cerra</button>
            </div>
          </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="index.js"></script>
</html>