<h3 class="display-4">Arrays</h3>

<nav aria-label="breadcrumb">
    <a class="breadcrumb">
        <a class="breadcrumb" href="index.php">Home</a>
        <a class="breadcrumb-item active" >Tasks</a>
    </a>
</nav>

<br/><br/><br/>

<ul>

    <li>
        <a href="hwArrays.php?taskOne" data-module="activator" data-activate="" class="active">
            Task  # 1<span class="-sidebar-"></span> <br><span class="menu-hint">Є массив з довільними числами.
                    Зробіть так, щоб елемент повторився в массиві таку кількість разів яка відповідає його числу.
                    Приклад: [1, 3, 2, 4] перетворюється в [1, 3, 3, 3, 2, 2, 4, 4, 4, 4]
        </a>
    </li>
    <br/><br/><br/>
    <li>
        <a href="hwArrays.php?taskTwo" data-module="activator" data-activate="" class="active">
            Task  # 2<span class="-sidebar-"></span> <br><span class="menu-hint">Є масив:
                $temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31,
                28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
                Знайти три найменших значення, три найбільших і три середніх.
        </a>
    </li>
    <br/><br/><br/>
    <li>
        <a href="hwArrays.php?taskThree" data-module="activator" data-activate="" class="active">
            Task  # 3<span class="-sidebar-"></span> <br><span class="menu-hint">Є масив:
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
Отримати масив відсортований за ціною книжок
Отиамати відфільтрований массив книжок у яких є тег ‘php’

        </a>
    </li>

    <h4>Bonus tasks</h4>

    <li>
        <a href="hwArrays.php?taskFour" data-module="activator" data-activate="" class="active">
            Task  # 4<span class="-sidebar-"></span> <br><span class="menu-hint">You are going to be given an array of integers.
                Your job is to take that array and find an index N where the sum of the integers to the left of N is equal to the
                sum of the integers to the right of N. If there is no index that would make this happen, return -1.

For example:
Let's say you are given the array [1,2,3,4,3,2,1] - Your function will return the index 3, because at the 3rd position of the array, the sum of left side of the index ([1,2,3]) and the sum of the right side of the index ([3,2,1]) both equal 6.
[1,100,50,-51,1,1] - Your function will return the index 1, because at the 1st position of the array, the sum of left side of the index ([1]) and the sum of the right side of the index ([50,-51,1,1]) both equal 1.

You need to test the solution on the next arrays:
[20,10,-80,10,10,15,35]
[10,-80,10,10,15,35]

        </a>
    </li>
    <br/><br/><br/>
    <li>
        <a href="hwArrays.php?taskFive" data-module="activator" data-activate="" class="active">
            Task  # 5<span class="-sidebar-"></span> <br><span class="menu-hint">You need to find out a unique value in array,
                you are given arrays:
- [ 1, 1, 1, 2, 1, 1 ] => 2
- [ 0, 0, 0.55, 0, 0 ] => 0.55
- [3,1,5,3,7,4,1,5,7] => 4

        </a>
    </li>
</ul>

