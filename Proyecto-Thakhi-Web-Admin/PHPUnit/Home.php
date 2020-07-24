<?php


class Home { 
 
   

    public function contadorcliente($model) {
        $contador=0;
            foreach($model as $val) { // Reference To Value
                 $contador=$contador+1;
            }
            return($contador);

     }
  	public function contadorentregas($model) {
        $contador=0;
            foreach($model as $val) { // Reference To Value
                 $contador=$contador+1;
            }
            return($contador);

     }
    public function contadorconductores($model) {
        $contador=0;
            foreach($model as $val) { // Reference To Value
                 $contador=$contador+1;
            }
            return($contador);

     }
    public function contadorvehiculos($model) {
        $contador=0;
            foreach($model as $val) { // Reference To Value
                 $contador=$contador+1;
            }
            return($contador);

     }


 

}
?>