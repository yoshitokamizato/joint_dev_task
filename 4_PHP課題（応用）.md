# やんばるエキスパート PHP 課題（応用）

## 教材のご案内

- やんばるエキスパート教材：https://www.yanbaru-code.com/texts?genre=php

## 回答方法について

- [PHP課題（基礎）](https://github.com/yuya-ishikawa-qa/joint_dev_task/blob/master/2_PHP%E8%AA%B2%E9%A1%8C%EF%BC%88%E5%9F%BA%E7%A4%8E%EF%BC%89.md)を参照下さい

## Q17. 次の Userクラス 内にinfoメソッドを追加し、期待する出力結果になるようにして下さい。

```
class User
{

// コードを追加

}

$user1 = new User("神里", 32, "男");
$user2 = new User("あじー", 32, "男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;
```

期待する出力結果

```
名前：神里
年齢：32
性別：男
-------------
名前：あじー
年齢：32
性別：男
```

## Q18. 年齢を用いた場合分けを利用して、期待する出力結果になるようなManクラスを作成して下さい。

```
// コードを追加

$man1 = new Man("あじー", 32);
$man2 = new Man("ゆたぼん", 10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;
```

期待する出力結果

```
こんにちは、あじーと申します。宜しくお願いいたします。
はいさいまいど〜、ゆたぼんです！！！
```

## Q19. 次のコードはエラーが出ます。期待する出力結果となるようにコードを修正して下さい。

```
class Item{

    protected $name;

    function __construct($book_name){
        $this->name = $book_name;
    }
}

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;
```

期待する出力結果

```
ゼロ秒思考
```

## Q20. 次の仕様を満たした上で、期待する出力結果になるようにコードを追加して下さい。

- 年齢区分は、幼児(0〜5歳)、子供(6〜12歳)、成人(13〜64歳)、シニア(65〜120歳)の4パターンとします。（この範囲外の年齢については対処しなくてOKです）

```
class Human
{

    // コードを追加

}

class Zoo
{

    // コードを追加

}

$zoo = new Zoo("旭山動物園",["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま", 3);
$human2 = new Human("ゆたぼん", 10);
$human3 = new Human("あじー", 32);
$human4 = new Human("ぎん", 108);

$humans = [$human1, $human2, $human3, $human4];

foreach($humans as $human){
    $zoo->info_entry_fee($human);
}

echo PHP_EOL;
```

期待する出力結果

```
たまさんの入場料金は 0 円です。
ゆたぼんさんの入場料金は 400 円です。
あじーさんの入場料金は 800 円です。
ぎんさんの入場料金は 500 円です。
```

## Q21. FizzBuzz問題の応用問題です。次の仕様、条件を満たすコードを書いて、1から30までの正の整数を期待する出力結果にして下さい。

仕様

- 3の倍数でFizzを出力
- 5の倍数でBuzzを出力
- 7の倍数でHogeを出力
- それ以外は数値を出力

※但し15はFizzBuzz, 21はFizzHogeなど、公倍数は複数単語が出力されるようにすること。

期待する出力結果

```
1
2
Fizz
4
Buzz
Fizz
Hoge
8
Fizz
Buzz
11
Fizz
13
Hoge
FizzBuzz
16
17
Fizz
19
Buzz
FizzHoge
22
23
Fizz
Buzz
26
Fizz
Hoge
29
FizzBuzz
```
