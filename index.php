<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <H1>Programación Orientada a Objetos</H1>
    <p>Es un paradigma de Programación en el cuál se usan objetos y clases</p>

    <h2>¿Qué es un Objeto?</h2>
    <p>Son la representacion de elementos donde cada uno tiene un conjunto de atributos que lo hace diferente del resto de objetos</p>
    <ul>
        <li>Atributos: caracteristicas que comparte un objeto</li>
        <li>Métodos: funciones que cumplen un objeto</li>
    </ul>

    <h2>¿Qué es una Clase?</h2>
    <p>
    Es la definición de como se ve un objeto y lo que puede hacer dentro de nuestro codigo <br>
    Es como una plantilla<br>
       <ul>
       <li> <a href="clase1.php">Ejemplo de clases </a></li>
       </ul>
      
    </p>
    <h2>Acceso a métodos</h2>
        <p>
            <ul>
                <li>Public: Acceden todos</li>
                <li>Private: Solo puede ser accedido por los miembros de la clase</li>
                <li>Protected:Solo miembros de la case y clases heredadas</li>
            </ul>
        *En el caso de Private y Protected, creamos funciones publicas con return del valor protegido
        <ul>
            <li><a href="clase2.php">Acceso a métodos</a></li>
        </ul>
        </p>
    
    <h2>Método Constructor</h2>
    <p>
    Permite inicializar una clase con información enviada apartir de la creación del objeto <br>
    Es un método mágico.
    <ul>
    <li><a href="clase2.php">Ejemplo de método constructor</a> (Se recomienda ver archivo "clase2.php")</li>
    </ul>
    </p>
</html>