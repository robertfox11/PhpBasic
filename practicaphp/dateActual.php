<?php
//mostamos la fecha actual
date('d-m-y');
if (date('d-m-y') != 2) {
    echo "La fecha actual es color Rojo ","<font color='red'>".date('d-m-y').'<br>';

}else{
    echo "La fecha actual es Azul por es ques impar","<font color='red'>".date('d-m-y').'<br>';
}


?>