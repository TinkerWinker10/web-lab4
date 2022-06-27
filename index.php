<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Основи PHP</title>
</head>

<body>
<div class="container">
    <h1>Базовий синтаксис PHP</h1>

    <section>
        <p><h2><b>Функції виводу даних</b></h2></p>
        <p>
            <?php echo "Hello world!" ?>
        </p>
        <p>
            <?php "Hello world!" ?>
        </p>

        <p>
            <?php print 25 ?>
        </p>

        <p>
            <?php print_r([4, 3, 2, 1]) ?>
        </p>

        <p>
            <?php var_dump([1, 2, 3, 4]) ?>
        </p>
    </section>

    <section>
        <p><b>Змінні</b></p>
        <p>
            <?=
                $name = "Nikita";
                $surname = "Teleha";
                $age = 17;
                $grade = 11;
                define('SEX', 'Male');
                echo "Name:" . $name . " Surname: " . $surname . " Age: " . $age . " Grade: " . $grade  . " SEX: " . $sex;

                $Hello = "World";
                $a = "Hello";
                ?>
        </p>

        <p>
            <?php echo $$a ?>
        </p>

        <p>
            <?= $age ?>
        </p>

    </section>
        <p><b>Строки</b></p>
            <?=
                $string = "Hello world";
                $words_arr = explode(" ", $string);
                $arr = ["BMW", "Mercedes", "Porsche"];
                $implode_arr = implode(", ", $arr);
            ?>
        <p>
            <?= strlen($string) ?>
        </p>

        <p>
            <?= strtoupper($string) ?>
        </p>

        <p>
            <?= strtolower($string) ?>
        </p>

        <p>
            <?= strrev($string) ?>
        </p>

        <p>
            <?= ucwords($string) ?>
        </p>

        <p>
            <?= strpos($string, 'H') ?>
        </p>

        <p>
            <?= str_replace("world", 'Everyone', $string) ?>
        </p>

        <p>
            <?= substr($string, 3) ?>
        </p>

        <p>
            <?= printf("%s likes to %s", 'NIkita', 'sleep') ?>
        </p>
        <p>
            <?= var_dump($words_arr) ?>
        </p>
        <p>
            <?= $implode_arr ?>
        </p>

        <section>
        <p><b>Масиви</b></p>
            <?
                $brand= ['apple', 'samsung', 'xiaomi'];
                $cars = array('BMW', 'Mercedes', 'Audi');

                $data = [
                        [
                                "name" => "Nikita",
                                "surname" => "Teleha"
                        ],
                        [
                            "name" => "John",
                            "surname" => "Paul"
                        ],
                        [
                            "name" => "Bob",
                            "surname" => "Supp"
                        ]
                ];

                $info = [
                        "name" => "Nikita",
                        "surname" => "Teleha",
                ];
            ?>


    </section>


    <section>
    <p><b>Функції масивів/b></p>
            <?
                $fruits[] = 'grape';
                array_push($fruits, 'lemon');
                array_unshift($fruits, 'mango');
                array_pop($fruits);
                array_shift($fruits);
                unset($fruits[1]);
                echo $fruits;
                $chunked_arr = array_chunk($fruits, 2);

                $a = ['green', 'red', 'yellow'];
                $b = ['avocado', 'apple', 'banana'];

                $c = array_combine($a, $b);
                $keys = array_keys($c);
                $values = array_values($c);
                $flipped = array_flip($c);

                $newNumbers = array_map(function($number) {
                    return "Number $number";
                } , $numbers);

                $lessThan5 = array_filter($numbers, function($number) {
                    return $number < 5;
                });

                $sum = array_reduce($lessThan5, function($carry, $item) {
                    return $carry + $item;
                }, 0)
            ?>
        <p>
            <?php var_dump(in_array('apple' ,$fruits)) ?>
        </p>
        <p>
            <?php print_r($fruits); ?>
        </p>
        <p>
            <?php print_r($chunked_arr); ?>
        </p>
        <p>
            <?php print_r($c); ?>
        </p>
        <p>
            <?php print_r($flipped); ?>
        </p>
        <p>
            <?php print_r($keys); ?>
        </p>
        <p>
            <?php print_r($values); ?>
        </p>
        <p>
            <?php print_r($newNumbers); ?>
        </p>
        <p>
            <?php print_r($lessThan5); ?>
        </p>
        <p>
            <?php print_r($sum); ?>
        </p>
    </section>



</div>

</body>

</html>
