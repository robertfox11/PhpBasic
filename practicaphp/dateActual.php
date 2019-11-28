<?php
//mostamos la fecha actual
date('d-m-y');
if (date('d-m-y') != 0) {
    echo "La fecha actual es color Rojo por que es par","<font color='red'>".date('d-m-y').'<br>';

}else{
    echo "La fecha actual es Azul por es ques impar ","<font color='blue'>".date('d-m-y').'<br>';
}


?>