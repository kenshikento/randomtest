# randomtest

## Question 1 : 
Write a function that returns an array containing numbers within the Fibonacci sequence. 
The size of the array will be provided as an input parameter.

Hint: Each number in the sequence is the sum of the two numbers that precede it. E.g. 0,1,1,2,3,5, etc.

## Question 2 

Write a function that returns an array of customers along with their account balance.
An array containing customer names and transaction values will be provided as an input parameter. 
This array will contain string values in the format 'CUSTOMERNAME=PENCE'. For example, 'JOHN=9900'.
The return array must contain key => value pairs where the key is the customer name in LOWER case and the integer value is the balance in pence (sum of transaction values).
The array must be returned in alphabetical order based upon the key names.

## Question 3 

A six digit lottery number is drawn and compared to numbers previously selected by players. 
Players whose six digit number matches the number in the lottery draw split the winnings equally amongst each other.
Write a function that calculates the winnings for players participating in a lottery.
The six digit lottery number, total winnings and an array containing player data will be provided as input parameters.
The function should return a key => value array containing the player name for the key and the winnings for the player as the value.
Only winning players should be returned within the result.
The result should be in alphabetical order based upon the players name.

## Run Test
- Run `./vendor/bin/phpunit tests/CodingFunTest.php `