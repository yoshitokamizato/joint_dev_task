//PHP課題(基礎・応用)の回答例です。


print("#####q1#####".PHP_EOL);
//Q1. 次の配列の最後に "斎藤" を追加し，出力して下さい。

$names = ["田中", "佐藤", "佐々木", "高橋"];

array_push($names,"斎藤");
print_r($names);

echo PHP_EOL;


print("#####q2#####".PHP_EOL);
//Q2. 次の二つの配列を合体させた新しい配列 array を作成し，出力して下さい。

$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

$array = array_merge($array1,$array2);

print_r($array);

echo PHP_EOL;


print("#####q3#####".PHP_EOL);
//Q3. 次の配列の中に 3 がいくつあるかを出力するコードを書き，出力して下さい。
//キーワード：foreach 配列 重複

$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

$count = 0;
foreach($numbers as $number){
   if($number === 3){
      $count++;
   }
}
print_r($count . "回");

echo PHP_EOL;


print("#####q4#####".PHP_EOL);
//Q4. 次の配列から nil の要素を削除し，出力して下さい。（新しい配列を作成せずに実現して下さい）
//キーワード：配列 特定　重複　削除

$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

$sports = array_diff($sports,[null]);
print_r($sports);

echo PHP_EOL;


print("#####q5#####".PHP_EOL);
//Q5. 配列が空であれば true，1つ以上の要素があれば false を出力するコードを書いて下さい。
//配列　空　判定

$array1 = [];
var_export(!empty($array1));

echo PHP_EOL;

$array2 = [1, 5, 8, 10];
var_export(!empty($array2));

echo PHP_EOL;


print("#####q6#####".PHP_EOL);
//Q6. 次の配列から，期待された結果の配列 numbers2 を作成し，出力して下さい。

$numbers1 = [1, 2, 3, 4, 5];

$numbers2 = [];
foreach($numbers1 as $number){
    $number *= 10;
    array_push($numbers2,$number);
}
print_r($numbers2);

echo PHP_EOL;


print("#####q7#####".PHP_EOL);
//Q7. 次の配列の要素を 文字列 から 数字 に変換し，出力して下さい。

$array = ["1", "2", "3", "4", "5"];
$array = array_map('intval',$array);

print_r($array);

echo PHP_EOL;


print("#####q8#####".PHP_EOL);
//Q8. 期待する出力結果になるようにコードを書き加えて下さい。

$programming_languages = ["php","ruby","python","javascript"];
$programming_languages = array_map('ucfirst',$programming_languages);
$upper_case_programming_languages = array_map('strtoupper',$programming_languages);

print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;


print("#####q9#####".PHP_EOL);
//Q9. 次の配列を用いて，期待通りの出力結果になるようにコードを書いて下さい。

$names = ["田中", "佐藤", "佐々木", "高橋"];

$names2 = [];
foreach($names as $key => $name){
    $number = $key + 1;
    $name2 = "会員No.".$number." ".$name;
    array_push($names2,$name2);
}
print_r($names2);

echo PHP_EOL;


print("#####q10#####".PHP_EOL);
//Q10. 次の配列の各要素について， うに という文字列が含まれていれば「好物です」と表示し，そうでなければ「まぁまぁ好きです」と出力するコードを書いて下さい。

$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

foreach($foods as $food){
    if(preg_match('/うに/',$food)){
        print('好物です'.PHP_EOL);
    }else{
        print('まぁまぁ好きです'.PHP_EOL);
    }
}

echo PHP_EOL;


print("#####q11#####".PHP_EOL);
//Q11. 次の配列を用いて，期待する出力結果になるようにコードを書いて下さい。

$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

$sports2 = [];
foreach($sports as $key => $sport){
    if(is_array($sport)){
        $sports2 = array_merge($sports2,$sport);
    }else{
        array_push($sports2,$sport);
    }
}
$sports2 = array_unique($sports2);
$sports2 = array_values($sports2);
$sports3 = [];
foreach($sports2 as $key => $sport){
    $number = $key + 1;
    $sport3 = "No.".$number." ".$sport;
    array_push($sports3,$sport3);
}

print_r("ユーザの趣味一覧".PHP_EOL);
foreach($sports3 as $sport){
    print($sport.PHP_EOL);
}

echo PHP_EOL;


print("#####q12#####".PHP_EOL);
//Q12. 次のハッシュから name の値を出力して下さい。

$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

print_r($data["user"]["name"]);

echo PHP_EOL;


print("#####q13#####".PHP_EOL);
//Q13. 次の user_data に，update_data の内容を反映させ，user_data の内容を書き換え，出力して下さい。

$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

$user_data = $update_data + $user_data;

print_r($user_data);

echo PHP_EOL;


print("#####q14#####".PHP_EOL);
//Q14. 次の連想配列から全てのキー（添字）を取り出して、キーが数字である通常の配列（添字配列）を作成し，出力して下さい。

$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

$new_data = [];
foreach($data as $one_data){
    array_push($new_data,$one_data);
}

print_r($new_data);

echo PHP_EOL;


print("#####q15#####".PHP_EOL);
//Q15. age というキーが含まれている場合は OK ，含まれていない場合は NG という文字列が出力されるコードを書いて下さい。

$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];

if( array_key_exists('age',$data1) ) {
    print('OK'.PHP_EOL);
} else {
    print('NG'.PHP_EOL);
}

$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

if(array_key_exists('age',$data2) ) {
    print('OK'.PHP_EOL);
} else {
    print('NG'.PHP_EOL);
}

echo PHP_EOL;


print("#####q16#####".PHP_EOL);
//Q16. 次の配列の各要素について，「私の名前は〜です。年齢は〜歳です。」と表示して下さい。

$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

foreach($users as $key => $user){
    echo "私の名前は".$user["name"]."です。年齢は".$user["age"]."歳です。".PHP_EOL;
}

echo PHP_EOL;
