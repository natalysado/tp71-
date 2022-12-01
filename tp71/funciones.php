<?php
clase  CRectangulo {
privado  $ largo ;
privado  $ ancho ;

función  __construir ( $ l , $ a ){
    $ este -> largo = $ l ;
    $ esto -> ancho = $ a ;
   
}
 función  pública getlargo (){
    devuelve  $ esto -> largo ;
}
 función  pública getancho (){
    return   $ esto -> ancho ;
}

 funcion  publica CalcularPerimetro (){
    return   $ esto -> largo * 2 + $ esto -> ancho * 2 ;
}
 función  pública CalcularArea (){
    return  $ esto -> largo * $ esto -> ancho ;
}
}
$ rectangulo = new  CRectangulo ( $ _POST [ 'ancho' ], $ _POST [ 'ancho' ] );
echo  $ rectangulo -> getlargo ()." <br> ";
echo  $ rectangulo -> getancho ()." <br> ";
echo  $ rectangulo -> CalcularPerimetro ()." <br> ";
echo  $ rectangulo -> CalcularArea ()." <br> ";
?>