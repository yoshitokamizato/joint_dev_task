# 共同開発問題集
Rubyの基礎力を高めることがプログラマーとしての生産性を高めてくれます

現場に入った時にコードをスラスラ書くためにも、スラスラ読み解くためにも、ぜひ問題をこなして基礎力を磨いていってください

## Q1. 以下の配列から、期待された結果の配列を作成してください

```
[1, 2, 3, 4, 5]
```

期待する配列

```
[1, 3, 5, 7, 9]
```

## Q2. 以下の配列から、期待された結果の配列を作成してください

```
["田中", "佐藤", "佐々木", "高橋"]
```

期待する配列

```
["田中", "佐藤", "佐々木", "高橋", "斎藤"]
```

## Q3. 以下の文字列の配列を数字だけの配列に変換してください

```
["1", "2", "3", "4", "5"]
```

期待する配列

```
[1, 2, 3, 4, 5]
```

## Q4. 以下の二つの配列を合体させた新しい配列を作成してください

```
["dog", "cat", "fish"]
["bird", "bat", "tiger"]
```

## Q5. 以下の配列の中に3がいくつあるか数えるコードを書いてください

```
[1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9]
```

## Q6. 配列が空であればtrue、1つ以上の要素があればfalseを返すコードを書いてください

例

```
[]
-> true

[1, 5, 8, 10]
-> false
```

## Q7. 配列であればtrue、配列でなければfalseを返すコードを書いてください

例

```
[]
-> true

{}
-> false
```

## Q8. mapとは異なるメソッドを使って以下と全く同じ処理を実現させてください

```
numbers = ["6", "5", "3", "7", "1"]
p numbers.map {|item| item.to_i }
-> [6, 5, 3, 7, 1]
```

## Q9. 以下の配列を用いて、期待通りの出力結果になるようにコードを書いてください

```
["田中", "佐藤", "佐々木", "高橋"]
```

期待結果

```
会員No.1 田中さん
会員No.2 佐藤さん
会員No.3 佐々木さん
会員No.4 高橋さん
```

## Q10.  以下の配列の最後に山下を追加してください

```
["田中", "佐藤", "佐々木", "高橋"]
```

## Q11 以下の配列から重複する部分だけを抽出した新しい配列を作成してください

```
favorite_sport = ["フットサル", "バスケット"]
selected_sport = ["野球", "ボルダリング", "サッカー", "フットサル"]
```

Q12 以下の配列を用いた繰り返し処理において、「うに」が含まれていれば「好物です」と表示し、そうでなければ「まぁまぁ好きです」と表示するようにコードを書いてください

```
["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼"]
```

## Q13. 以下の配列から奇数だけを選んだ新しい配列を作成してください

```
[1, 2, 3, 4, 5]
```

## Q14. 以下の配列からnilの要素を削除してください

```
["サッカー", "フットサル", nil, "野球", "バスケ", nil, "バレー"]
```

## Q15. 以下の配列からadminの数を数えてください

```
["admin", "user", "user", "admin", "admin"]
```

## Q16. 以下の配列をもとに期待する出力結果になるようにコードを書いてください

```
["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]]
```

期待結果

```
ユーザーの趣味一覧
No1 サッカー
No2 バスケ
No3 野球
No4 フットサル
No5 水泳
No6 ハンドボール
No7 卓球
No8 ボルダリング
```

## Q17. 以下のハッシュから name の値を取り出してください

```
{name: "satou", age: 33}
```

## Q18. 以下のハッシュから name の値を取り出して下さい

```
{user: {name: "satou", age: 33}}
```

## Q19. 以下の既存で存在する user_data に対して、 update_data の内容を反映させ user_data の内容を書き換えて下さい

```
user_data = {name: "神里", age: 31, address: "埼玉"}
update_data = {age: 32, address: "沖縄"}
```

## Q20. 以下の全てのハッシュの name と age の値を取り出し、「私の名前は〜です年齢は〜歳です」と表示してください

```
{name: "satou", age: 22}
{name: "yamada", age: 12}
{name: "takahashi", age: 32}
{name: "nakamura", age: 41}
```

## Q21. 以下の配列から全てのキーを取り出してターミナルに出力してください

```
{name: "satou", age: 33, address: "saitama", hobby: "soccer", email: "hoge@fuga.com"}
```

## Q22. ハッシュを格納した以下の配列を使用し、期待した結果になるようにコードを書いてください

```
users = [
{name: "satou", age: 33, address: "saitama", hobby: "soccer", email: "hoge@fuga.com"},
{},
{name: "yamada", age: 22, address: "tokyo", hobby: "soccer", email: "hoge@fuga.com"},
{},
{name: "suzuki", age: 44, address: "yamaguchi", hobby: "baseball", email: "hoge@fuga.com"}
]
```

期待結果

```
ハッシュにデータがある場合：No〜 名前〜、年齢〜、趣味〜、メール〜
ハッシュがからの場合：データなし
```

## Q23. 以下のハッシュをキー、バリュー含め全て配列に変換してください

```
{name: "satou", age: 33, address: "saitama", hobby: "soccer", email: "hoge@fuga.com"}
```

変換後の配列

```
[:name, "satou", :age, 33, :address, "saitama", :hobby, "soccer", :email, "hoge@fuga.com"]
```

