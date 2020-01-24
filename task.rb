# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「ruby main.rb」をターミナルから実行して下さい。

def q1
  names = ["田中", "佐藤", "佐々木", "高橋"]

  # 以下に回答を記
  #方法その１
  names << "斎藤"

  #方法その2
  #num = names.length
  #names[num] = "斎藤"

  #方法その3
  #num = names.size
  #names[num] = "斎藤"

  #方法その4
  #num = names.count
  #names[num] = "斎藤"

  puts "出力にputsを使用した場合"
  puts names
  puts "--------------------------------------------------------------------"
  puts "出力にpを使用した場合"
  p names
end

def q2
  array1 = %w(dog cat fish)
  array2 = %w(bird bat tiger)

  # 以下に回答を記載
  #方法その１
  #array2.each do |animal|
  #  array1 << animal
  #end
  #array = array1

  #方法その2
  array = array1 + array2

  #方法その3
  #array = array1.concat(array2)

  p array
end

def q3
  numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9]

  # 以下に回答を記載
  #方法その１
  ans = numbers.count(3)

  #方法その2
  #ans = 0
  #numbers.each do |number|
  #  if number == 3
  #  ans += 1
  #  end
  #end


  puts ans
end

def q4
  sports = ["サッカー", "フットサル", nil, "野球", "バスケ", nil, "バレー"]

  # 以下に回答を記載
  p sports.compact!

end

def q5
  array1 = []
  array2 = [1, 5, 8, 10]

  # 以下に回答を記載
  #方法その１
  #def arrayCheck1(array)
  #  if array.count >= 1
  #    puts false
  #  else
  #    puts true
  #  end
  #end

  #arrayCheck1(array1)
  #arrayCheck1(array2)

  #方法その2
  #def arrayCheck2(array)
  #  puts array.count == 0
  #end

  #  arrayCheck2(array1)
  #  arrayCheck2(array2)

  #方法その3
  puts array1.empty?
  puts array2.empty?
end

def q6
  numbers1 = [1, 2, 3, 4, 5]

  # 以下に回答を記載
  #方法その1
  #numbers2 = []
  #numbers1.each do |number|
  #  numbers2 << number*10
  #end

  #方法その2
  numbers2 =  numbers1.map{|num| num*10}

  p numbers2
end

def q7
  array = ["1", "2", "3", "4", "5"]

  # 以下に回答を記載
  #方法その１
  #i = 0
  #array.each do |element|
  #  array[i] = element.to_i
  #  i+=1
  #end

  #方法その2
  p array.map!(&:to_i)
end

def q8
  programming_languages = %w(ruby php python javascript)

  # 以下に回答を記載
  #方法その1
  #upper_case_programming_languages = []
  #i = 0
  #programming_languages.each do |lang|
  #  programming_languages[i] = lang.capitalize
  #  upper_case_programming_languages << lang.upcase
  #  i+=1
  #end

  #方法その2
  programming_languages.map!(&:capitalize)
  upper_case_programming_languages = programming_languages.map(&:upcase)

  p programming_languages
  p upper_case_programming_languages
end

def q9
  names = ["田中", "佐藤", "佐々木", "高橋"]

  # 以下に回答を記載
  #方法その1
  #i = 1
  #names.each do |name|
  #  puts "会員No.#{i}\s#{name}さん"
  #  i+=1
  #end
  #方法その2
  names.each.with_index(1) do |name, i|
    puts "会員No.#{i}\s#{name}さん"
  end

end

def q10
  foods = %w(いか たこ うに しゃけ うにぎり うに軍艦 うに丼)

  # 以下に回答を記載
  foods.each do |food|
    if food.include?("うに")
      p "#{food}は好物です"
    else
      p "#{food}はまぁまぁ好きです"
    end
  end

end

def q11
  sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]]

  # 以下に回答を記載
  puts "ユーザーの趣味一覧"
  #sports = sports.flatten! | sports
  #sports.flatten!.uniq!
  sports.flatten!.uniq!.each.with_index(1) do |sport, i|
    p "会員No.#{i}\s#{sport}"
  end
end

