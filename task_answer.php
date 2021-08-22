<?php
//PHP課題(基礎・応用)の回答例です。

print("#####q1#####".PHP_EOL);// . は文字列を連結させるために使用
//Q1. 次の配列の最後に "斎藤" を追加し、出力して下さい。

$names = ["田中", "佐藤", "佐々木", "高橋"];

$names[] = "斎藤";
//補足
//array_push($names,"斎藤"); の方法もあるが、配列にひとつの要素を加える場合は好ましくない
//(array_push()には関数を呼ぶオーバーヘッドがあるため)


print_r($names); //結果を出力する

echo PHP_EOL; //改行する


print("#####q2#####".PHP_EOL);
//Q2. 次の二つの配列を合体させた新しい配列 array を作成し、出力して下さい。

$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

$array = array_merge($array1, $array2); //配列をマージする

print_r($array);

echo PHP_EOL;


print("#####q3#####".PHP_EOL);
//Q3. 次の配列の中に 3 がいくつあるかを出力するコードを書き、出力して下さい。
//キーワード：foreach 配列 重複

$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];

//回答例1(foreach()を使って配列$numbersの要素が 3 であるか1つ1つ確認し、 3 の個数をカウントする)
$count = 0; //変数の初期化（ 3 の個数のカウウント用の変数）
foreach ($numbers as $number) {
    if ($number === 3) {
        //値が 3 であるためカウントアップ
        $count++;
    }
}
//補足
//foreach() を使用することで配列の要素を1つづつ取り出すことができる
//※基本的に全ての要素が取り出されるまでループ処理が続く
//※foreach ($arr as $key => $value) とすることで要素だけでなくその要素のキーも扱うことができる

print_r($count."回");


//回答例2(array_count_values()を使って、配列の値の数を数える)
$number = array_count_values($numbers);
//補足
//array_count_values($array) を呼び出すと
//$arrayの値をキー、
//$arrayにおける値の出現回数を値とした配列が返され、
//$numberに代入される

print_r($number[3]."回"); // 3 がいくつあるかを出力 = $numberのキーが 3 の値を取得する

echo PHP_EOL;


print("#####q4#####".PHP_EOL);
//Q4. 次の配列から null の要素を削除し、出力して下さい。（新しい配列を作成せずに実現して下さい）
//キーワード：配列 特定　重複　削除

$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

$sports = array_diff($sports,[null]); //$sportsの要素から null を削除する
//補足
//null は変数が値を持たないことを表すnull 型の唯一の値ため
//文字型である "null" とは区別する


print_r($sports);

echo PHP_EOL;


print("#####q5#####".PHP_EOL);
//Q5. 配列が空であれば true、1つ以上の要素があれば false を出力するコードを書いて下さい。
//キーワード：配列　空　判定

$array1 = [];
var_export(empty($array1));

echo PHP_EOL;

$array2 = [1, 5, 8, 10];
var_export(empty($array2));
//補足
//empty()で true か false を判断
//var_export()で結果を出力する
//※print_r() では  Boolean型である true や false は出力できない

echo PHP_EOL;


print("#####q6#####".PHP_EOL);
//Q6. 次の配列から、期待された結果の配列 numbers2 を作成し、出力して下さい。

$numbers1 = [1, 2, 3, 4, 5];

$numbers2 = [];//変数の初期化
//補足
//変数の初期化を行っていないと、該当部分以前のコードで代入していた値が残ったままになり、思わぬバグに繋がることがある
//（コードが長くなってくると、同じ変数を使っていることを把握しづらくなるため、初期化しておくのがベター）

foreach ($numbers1 as $number) {
    $number *= 10; //$numberを10倍して代入
    $numbers2[] = $number; //配列$numbers2の要素に10倍した$numberを代入
}
print_r($numbers2);

echo PHP_EOL;


print("#####q7#####".PHP_EOL);
//Q7. 次の配列の要素を 文字列 から 数字 に変換し、出力して下さい。

