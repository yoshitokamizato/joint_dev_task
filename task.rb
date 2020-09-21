# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「ruby main.rb」をターミナルから実行して下さい。

def q1
  names = ["田中", "佐藤", "佐々木", "高橋"]

  # 以下に回答を記載
  # 配列「names」に"斎藤"を追加
  puts names.push "斎藤"
end

def q2
  array1 = ["dog", "cat", "fish"]
  array2 = ["bird", "bat", "tiger"]

  # 以下に回答を記載
  # 配列「array1」と「array2」を結合
  puts array = array1 + array2
end

def q3
  numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9]

  # 以下に回答を記載
  # 配列「numbers」の中から要素「3」の数をカウントして出力
  puts numbers.count(3)
end

def q4
  sports = ["サッカー", "フットサル", nil, "野球", "バスケ", nil, "バレー"]

  # 以下に回答を記載
  # 配列「sports」の中から「nil」を削除して出力（破壊的メソッド）
  p sports.delete(nil)
  # 以下は変更しないで下さい
  p sports
end

def q5
  array1 = []
  array2 = [1, 5, 8, 10]

  # 以下に回答を記載
  # 配列「array1」「array2」の要素が空であるかを判定し、boolで出力
  p array1.empty?
  p array2.empty?
end

def q6
  numbers1 = [1, 2, 3, 4, 5]

  # 以下に回答を記載
  # 配列「numbers1」の各要素を10倍して配列「numbers2」を作成、出力
  puts numbers2 = numbers1.map { |n| n * 10 }
end

def q7
  array = ["1", "2", "3", "4", "5"]

  # 以下に回答を記載
  # 配列「array」の要素を文字列から整数に変換
  p array.map(&:to_i)
  # 以下は変更しないで下さい
  p array
end

def q8
  programming_languages = %w(ruby php python javascript)

  # 以下に回答を記載
  programming_languages.map(&:capitalize!)
  upper_case_programming_languages = programming_languages.map(&:upcase)
  # 以下は変更しないで下さい
  p programming_languages
  p upper_case_programming_languages
end

def q9
  names = ["田中", "佐藤", "佐々木", "高橋"]

  # 以下に回答を記載
  names.each.with_index(1) do |name, i|
    puts "会員No.#{i} #{name}さん"
  end
end

def q10
  foods = %w(いか たこ うに しゃけ うにぎり うに軍艦 うに丼)

  # 以下に回答を記載
  foods.each do |food|
    puts food.include?("うに") ? "好物です" : "まぁまぁ好きです"
    # if food.include?("うに")
    #   puts "好物です"
    # else
    #   puts "まぁまぁ好きです"
    # end
  end
end

def q11
  sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]]

  # 以下に回答を記載
  puts "ユーザーの趣味一覧"
  # flatten(キーと値を展開),uniq(重複を取り除く),each.with_index(繰り返し処理でインデックス番号をつける)
  sports.flatten.uniq.each.with_index(1) do |sport, i|
    puts "No#{i} #{sport}"
  end
end

def q12
  data = { user: { name: "satou", age: 33 } }

  # 以下に回答を記載
  # ハッシュ「data」からnameの値を出力
  p data[:user][:name]
end

def q13
  user_data = { name: "神里", age: 31, address: "埼玉" }
  update_data = { age: 32, address: "沖縄" }

  # 以下に回答を記載
  # update_dataのハッシュをuser_dataに統合（mergeする）
  puts user_data.merge!(update_data)
end

def q14
  data = { name: "satou", age: 33, address: "saitama", hobby: "soccer", email: "hoge@fuga.com" }

  # 以下に回答を記載
  # 空の配列「keys」を作る
  keys = []
  # キーの値を繰り返し取り出して、配列「keys」へ入れていく。
  data.each_key do |key|
    keys << key
  end
  # 配列「keys」を出力
  p keys
end

def q15
  data1 = { name: "saitou", hobby: "soccer", age: 33, role: "admin" }
  data2 = { name: "yamada", hobby: "baseball", role: "normal" }

  # 以下に回答を記載
  # 三項演算子を活用。ハッシュがキー「age」を持っているかを条件として出力する言葉を分岐させる。
  puts (data1.has_key?(:age)) ? "OK" : "NG"
  puts (data2.has_key?(:age)) ? "OK" : "NG"
end

def q16
  users = [
    { name: "satou", age: 22 },
    { name: "yamada", age: 12 },
    { name: "takahashi", age: 32 },
    { name: "nakamura", age: 41 },
  ]

  # 以下に回答を記載
  # 配列「users」の要素を変数「user」に代入して取り出し
  users.each do |user|
    # nameの値、ageの値をそれぞれ分けて出力
    puts "「私の名前は#{user[:name]}です。年齢は#{user[:age]}歳です」"
  end
end

class UserQ17
  # 以下に回答を記載
  attr_accessor :name, :age, :gender

  def initialize(name:, age:, gender:)
    @name = name
    @age = age
    @gender = gender
  end

  def info
    puts <<~TEXT
           名前：#{@name}
           年齢：#{@age}
           性別：#{@gender}
         TEXT
  end
end

def q17
  # ここは変更しないで下さい（ユーザー情報は変更していただいてOKです）
  user1 = UserQ17.new(name: "神里", age: 32, gender: "男")
  user2 = UserQ17.new(name: "あじー", age: 32, gender: "男")

  user1.info
  puts "-------------"
  user2.info
end

class UserQ18
  # 以下に回答を記載
  def initialize(name:, age:)
    @name = name
    @age = age
  end

  def introduce
    puts @age > 20 ? "こんにちは，#{@name}と申します。宜しくお願いいたします。" : "はいさいまいど〜，#{@name}です！！！"
  end
end

def q18
  # ここは変更しないで下さい
  user1 = UserQ18.new(name: "あじー", age: 32)
  user2 = UserQ18.new(name: "ゆたぼん", age: 10)

  puts user1.introduce
  puts user2.introduce
end

class Item
  # 以下を修正して下さい
  attr_accessor :name

  def initialize(name:)
    @name = name
  end
end

def q19
  # ここは変更しないで下さい
  book = Item.new(name: "ゼロ秒思考")
  puts book.name
end

class UserQ20
  # 以下に回答を記載
  attr_accessor :name, :age

  def initialize(name:, age:)
    @name = name
    @age = age
  end
end

class Zoo
  # 以下に回答を記載

  # "#{@name}の入場料金は#{entry_fee[@age]}円です。"

  # def info_entry_fee
  # end
end

def q20
  # ここは変更しないで下さい（動物園・ユーザー情報は変更していただいてOKです）
  zoo = Zoo.new(name: "旭山動物園", entry_fee: { infant: 0, children: 400, adult: 800, senior: 500 })

  users = [
    UserQ20.new(name: "たま", age: 3),
    UserQ20.new(name: "ゆたぼん", age: 10),
    UserQ20.new(name: "あじー", age: 32),
    UserQ20.new(name: "ぎん", age: 108),
  ]

  users.each do |user|
    zoo.info_entry_fee(user)
  end
end
