<nav aria-label="breadcrumb">
    <a class="breadcrumb">
        <a class="breadcrumb" href="index.php">Home</a>
        <a class="breadcrumb-item active" href="FunctionsStringsRegex.php">Tasks</a>
    </a>
</nav>


<?php

/* Task  # 1*/

if (isset($_GET['taskOneF'])) {
    ?>
    <h4>Перетворити рядок 'var_test_text' в 'varTestText'</h4>

    <form action="http://localhost:63342/HomeWork/hwFunctionsStringsRegex.php" method="get">
        <h5> Введіть текст</h5>
        <input type="text" name="text1" placeholder="var_test_text" required>
        <h5> Введіть розділювач</h5>
        <input type="text" name="text2" placeholder="_" required>
        <input type="hidden" name="taskOneF">
        <input type="submit">
    </form>

    <?php
    $text1 = ($_GET['text1']);
    $text2 = ($_GET['text2']);
    $str1 = lcfirst(ucwords(str_replace($text2, ' ', $text1)));
    $str2 = str_replace(' ','',$str1);
    echo($str2);
}

/* Task  # 2*/

if (isset($_GET['taskTwoF'])) {
    ?>
    <h4>рядок 'ФЫВА олдж'. Треба перетворити на наступний рядок 'АВЫФ ждло'</h4>

    <form action="http://localhost:63342/HomeWork/hwFunctionsStringsRegex.php" method="get">
        <h5> Введіть слова через пробіл</h5>
        <input type="text" name="array" placeholder="ФЫВА олдж" required>
        <input type="hidden" name="taskTwoF">
        <input type="submit">
    </form>
<?php

    $str = explode(' ',$_GET['array']);

    function utf8_strrev($str){
        preg_match_all('/./us', $str, $ar);
        return join('',array_reverse($ar[0]));
    }

    $str[0] = utf8_strrev($str[0]);
    $str[1] = utf8_strrev($str[1]);
        echo implode(' ', $str);
}

/* Task  # 3*/

if (isset($_GET['taskThreeF'])) {
    ?>
    <h4>потрібно вивести на екран тільки ті числа в яких є '3'</h4>

    <form action="http://localhost:63342/HomeWork/hwFunctionsStringsRegex.php" method="get">
        <h5> Введіть числовий масив, через кому</h5>
        <input type="text" name="array" pattern = '^[ 0-9]+$[\,]' placeholder="1,2,3,44" required>
        <input type="hidden" name="taskThreeF">
        <input type="submit">
    </form>
    <?php
        $arr = explode(',',$_GET['array']);
        foreach ($arr as $elem) {
            if (strpos($elem, '3') !== false) {
                echo $elem . '<br>';
            }
        }
}

/* Task  # 4*/

if (isset($_GET['taskFourF'])) {
    ?>
    <h4>скільки всього трійок зустрічається в масиві</h4>

    <form action="http://localhost:63342/HomeWork/hwFunctionsStringsRegex.php" method="get">
        <h5> Введіть числовий масив, через кому</h5>
        <input type="text" name="array" pattern = '^[ 0-9]+$[\,]' placeholder="1,2,3,44" required>
        <input type="hidden" name="taskFourF">
        <input type="submit">
    </form>
    <?php
        $arr = explode(',',$_GET['array']);
        $str = implode(' ', $arr);
        $arr1 = str_split($str);
        $sum = 0;
        foreach ($arr1 as $elem) {
            if ($elem == 3) {
                $sum += 1;
            }
        }
        echo $sum;
}

/* Task  # 5*/

if (isset($_GET['taskFiveF'])) {
    ?>
    <h4>My friend wants a new band name for her band.</h4>

    <form action="http://localhost:63342/HomeWork/hwFunctionsStringsRegex.php" method="get">
        <h5> Введіть слово</h5>
        <input type="text" name="text1" placeholder="Dolphin" required>
        <input type="hidden" name="taskFiveF">
        <input type="submit">
    </form>
    <?php

    $str = ($_GET['text1']);

    if($str[0] === $str[-1]) {
        echo ucfirst(substr($str, 0, -1)) . $str;
    }
    if ($str[0] !== $str[-1]){
        echo 'The ' . ucfirst($str);
   }
}

/* Task  # 6*/

if (isset($_GET['taskSixF'])) {
    ?>
    <h4>"ATTGC" -> returns "TAACG", "GTAT" -> returns "CATA"</h4>

    <form action="http://localhost:63342/HomeWork/hwFunctionsStringsRegex.php" method="get">
        <h5> Введіть слово</h5>
        <input type="text" name="text1" placeholder="test" required>
        <h5> Введіть 4 букви, через пробіл, які необхідно замінити між собою (по принципу A => T, C => G)</h5>
        <input type="text" name="array"  pattern = '^[a-zA-Z](\,)' placeholder="A,T,C,G" required>
        <input type="hidden" name="taskSixF">
        <input type="submit">
    </form>
    <?php

    $str = ($_GET['text1']);
    $arr = explode(' ',$_GET['array']);
    $str1 = array($arr[0] => $arr[1], $arr[1] => $arr[0], $arr[2] => $arr[3], $arr[3] => $arr[2]);
    echo strtr($str, $str1);

}