$array = ["1", "2", "3", "4", "5"];
$array = array_map('intval',$array);
//補足
//array_map()は指定した配列の要素にコールバック関数を適用する関数である
//array_map()の第1引数に intval の関数を指定することで配列の要素を int として取得する

var_dump($array); //結果を出力する

echo PHP_EOL;


print("#####q8#####".PHP_EOL);
//Q8. 期待する出力結果になるようにコードを書き加えて下さい。

$programming_languages = ["php", "ruby", "python", "javascript"];
$programming_languages = array_map('ucfirst', $programming_languages);
$upper_case_programming_languages = array_map('strtoupper', $programming_languages);
//補足
//array_map()の第1引数に ucfirst の関数を指定することで配列の要素の最初の文字を大文字にする
//array_map()の第1引数に strtoupper の関数を指定することで配列の要素を全て大文字にする

print_r($programming_languages);
echo PHP_EOL;

print_r($upper_case_programming_languages);
echo PHP_EOL;


print("#####q9#####".PHP_EOL);
//Q9. 次の配列を用いて、期待通りの出力結果になるようにコードを書いて下さい。

$names = ["田中", "佐藤", "佐々木", "高橋"];

$names2 = [];
foreach ($names as $key => $name) {
    $number = $key + 1; //添字配列は0から始まるため、会員No.は+1しておく
    $names2[] = "会員No.".$number." ".$name;;
}
print_r($names2);

echo PHP_EOL;


print("#####q10#####".PHP_EOL);
//Q10. 次の配列の各要素について、 うに という文字列が含まれていれば「好物です」と表示し、そうでなければ「まぁまぁ好きです」と出力するコードを書いて下さい。

$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼", "高級なうに"];

//回答例1(正規表現を使用する)
foreach ($foods as $food) {
    if (preg_match('/うに/',$food)) {
        print('好物です'.PHP_EOL);
    } else {
        print('まぁまぁ好きです'.PHP_EOL);
    }
}

echo PHP_EOL;

//回答例2(文字列内の部分文字列が最初に現れる場所を見つける関数 strpos()を使用する)
foreach ($foods as $food) {
    if (strpos($food, 'うに') === false) {
        //補足
        //trpos()は"うにぎり"のように一番初めの文字に検索したワードがあった場合 0 となるため、 === を使用し、 false と完全一致しているか確認する

        print('まぁまぁ好きです'.PHP_EOL);
    } else {
        print('好物です'.PHP_EOL);
    }
}


print("#####q11#####".PHP_EOL);
//Q11. 次の配列を用いて、期待する出力結果になるようにコードを書いて下さい。

$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

$sports2 = []; //変数を初期化(多次元配列を単なる連想配列にするために使用する)
foreach ($sports as $key => $sport) {
    if (is_array($sport)) { //$sportが配列かどうか確認する

        //$sportが配列の場合の処理
        $sports2 = array_merge($sports2, $sport);
    } else {

        //$sportが配列でないの場合の処理
        $sports2[] = $sport;
    }
}

$sports2 = array_unique($sports2); //$sports2の中で重複している要素を1つだけにする
$sports2 = array_values($sports2); //添字配列$sports2のキーの値を0から振り直す

$sports3 = []; //変数を初期化
foreach ($sports2 as $key => $sport) {
    $number = $key + 1; //添字配列は0から始まるため、No.は+1しておく
    $sports3[] = "No.".$number." ".$sport;
}

print_r("ユーザの趣味一覧".PHP_EOL);
foreach ($sports3 as $sport) {
    print($sport.PHP_EOL);
    //補足
    //配列ではなく文字列として表示するためforeach()で要素を取り出してから出力する
}

echo PHP_EOL;


print("#####q12#####".PHP_EOL);
//Q12. 次のハッシュから name の値を出力して下さい。

$data = ["user" => ["name" => "satou", "age" => 33]];

print_r($data["user"]["name"]);

echo PHP_EOL;


