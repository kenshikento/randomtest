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
        $array = [];
        $array1 = [];
        foreach($customerTransactions as $key => $value) {
        $arrays = explode("=", $value);
      	if(array_key_exists($arrays[0],$array1)) {
      		$array1[$arrays[0]] += $arrays[1];
      	} else {
      		$array1[$arrays[0]] = $arrays[1];
      	}
      }
        return $array1;
    }

    public function getLotteryWinnings($totalWinnings, $winningNumber, $players)
    {
    	$winners = [];
  		foreach($players as $key => $value) {
			  if($value === $winningNumber) {
			  	$winners[] = $key;
		    }
  			
  		}

		$winnerCount = count($winners);
    
    if(!$winnerCount) {
      $emptyResult = [];
      return $emptyResult;
    }
    
		$playAward = $totalWinnings / $winnerCount;
		$list = [];
    
		foreach($winners as $value) {
			  $list[$value] = $playAward;
		}
    
    ksort($list);
		  return $list;
    }
}
