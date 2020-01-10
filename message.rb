# 課題の回答は task.rb をご利用下さい。
# 回答の出力を確認される際は，「ruby main.rb」をターミナルから実行して下さい。

module Message
  module_function

  def info
    puts <<~TEXT
      ********** 使用方法 **********
      12 と入力 -> q12 を実行
      3..5 と入力 -> q3 〜 q5を実行
      ******************************
    TEXT
  end

  def prompt_input
    print '実行する問題番号を入力して下さい: '
  end

  def error
    puts <<~TEXT

      【！】入力形式に誤りがあります
      （Control + C で強制終了できます）

    TEXT
  end

  def question_number(number)
    puts "\n********** 問#{number} **********"
  end
end