print("#####q13#####".PHP_EOL);
//Q13. 次の user_data に、update_data の内容を反映させ、user_data の内容を書き換え、出力して下さい。

$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];

$user_data = array_merge($user_data, $update_data);

print_r($user_data);

echo PHP_EOL;


print("#####q14#####".PHP_EOL);
//Q14. 次の連想配列から全てのキー（添字）を取り出して、キーが数字である通常の配列（添字配列）を作成し、出力して下さい。

$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];


//回答例1(foreach()を使用して新しい配列を作成する)
$new_data = []; //変数を初期化
foreach ($data as $one_data) {
    array_push($new_data, $one_data);
}

print_r($new_data);

echo PHP_EOL;

//回答例2(array_map()を使用する)
$array = array_map('intval',$array);

echo PHP_EOL;


print("#####q15#####".PHP_EOL);
//Q15. age というキーが含まれている場合は OK 、含まれていない場合は NG という文字列が出力されるコードを書いて下さい。

$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];

if (array_key_exists('age',$data1)) {
    print('OK'.PHP_EOL);
} else {
    print('NG'.PHP_EOL);
}
//補足
//array_key_exists()でage というキーが含まれているかどうか確認する

$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];

if (array_key_exists('age', $data2)) {
    print('OK'.PHP_EOL);
} else {
    print('NG'.PHP_EOL);
}

echo PHP_EOL;


print("#####q16#####".PHP_EOL);
//Q16. 次の配列の各要素について、「私の名前は〜です。年齢は〜歳です。」と表示して下さい。

$users = [
    ["name" => "satou", "age" => 22],
    ["name" => "yamada", "age" => 12],
    ["name" => "takahashi", "age" => 32],
    ["name" => "nakamura", "age" => 41]
];

foreach ($users as $key => $user) {
    echo "私の名前は".$user["name"]."です。年齢は".$user["age"]."歳です。".PHP_EOL;
}
//補足
//$usersが多次元連想配列のため、$userも連想配列の値の取り出し方で値を取得する

echo PHP_EOL;


print("#####q17#####".PHP_EOL);
//Q17. 次の Userクラス 内にinfoメソッドを追加し、期待する出力結果になるようにして下さい。

class User
{

    //プロパティ(変数)を宣言する
    private $name;
    private $age;
    private $gender;
    //補足
    //アクセス修飾子の選択は、可能な限り同じクラスの中でのみアクセス可能なアクセス修飾子 private を可能な限り使用する
    //(プログラムの安全性を高めるため。※プロパティは外部から変更されると困るというケースが多い)

    //コンストラクタメソッドを宣言する
    function __construct($user_name, $user_age, $user_gender) { //上記の変数の代入にならない様に変数名は上記プロパティと違うものにする
        $this->name = $user_name;
        $this->age = $user_age;
        $this->gender = $user_gender;
    }

    //結果を出力する
    function info() {
        print("名前:".$this->name.PHP_EOL);
        print("年齢:".$this->age.PHP_EOL);
        print("性別:".$this->gender.PHP_EOL);
    }

}

