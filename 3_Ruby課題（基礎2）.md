## Q11. 次の配列を用いて，期待する出力結果になるようにコードを書いて下さい。

```
sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]]
```

期待する出力結果

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

## Q12. 次のハッシュから `name` の値を出力して下さい。

```
data = { user: { name: "satou", age: 33 } }
```

## Q13. 次の `user_data` に，`update_data` の内容を反映させ，`user_data` の内容を書き換え，出力して下さい。

```
user_data = { name: "神里", age: 31, address: "埼玉" }
update_data = { age: 32, address: "沖縄" }
```

## Q14. 次の配列から全てのキーを取り出した配列を作成し，出力して下さい。

```
data = { name: "satou", age: 33, address: "saitama", hobby: "soccer", email: "hoge@fuga.com" }
```

## Q15. `age` というキーが含まれている場合は `OK` ，含まれていない場合は `NG` という文字列が出力されるコードを書いて下さい。

例

```
data1 = { name: "saitou", hobby: "soccer", age: 33, role: "admin" }
# 実行結果
OK

data2 = { name: "yamada", hobby: "baseball", role: "normal" }
# 実行結果
NG
```

## Q16. 次の配列の各要素について，「私の名前は〜です。年齢は〜歳です。」と表示して下さい。

```
users = [
  { name: "satou", age: 22 },
  { name: "yamada", age: 12 },
  { name: "takahashi", age: 32 },
  { name: "nakamura", age: 41 }
]
```

## Q17. 次の Userクラス 内にコードを追加し，期待する出力結果になるようにして下さい。

```
class User

# コードを追加

end

user1 = User.new(name: "神里", age: 32, gender: "男", admin: true)
user2 = User.new(name: "あじー", age: 32, gender: "男", admin: false)

user1.info
puts "-------------"
user2.info
```

期待する出力結果

```
名前：神里
年齢：32
性別：男
管理者権限：有り
-------------
名前：あじー
年齢：32
性別：男
管理者権限：無し
```

## Q18. 年齢を用いた場合分けを利用して，期待する出力結果になるようなUserクラスを作成して下さい。

```
# コードを追加

user1 = User.new(name: "あじー", age: 32)
user2 = User.new(name: "ゆたぼん", age: 10)

puts user1.introduce
puts user2.introduce
```

期待する出力結果

```
こんにちは，あじーと申します。宜しくお願いいたします。
はいさいまいど〜，ゆたぼんです！！！
```

## Q19. 次のコードはエラーが出ます。期待する出力結果となるようにコードを修正して下さい。

```
class Item
  def initialize(name)
    @name = name
  end
end

book = Item.new(name: "ゼロ秒思考")
puts book.name
```

期待する出力結果

```
ゼロ秒思考
```

## Q20. 次の仕様を満たした上で，期待する出力結果になるようにコードを追加して下さい。

- 年齢区分は，幼児(0〜5歳)，子供(6〜12歳)，成人(13〜64歳)，シニア(65〜120歳)の4パターンとします。（この範囲外の年齢については対処しなくてOKです）

```
class User

  # コードを追加

end

class Zoo

  # コードを追加

end

zoo = Zoo.new(name: "旭山動物園", entry_fee: { infant: 0, children: 400, adult: 800, senior: 500 })

users = [
  User.new(name: "たま", age: 3),
  User.new(name: "ゆたぼん", age: 10),
  User.new(name: "あじー", age: 32),
  User.new(name: "ぎん", age: 108)
]

users.each do |user|
  zoo.info_entry_fee(user)
end
```

期待する出力結果

```
たまさんの入場料金は 0 円です。
ゆたぼんさんの入場料金は 400 円です。
あじーさんの入場料金は 800 円です。
ぎんさんの入場料金は 500 円です。
```
