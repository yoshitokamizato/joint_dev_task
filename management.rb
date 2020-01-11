# 課題の回答は task.rb をご利用下さい。
# 回答の出力を確認される際は，「ruby main.rb」をターミナルから実行して下さい。

require './task'
require './message'

class Management
  TASK_RANGE = (1..20).freeze
  @selected_numbers = []

  def initialize
    Message.info
    Message.prompt_input
  end

  def prompt_input
    input = gets.chomp
    check_input(input)
  end

  def error_handling
    Message.error
    Message.info
    Message.prompt_input
    prompt_input
  end

  def check_input(input)
    if input.match(/\A(\d+)\.+(\d+)\z/)
      first = Regexp.last_match(1).to_i
      last = Regexp.last_match(2).to_i
      return error_handling unless first <= last && TASK_RANGE.include?(first) && TASK_RANGE.include?(last)

      @selected_numbers = (first..last).to_a
    else
      @selected_numbers = input.scan(/\d+/)
      return error_handling if @selected_numbers.empty?

      @selected_numbers.each do |number|
        return error_handling unless TASK_RANGE.include?(number.to_i)
      end
    end
  end

  def output_answer
    @selected_numbers.each do |number|
      Message.question_number(number)
      eval("q#{number}", binding, 'task.rb')
    end
  end
end