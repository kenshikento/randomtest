<?php

class CodingFun
{

    public function getFibonacciSequence($resultArraySize)
    {
        $input = $resultArraySize;
        $array = [];
        for ($counter =0; $counter < $input; $counter++) {
         	$array[$counter] = $this->test($counter);
        }
   		  return $array;
    }
  
    public function test ($n)
    {
    	if($n ==0) {
			  return 0;
		  }

  		if($n == 1) {
  			return 1;
  		}		

  		if($n != 0 OR $n != 1) {
  			return ($this->test($n - 1) + $this->test($n-2));
  		}
    }
    
    public function getCustomerBalances($customerTransactions)
    {
        ksort($customerTransactions);
        return $customerTransactions;
    }

    public function getLotteryWinnings($totalWinnings, $winningNumber, $players)
    {
        //
    }
}
