<nav aria-label="breadcrumb">
    <a class="breadcrumb">
        <a class="breadcrumb" href="index.php">Home</a>
        <a class="breadcrumb-item active" href="BasicsControlflow.php">Tasks</a>
    </a>
</nav>

<?php

/* Task  # 1*/

if (isset($_GET['taskOneB'])) {
?>

<h4>За допомогою цих змінних і операції складання рядків вивести на екран фразу «Hello world»</h4>

       <form action="http://localhost:63342/HomeWork/hwBasicsControlflow.php" method="get">
        <h5> Введіть два слова :)</h5>
           <input type="text" name="text1" pattern = '^[a-zA-Z]{1,}$' placeholder="Hello" required>
           <input type="text" name="text2" pattern = '^[a-zA-Z]{1,}$' placeholder="World" required>
        <input type="hidden" name="taskOneB">
        <input type="submit">
    </form>

    <?php
    $text1 = ($_GET['text1']);
    $text2 = ($_GET['text2']);
    echo($text1." ".$text2);

}

/* Task  # 2*/

 if (isset($_GET['taskTwoB'])) {
    ?>
    <h4>вивести на екран символ 'h', символ 'e', символ 'o'</h4>

     <form action="http://localhost:63342/HomeWork/hwBasicsControlflow.php" method="get">
         <h5> Введіть слово</h5>
         <input type="text" name="text1" pattern = '^[a-zA-Z]{1,}$' placeholder="Hello" required>
         <input type="hidden" name="taskTwoB">
         <input type="submit">

         <h5>Введіть номер символу</h5>
         <input type="text" name="number1" pattern = '^[0-9.-]' placeholder="1-2-3" required>
         <input type="hidden" name="taskTwoB">
         <input type="submit">

     </form>

    <?php
    $var = ($_GET['text1']);
    $x = ($_GET['number1']);
    echo $var[$x-1];

}

/* Task  # 3*/

if (isset($_GET['taskThreeB'])) {
    ?>
    <h4>Якщо змінна $a більша нуля и менша 5-ти, то вивести 'Вірно', інакше вивести 'Невірно'</h4>

    <form action="http://localhost:63342/HomeWork/hwBasicsControlflow.php" method="get">
        <h5> Введіть число</h5>
        <input type="text" name="number1" pattern = '^[0-9.-]' placeholder="5" required>
        <h5> Введіть два числа для порівняння, через кому</h5>
        <input type="text" name="array" pattern = '^[0-9.-](\,)[0-9.-]' placeholder="5,6" required>
        <input type="hidden" name="taskThreeB">
        <input type="submit">
    </form>

    <?php
    $a = ($_GET['number1']);
    $b = explode(',',$_GET['array']);
    if($a > $b[0] and $a < $b[1]) {
        print_r( $b[0].'<'.$a.'<'.$b[1]);
        print_r("\n");
        print_r("Вірно!");
    }
    else {
        print_r( $b[0].'<'.$a.'<'.$b[1]);
        print_r("\n");
        print_r("Невірно!");;
    }
}

/* Task  # 4*/

if (isset($_GET['taskFourB'])) {
    ?>
    <h4>Визначити в яку чверть години потрапляє число</h4>

    <form action="http://localhost:63342/HomeWork/hwBasicsControlflow.php" method="get">
        <h5>Введіть число від 0 до 59</h5>
        <input type="text" name="number" min="0" max="59" step="1" placeholder="5" required>
        <input type="hidden" name="taskFourB">
        <input type="submit">
    </form>

    <?php
     $min = ($_GET['number']);

    if ($min >= 0 && $min <= 14) {
        echo('перша');
    }
    if ($min >= 15 && $min <= 30) {
        echo('друга');
    }
    if ($min >= 31 && $min <= 45) {
        echo('третя');
    }
    if ($min >= 46 && $min <= 59) {
        echo('четверта');
}

}

/* Task  # 5*/

if (isset($_GET['taskFiveB'])) {
    ?>
    <h4>Визначте чи рік високосний</h4>

    <form action="http://localhost:63342/HomeWork/hwBasicsControlflow.php" method="get">
        <h5>Введіть рік</h5>
        <input type="text" name="year" pattern="([0-9]{4})" placeholder="2000" required>
        <input type="hidden" name="taskFiveB">
        <input type="submit">
    </form>

    <?php

    $year = ($_GET['year']);
    if ($year % 4 == 0 or ($year % 400 == 0 and $year % 100 != 0)) {
        echo 'Так';
    } else {
        echo 'Ні';
    }
}

/* Task  # 6*/

if (isset($_GET['taskSixB'])) {
    ?>
    <h4>Перевірте, чи сума перших трьох чисел дорівнює сумі других трьох чисел</h4>

    <form action="http://localhost:63342/HomeWork/hwBasicsControlflow.php" method="get">
        <h5> Введіть шестизначне число число</h5>
        <input type="text" name="number" pattern = '([0-9]{6})' placeholder="385934" required>
        <input type="hidden" name="taskSixB">
        <input type="submit">
    </form>

    <?php
        $arr = ($_GET['number']);
        $result=$arr[0]+$arr[1]+$arr[2];
        $result1=$arr[3]+$arr[4]+$arr[5];
        if ($result==$result1)
        {echo 'так';}
        else {echo'ні';}
    }

/* Task  # 7*/

if (isset($_GET['taskSevenB'])) {
   ?>
   <h4>Compare two strings</h4>

    <form action="http://localhost:63342/HomeWork/hwBasicsControlflow.php" method="get">
        <h5> Введіть слова через пробіл</h5>
        <input type="text" name="array" placeholder="ZzZz ffPFF" required>
        <input type="hidden" name="taskSevenB">
        <input type="submit">
    </form>
<?php

    $str = explode(' ',$_GET['array']);
    $s = strtoupper($str{0});
    $s1 = strtoupper($str{1});

    $len = strlen($s);
    $r = ord($s{0});

    for ($i=1; $i<$len; $i++) {
        $r = $r + ord($s{$i});
}

    $len1 = strlen ($s1);
    $r1 = ord($s1{0});


    for ($j=1; $j<=$len1; $j++){
        $r1 =$r1 + ord ($s1{$j});
    }

    if ($r == $r1){
        echo 'рівно';}
    else echo 'не рівно';
}