def q12
  data = { user: { name: "satou", age: 33 } }

  # 以下に回答を記載
  p data[:user][:name]
end

def q13
  user_data = { name: "神里", age: 31, address: "埼玉" }
  update_data = { age: 32, address: "沖縄" }

  # 以下に回答を記載
  #方法その１
  #update_data.keys.each do |key|
  #  if user_data.keys.include?(key)
  #    user_data[key] = update_data[key]
  #  end
  #end

  #方法その2
  puts user_data.merge!(update_data)
end

def q14
  data = { name: "satou", age: 33, address: "saitama", hobby: "soccer", email: "hoge@fuga.com" }

  # 以下に回答を記載
  data_keys = data.keys
  p data_keys
end

def q15
  data1 = { name: "saitou", hobby: "soccer", age: 33, role: "admin" }
  data2 = { name: "yamada", hobby: "baseball", role: "normal" }

  # 以下に回答を記載
  def if_age_present?(data)
    #if data.keys.include?(:age)
    #  p "OK"
    #else
    #  p "NG"
    #end
    data.keys.include?(:age) ? (p "OK") : (p "NG")
  end

  if_age_present?(data1)
  if_age_present?(data2)
end

def q16
  users = [
    { name: "satou", age: 22 },
    { name: "yamada", age: 12 },
    { name: "takahashi", age: 32 },
    { name: "nakamura", age: 41 }
  ]

  # 以下に回答を記載
  users.each do |user|
    puts "私の名前は#{user[:name]}です。年齢は#{user[:age]}歳です"
  end
end

class UserQ17
  # 以下に回答を記載

  #変数の値を更新しないからいらない
  #attr_accessor :name, :age, :gender, :admin

  #def initialize(name:, age:, gender:, admin:)
  #  @name = name
  #  @age = age
  #  @gender = gender
  #  @admin = admin
  #end

  #オプション引数を使用する場合。多分何か違うと思いますが
  def initialize(**params)
    @name = params[:name]
    @age = params[:age]
    @gender = params[:gender]
    @admin = params[:admin]
  end

  def info
    puts <<~EOS
      名前：#{@name}
      年齢：#{@age}
      性別：#{@gender}
      管理者権限：#{if_admission_ok?}
    EOS
  end

  private

  def if_admission_ok?
    if @admin == true
      return "有り"
    else
      return "無し"
    end
  end

end

def q17
  # ここは変更しないで下さい（ユーザー情報は変更していただいてOKです）
  user1 = UserQ17.new(name: "神里", age: 32, gender: "男", admin: true)
  user2 = UserQ17.new(name: "Popy", age: 732, gender: "不明", admin: false)

  user1.info
  puts "-------------"
  user2.info
end

class UserQ18
  # 以下に回答を記載

  #変数の値を更新しないからいらない
  #attr_accessor :name, :age

  def initialize(name:, age:)
    @name = name
    @age = age
  end

  def introduce
    if @age >= 20
      "こんにちは，#{@name}と申します。宜しくお願いいたします。"
    else
      "はいさいまいど〜，#{@name}です！！！ピッチピチの#{@age}歳です！！！"
    end
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

  def initialize(name:, entry_fee:)
    @name = name
    @entry_fee = entry_fee
  end

  def info_entry_fee(user)

    fee_divisions =  [[0, 5], [6, 12], [13, 64], [65, 120]]

    fee_divisions.each_with_index do |division, i|

        if user.age >= division[0] && user.age <= division[1]
            puts "#{user.name}さんの入場料金は\s#{@entry_fee.values[i]}\s円です。"
        end

    end

  end
end


def q20
  # ここは変更しないで下さい（動物園・ユーザー情報は変更していただいてOKです）
  zoo = Zoo.new(name: "旭山動物園", entry_fee: { infant: 0, children: 400, adult: 800, senior: 500 })

  users = [
    UserQ20.new(name: "たま", age: 3),
    UserQ20.new(name: "ゆたぼん", age: 10),
    UserQ20.new(name: "あじー", age: 32),
    UserQ20.new(name: "ぎん", age: 108)
  ]

  users.each do |user|
    zoo.info_entry_fee(user)
  end
end
