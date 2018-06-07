<nav aria-label="breadcrumb">
    <a class="breadcrumb">
        <a class="breadcrumb" href="index.php">Home</a>
        <a class="breadcrumb-item active" href="arrays.php">Tasks</a>
    </a>
</nav>


<?php

/* Task  # 1*/

if (isset($_GET['taskOne'])) {
    ?>

    <h4>Зробіть так, щоб елемент повторився в массиві таку кількість разів яка відповідає його числу</h4>

    <form action="http://localhost:63342/HomeWork/hwArrays.php" method="get">
        <h5> Введіть числовий масив, через кому</h5>
        <input type="text" name="array" pattern='^[ 0-9]+$[\,]' placeholder="1,2,3,44" required>
        <input type="hidden" name="taskOne">
        <input type="submit">
    </form>

    <?php

    $old_list = explode(',', $_GET['array']);
    $new_list = [];

    foreach ($old_list as $elem) {
        for ($i = 1; $i <= $elem; $i++) {
            $new_list[] = $elem;
        }
    }

    echo('Результат: ');
    echo implode("\n", $new_list), "\n";
}

/* Task  # 2*/

if (isset($_GET['taskTwo'])) {
    ?>
    <h4>Знайти три найменших значення, три найбільших і три середніх</h4>

    <form action="http://localhost:63342/HomeWork/hwArrays.php" method="get">
        <h5> Введіть числовий масив, через кому</h5>
        <input type="text" name="array" pattern='^[ 0-9]+$[\,]' placeholder="1,2,3,44" required>
        <input type="hidden" name="taskTwo">
        <input type="submit">
    </form>

    <?php
    $temperatures = explode(',', $_GET['array']);
    $n = 3;

    $arr = array_unique($temperatures);
    rsort($arr);

    $i = (count($arr) / 2);

    echo('Мінімальні значення: '), "\n";
    echo implode("\n", array_slice($arr, -$n, $n)), "\n", "<br />";
    echo('Максимальні значення: '), "\n";
    echo implode("\n", array_slice($arr, 0, $n)), "\n", "<br />";
    echo('Середні значення: '), "\n";
    echo($arr[$i - 1] . ' ' . $arr[$i] . ' ' . $arr[$i + 1]);
}

/* Task  # 3*/

if (isset($_GET['taskThree'])) {
    ?>
    <h4>Отримати масив відсортований за ціною книжок
        Отримати відфільтрований массив книжок у яких є тег ‘php’</h4>
    <h5>Є масив:
        $books = [
        [
        'name' => 'Learning php, mysql & JavaScript',
        'author' => 'Robin Nixon',
        'price' => 30,
        'tags' => ['php', 'javascript', 'mysql']
        ],
        [
        'name' => 'Php for the Web: Visual QuickStart Guide',
        'author' => 'Larry Ullman',
        'price' => 25,
        'tags' => ['php']
        ],
        [
        'name' => 'pHp and MySqL for Dynamic Web Sites',
        'author' => 'Larry Ullman',
        'price' => 14.39,
        'tags' => ['php', 'mysql']
        ],
        [
        'name' => 'Modern PhP: New Features and Good Practices',
        'author' => 'Josh Lockhart',
        'price' => 24,
        'tags' => ['php']
        ],
        [
        'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'author' => 'Jon Duckett',
        'price' => 20,
        'tags' => ['javascript', 'jquery']
        ],
        [
        'name' => 'Miss Peregrine\'s Home for Peculiar Children',
        'author' => 'Ransom Riggs',
        'price' => 8.18
        ]
        ];
    </h5>
    <?php
    $books = [['name' => 'Learning php, mysql & JavaScript', 'author' => 'Robin Nixon', 'price' => 30, 'tags' => ['php', 'javascript', 'mysql']], ['name' => 'Php for the Web: Visual QuickStart Guide', 'author' => 'Larry Ullman', 'price' => 25, 'tags' => ['php']], ['name' => 'pHp and MySqL for Dynamic Web Sites', 'author' => 'Larry Ullman', 'price' => 14.39, 'tags' => ['php']], ['name' => 'Modern PhP: New Features and Good Practices', 'author' => 'Josh Lockhart', 'price' => 24, 'tags' => ['php']], ['name' => 'JavaScript and JQuery: Interactive Front-End Web Development', 'author' => 'Jon Duckett', 'price' => 20, 'tags' => ['javascript', 'jquery']], ['name' => 'Miss Peregrine\'s Home for Peculiar Children', 'author' => 'Ransom Riggs', 'price' => 8.18]];


    function sorted($a, $b)
    {
        $i = 'price';
        return strnatcmp($a[$i], $b[$i]);
    }

    usort($books, "sorted");
    echo('масив відсортований за ціною книжок: ');
    echo '', "\n", "<br />";
    echo '', "\n", "<br />";
    echo(json_encode($books));

    echo '', "\n", "<br />";
    echo '', "\n", "<br />";
    echo '', "\n", "<br />";
    echo '', "\n", "<br />";

    function filter($value) {
        return in_array('php', $value['tags']);
    }

    $filtered = array_values(array_filter($books,'filter'));

    echo('масив відсортований за тегом: ');
    echo '', "\n", "<br />";
    echo '', "\n", "<br />";
    echo(json_encode($filtered));
}


/* Task  # 4*/

if (isset($_GET['taskFour'])) {
    ?>
    <h4>Your job is to take that array and find an index N where the sum of the integers to
        the left of N is equal to the sum of the integers to the right of N.
        If there is no index that would make this happen, return -1</h4>

    <form action="http://localhost:63342/HomeWork/hwArrays.php" method="get">
        <h5> Введіть числовий масив, через кому</h5>
        <input type="text" name="array" pattern='^[ 0-9]+$[\,]' placeholder="1,2,3,44" required>
        <input type="hidden" name="taskFour">
        <input type="submit">
    </form>

    <?php

    $array = explode(',', $_GET['array']);
    print_r(json_encode($array));

    echo '', "\n", "<br />";
    echo '', "\n", "<br />";
    echo '', "\n", "<br />";
    echo '', "\n", "<br />";

    function IndexArray($arr)
    {
        for ($index = 1; $index < sizeof($arr) - 1; $index++) {
            $x = array_sum(array_slice($arr, 0, $index));
            $y = array_sum(array_slice($arr, $index + 1));
            if ($x === $y) {
                return $index;
            }
        }
        return -1;
    }

    echo 'Індекс елемента = ' . IndexArray($array);

}


/* Task  # 5*/

if (isset($_GET['taskFive'])) {
    ?>
    <h4>You need to find out a unique value in array, you are given arrays</h4>
    <form action="http://localhost:63342/HomeWork/hwArrays.php" method="get">
        <h5> Введіть числовий масив, через кому</h5>
        <input type="text" name="array" pattern='^[ 0-9]+$[\,]' placeholder="1,2,3,44" required>
        <input type="hidden" name="taskFive">
        <input type="submit">
    </form>

    <?php

    $array = (explode(',', $_GET['array']));

    function UniqueValue($arr){
        $x = 0;
        sort($arr);
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] === $arr[$i + 1]) {
                $x++;
            } elseif ($x > 0) {
                $x = 0;
            } else {
                return $arr[$i];
            }
        }
    }
    echo "Унікальне значення = ";
    print_r(UniqueValue($array));
}