## Q24. 以下のハッシュにおいて `age` というキーが含まれている場合は `OK` 、含まれていない場合は `NG` が表示されるようにしてください

```
{ name: "saitou", hobby: "soccer", age: 33, role: "admin" }
{ name: "yamada", hobby: "baseball", role: "normal" }
```

## Q25.  配列 `keys` の各要素を、ハッシュ `user` がキーとして保持するかどうかを判定するコードを書いてください

```
keys = [:age, :name, :hobby, :address]
user = { name: "saitou", hobby: "soccer", age: 33, role: "admin" }
```

例（意図が伝われば文章は自由に変えていただいて大丈夫です）

```
userにはageというキーがあります
userにはaddressというキーがありません
```

## Q26. 以下の２つのハッシュを合体させた新しいハッシュを作成してください

```
{C: "printf", COBOL: "DISPLAY", Go: "fmt.Print", Java: "System.out.println"}
{JavaScript: "console.log", R: "print", Ruby: "puts"}
```

## Q27. 名前、年齢、性別、管理者権限の情報を持ったユーザークラスを定義してインスタンスを作成してください管理者権限の有無はtrueかfalseで表してください

## Q28.作成した Userクラス からインスタンスを生成、 infoメソッド を実行し、目標の出力になるようにコードを書き足してください
＊ user2 の name age gender に関してはご自分の情報で大丈夫です

```
class User

~~~~~

end

user1 = User.new(name: "神里", age: 32, gender: "男", admin: true)
user2 = User.new(name: "あじー", age: 32, gender: "男", admin: false)

user1.info
puts "-----------"
user2.info
```

出力結果

```
名前：神里
年齢：32
性別：男
管理者権限：有り
-----------
名前：あじー
年齢：32
性別：男
管理者権限：無し
```

## Q29.次のようなコードを書いて、目標の出力になるようなUserクラスを定義してください
(名前情報は各自変えて大丈夫です！)
ただし、今回は attr_accessor attr_reader attr_writer は使用しないでください

```
user = User.new(name: "あじー")

puts user.name

user.name = "tanakin"

puts user.name
```

出力結果

```
あじー
tanakin
```

## Q30. 以下のようなコードを書いて、期待した出力になるようなUserクラスを定義してください

```
user = User.new(name: "あじー", age: 32)

puts user.introduce

user2 = User.new(name: "ゆたぼん", age: 10)

puts user2.introduce
```

期待する出力結果

```
こんにちは、あじーと申します宜しくお願いいたします
はいさいまいど〜、ゆたぼんです！！！
```

## Q31. 以下のようなコードを書くとエラーが出たので期待する出力結果となるように修正してください

```
class Item
  def initialize(name)
    @name = name
  end
end

book = Item.new("ゼロ秒思考")

puts book.name
```

期待する出力結果

```
ゼロ秒思考
```

## Q32.次の仕様を満たすコードを書いてください

- 名前、年齢の情報を持った「ユーザークラス」を定義してください
- 名前、入場料金の情報を持った「動物園クラス」を定義してください
- 入場料金は、幼児(0~5歳)、子供(6~12歳)、成人(13~64歳)、シニア(65~120歳)の4パターン設定してください(金額はお任せします)
- 動物園クラスに、ユーザークラスから生成されたインスタンスを受け取って、受けとったユーザーの年齢に応じて、入場料金を返す「check_entry_feeメソッド」を定義してください(年齢として無効な値が渡った場合は「無効な値です」と返してください)

## Q33.  次の指定のキー name, age, address, tell が、Hash値のキーとして過不足無く含まれているかを判定するコードを書いてください

-例

```
{name: "あじー", age: 32, address: "札幌", tell: "090-000-000"}
このhashに対して実行する場合は true が返る
{name: "あじー", age: 32, address: "札幌"}
この場合は指定のキー tell が少ないので false が返る
```


## Q34.次のコードが成り立つようにコードを書き加えてください

```
programming_language = ["ruby", "php", "python", "javascript"]

p programming_language
p upper_case_programming_language
```

出力結果

```
["Ruby", "Php", "Python", "Javascript"]
["RUBY", "PHP", "PYTHON", "JAVASCRIPT"]
```

## Q35 2つのデータベースからユーザーネーム・学習項目・合計学習時間のデータを取得したら以下のようになりました

```
[["田中", "JavaScript"], 30]
```

上記の配列を以下のようなハッシュに変換してください

```
{"user_name" => "田中", "learning_contents" => "JavaScript", "learning_time" => 30}
```

## Q36 2つのデータベースからユーザーネーム・学習項目・合計学習時間のデータを取得したら以下のようになりました

```
{["田中", "JavaScript"]=>30}
```

上記のハッシュを以下のようなハッシュに変換してください

```
{"user_name" => "田中", "learning_contents" => "JavaScript", "learning_time" => 30}
```

## Q37 2つのデータベースからユーザーネーム・学習項目・合計学習時間のデータを取得したら以下のようになりました

```
{["田中", "HTML"]=>30, ["斎藤", "JavaScript"]=>50}
```

上記のハッシュを以下のようなハッシュの配列に変換してください

```
[{"user_name" => "田中", "learning_contents" => "HTML", "learning_time" => 30}, {"user_name" => "斎藤", "learning_contents" => "JavaScript", "learning_time" => 50}]
```
