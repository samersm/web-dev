puts "Hello, My Name is " + "Samer"

# Math
puts 2 + 2
puts 4 - 2
puts 5 * 5
puts 20 / 10

# Variable
name_1 = "Jack"
puts name_1
puts "Hi, My Name is #{name_1}"

# String
puts "hello".length

# Boolean
puts 1 == 1
puts 3 == 1
puts 2 != 1
puts 3 > 1

# if Statement
user = 100

if (user > 50)
    puts "Hey, we've hit 50 users!"
elsif
    puts "we got 50 users!"
else
    puts "Haven't hit 50 yet.."
end

# another way for if statement
user_signed_in = true
paying_user = true

puts user_signed_in && paying_user ? "Welcome to Netflix" : "Sign Up"

# Arrays
array_of_names = ["John", "Mary", "Joe"]
array_of_names << "Jane"
array_of_names.push("Tom")
array_of_names.unshift("Adam")
print array_of_names
print "\n"
puts array_of_names[2]
puts array_of_names.last

# Hashes
hash_of_names = { first_name: "Roman", last_name: "Doe", email: "joe@example.com"}
puts hash_of_names[:first_name]

# Loop
player_scores = [50, 100, 30, 60]
player_scores.each do |x|
   if x > 50
        puts "Player Score: #{x}" 
   end
end
# to be continued..


# Methods
def say_hello
    puts "Hello, world!"
end

say_hello
# to be continued..


# Class
class User
    attr_accessor :favorite_color
    def initialize(fname, lname)
        @first_name = fname
        @last_name = lname
    end
    def say_name
       puts "Hi, I'm #{@first_name}" 
    end
    def post_tweet
       puts "Tweet posted." 
    end
end

user1 = User.new("Neko", "Romania")
user2 = User.new("Mickeal", "Angelo")


user1.post_tweet
user1.say_name
user2.say_name

# inheritance
class Admin < User
    def say_name
        super
        puts "I'm an admin user"
    end
end

admin_user = Admin.new("William", "Arthur")
puts admin_user.inspect
admin_user.say_name