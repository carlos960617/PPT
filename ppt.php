<!DOCTYPE html>
<html lang="en">
<head>
    
    <style>


        #usuario{
            background-color:blue;
            float:left;
            
        }
        #maquina{
            background-color:red;
            float:left;
            
        }

        button{
            display:block;
            border-radius:50%;
            width:20vh;
            height:20vh;
            margin:1rem;
        }

        button:hover{
            background-color:yellow;
        }

        p{
            text-align:center;
        }
        

         #mensaje{
            float:left;
            background-color:white;
            color:black;
            padding:20px;
            font-weight:bold;
            border:black 2px solid;
            text-align:center;
            top:50%;
            left:20%;
            
        }

     
    </style>
</head>
<body>



<?php



if(!isset($_POST["p"]) && !isset($_POST["pa"]) && !isset($_POST["t"])){
    $resultado="¡Empieza el juego!";
    
}else{

$opcionO=rand(1,3);
//var_dump($opcionO);
$resultado="";
if($opcionO==1){
    ?><style type="text/css" scoped>
    #piedra2 { background-color: blue; } 
</style><?php
}elseif($opcionO==2){
    ?><style type="text/css" scoped>
    #papel2 { background-color: blue; } 
</style><?php
}elseif($opcionO==3){

    ?><style type="text/css" scoped>
#tijera2 { background-color: blue; } 
</style><?php
}


if(isset($_POST["p"])){
    ?><style type="text/css" scoped>
#piedra { background-color: red; } 
</style><?php
    if($opcionO == 1){
        $resultado="¡EMPATE!";
    }elseif($opcionO == 2){
       $resultado="HAS PERDIDO...";
    }elseif($opcionO == 3){
        $resultado="¡HAS GANADO!";
    }

}elseif(isset($_POST["pa"])){
    ?><style type="text/css" scoped>
#papel{ background-color: red; } 
</style><?php

    if($opcionO == 1){
        $resultado="¡HAS GANADO!";

    }elseif($opcionO == 2){
        $resultado="¡EMPATE!";
    }elseif($opcionO == 3){
        $resultado="HAS PERDIDO...";
    }


}else{

    ?><style type="text/css" scoped>
#tijera { background-color: red; } 
</style><?php

    if($opcionO == 1){
        $resultado="HAS PERDIDO...";

    }elseif($opcionO == 2){
        $resultado="¡HAS GANADO!";
    }elseif($opcionO == 3){
        $resultado="¡EMPATE!";
    }

}
}



?>
<div id="contenedor">
        <!-- <input type="submit" id="boton" name="boton"> -->
        <div id="usuario">
            <p>HUMANO</p>
            <form action="ppt.php" method="POST">
            <button id="piedra" type="submit" class="like" name="p" value="bar">PIEDRA</button> 
            <button id="papel" type="submit" class="like" name="pa" value="bar">PAPEL</button>
            <button id="tijera" type="submit" class="like" name="t" value="bar">TIJERA</button>
            </form>
        </div>
        <div id="maquina">
            <p>MAQUINA</p>
            <button id="piedra2" type="submit" class="like" name="p" value="bar">PIEDRA</button> 
            <button id="papel2" type="submit" class="like" name="pa" value="bar">PAPEL</button>
            <button id="tijera2" type="submit" class="like" name="t" value="bar">TIJERA</button>
            
        </div>
            
</div>   

<div id="mensaje">
    <h1><?php echo "$resultado"?></h1>
    <h6>Papel > Piedra > Tijera > Papel</h6>
</div>

</body>
</html>