<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>16章課題</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            // priceプロパティの値を出力するメソッド
            public function show_price () {
                // このインスタンスのpriceに格納されている値を出力する
                echo $this->price . '<br>';
            }

            // プロパティに値を代入するコンストラクタを作成
            public function __construct (string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            // heightプロパティの値を出力するメソッド
            public function show_height () {
                // このインスタンスのheightに格納されている値を出力する
                echo $this->height . '<br>';
            }

            // プロパティに値を代入するコンストラクタを作成
            public function __construct (string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $food = new Food ('potato', 250);
        $animal = new Animal ('dog', 60, 5000);

        // インスタンスの各プロパティの値を出力
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        // それぞれのメソッドを実行
        $food->show_price();
        $animal->show_height();

        ?>
    </p>