//新たなオブジェクトを生成する
$user1 = new User("神里", 32, "男");
$user2 = new User("あじー", 32, "男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;


print("#####q18#####".PHP_EOL);
//Q18. 年齢を用いた場合分けを利用して、期待する出力結果になるようなManクラスを作成して下さい。

class Man
{

    private $name;
    private $age;

    function __construct($user_name, $user_age) {
        $this->name = $user_name;
        $this->age = $user_age;
    }

    function introduce() {
        if ($this->age >= 20) {
            print("こんにちは,".$this->name."と申します。宜しくお願いいたします。".PHP_EOL);
        } else {
            print("はいさいまいど〜、".$this->name."です！！！".PHP_EOL);
        }
    }

}

$man1 = new Man("あじー", 32);
$man2 = new Man("ゆたぼん", 10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;


print("#####q19#####".PHP_EOL);
//Q19. 次のコードはエラーが出ます。期待する出力結果となるようにコードを修正して下さい。

class Item
{
    // 以下を修正して下さい

    public $name; //クラス外からアクセスに対応しているアクセス修飾子 public に変更する
    //protected $name;

    function __construct($book_name) {
        $this->name = $book_name;
    }
}
// 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;


print("#####q20#####".PHP_EOL);
//Q20. 次の仕様を満たした上で、期待する出力結果になるようにコードを追加して下さい。
//年齢区分は、幼児(0〜5歳)、子供(6〜12歳)、成人(13〜64歳)、シニア(65〜120歳)の4パターンとします。（この範囲外の年齢については対処しなくてOKです）

class Human
{

    public $name;
    public $age;

    function __construct($user_name, $user_age) {
        $this->name = $user_name;
        $this->age = $user_age;
    }

}

class Zoo
{

    private $name;
    private $entry_fee;

    function __construct($zoo_name, $zoo_entry_fee) {
        $this->name = $zoo_name;
        $this->entry_fee = $zoo_entry_fee;
    }

    function info_entry_fee(Human $human) { //Human は タイプヒンティングと呼ばれるもので、指定されると型にあっていないものが引数にきた場合にエラーが返る
        if ($human->age <= 5) {
            print($human->name."さんの入場料金は ".$this->entry_fee["infant"]." 円です。".PHP_EOL);
        } elseif ($human->age <= 12) {
            print($human->name."さんの入場料金は ".$this->entry_fee["children"]." 円です。".PHP_EOL);
        } elseif ($human->age <= 64) {
            print($human->name."さんの入場料金は ".$this->entry_fee["adult"]." 円です。".PHP_EOL);
        } elseif ($human->age <= 120) {
            print($human->name."さんの入場料金は ".$this->entry_fee["senior"]." 円です。".PHP_EOL);
        }
    }

}

$zoo = new Zoo("旭山動物園",["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま", 3);
$human2 = new Human("ゆたぼん", 10);
$human3 = new Human("あじー", 32);
$human4 = new Human("ぎん", 108);

$humans = [$human1, $human2, $human3, $human4];

foreach ($humans as $human) {
    $zoo->info_entry_fee($human);
}

echo PHP_EOL;


print("#####q21#####".PHP_EOL);
//Q21. FizzBuzz問題の応用問題です。次の仕様、条件を満たすコードを書いて、1から30までの正の整数を期待する出力結果にして下さい。

//回答例1(elseifやelseを活用する)
for($i = 1; $i <= 30; $i++) {
    if ( $i % 105 == 0) {
        echo 'FizzBuzzHoge'. PHP_EOL;
    } elseif ($i % 35 == 0 ) {
        echo 'BuzzHoge'. PHP_EOL;
    } elseif ($i % 21 == 0 ) {
        echo 'FizzHoge'. PHP_EOL;
    } elseif ($i % 15 == 0 ) {
        echo 'FizzBuzz'. PHP_EOL;
    } elseif ($i % 7 == 0 ) {
        echo 'Hoge'. PHP_EOL;
    } elseif ($i % 5 == 0) {
        echo 'Buzz'. PHP_EOL;
    } elseif ($i % 3 == 0) {
        echo 'Fizz'. PHP_EOL;
    } else {
        echo $i. PHP_EOL;
    }
}
//補足
//%は除算をした結果のあまりが値となる
//if文は初めてtureになった条件の{}の中のコードが実行されると、以後のelseifやelseは実行されないため、コードを書く順番が重要である

//回答例2(文字の連結を活用する)
for ($i = 1; $i <= 30; $i++) {
    $result = ''; //変数の初期化

    if ($i % 3 == 0 ) {
        $result .= 'Fizz';
    }
    if ($i % 5 == 0 ) {
        $result .= 'Buzz';
    }
    if ($i % 7 == 0 ) {
        $result .= 'Hoge';
    }
    if ($result == '') {
        $result .= (string) $i;
    }

    echo $result. PHP_EOL;
}
