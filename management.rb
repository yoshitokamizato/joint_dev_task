# 課題の回答は task.rb をご利用下さい。
# 回答の出力を確認される際は，「ruby main.rb」をターミナルから実行して下さい。

require './task'
require './message'

class Management
  TASK_RANGE = (1..20).freeze
  @start_number = 0
  @end_number = 0

  def initialize
    Message.info
    Message.prompt_input
  end

  def prompt_input
    input = gets.chomp.match(/\A(\d+)(\.*)(\d*)\z/)
    check_input(input)
  end

  def error_handling
    Message.error
    Message.info
    Message.prompt_input
    prompt_input
  end

  def check_input(input)
    error_handling if input.nil?

    @start_number = input[1].to_i
    @end_number = input[3].empty? ? @start_number : input[3].to_i

    error_handling unless TASK_RANGE.include?(@start_number) && TASK_RANGE.include?(@end_number)
  end

  def output_answer
    input_range = @start_number..@end_number

    input_range.each do |number|
      Message.question_number(number)
      eval("q#{number}", binding, 'task.rb')
    end
  end
end