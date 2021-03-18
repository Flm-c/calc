<?php
if(isset($_POST)){
    $date=$_POST['date_v'];
    $sum_v=$_POST['sum_v'];
    $srok=$_POST['srok'];
    $rad=$_POST['rad'];
    $sum_p_v=$_POST['sum_p_v'];

//Далее думал насчет вычисления daysn, но в итоге вместо этой переменной оставил число 30 (Не догадался)
    $parts_of_date=explode(".",$date);
    $days_in_month=cal_days_in_month(CAL_GREGORIAN,$parts_of_date[1],$parts_of_date[2]);
//    $residue_of_a_days=$days_in_month-$parts_of_date[0];

    function days_in_year($year){
        if($year%4 !=0 || $year%100 == 0 && $year%400 !=0) $days=365;
        else $days=366;
        return $days;
    }

    $daysn=$days_in_month-$parts_of_date[0];
    $percent=0.1;
    $daysy=days_in_year($parts_of_date[2]);

    //Сначала думал сделать функцию, а потом понял что это ни к чему
    $sum=0;
    $sum_past=$sum_v;
    if($rad==0) $sum_p_v=0;
    //Сам калькулятор (не очень понял некоторых моментов в формуле, поэтому считать может не правлильно)
    //единственное что я придумал для правильного отслеживания кол-ва дней в "текущем" месяце это
    //добавить лишний if  в for, что нагрузит алгоритм, но оно будет работать правильно
    for($i=0;$i<$srok;$i++){
        $sum=$sum_past+($sum_past + $sum_p_v)
            *30
            *($percent/$daysy);
        $sum_past=$sum+$sum_p_v;
    }
    $rounded_sum=round($sum,0);
    echo $rounded_sum;
}
?>