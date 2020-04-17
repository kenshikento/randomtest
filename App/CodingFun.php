<?php

namespace App;

class CodingFun
{
    public function getFibonacciSequence($resultArraySize)
    {
        $input = $resultArraySize;
        $array = [];
        
        for ($counter =0; $counter < $input; $counter++) {
            $array[$counter] = $this->generateFib($counter);
        }

        return $array;
    }
  
    public function generateFib($n) : int
    {
    	if ($n == 0) {
            return 0;
		}

  		if ($n == 1) {
  		    return 1;
  		}		

  		if($n != 0 OR $n != 1) {
            return ($this->generateFib($n - 1) + $this->generateFib($n-2));
  		}
    }
    
    public function getCustomerBalances($customerTransactions) : array
    {
        $data = [];
        
        ksort($customerTransactions);

        foreach($customerTransactions as $key => $value) {
            $arrays = explode("=", $value);

          	if (array_key_exists($arrays[0],$data)) {
      		    $data[$arrays[0]] += $arrays[1];
          	} else {
          		$data[$arrays[0]] = $arrays[1];
          	}
        }

        return $data;
    }

    public function getLotteryWinnings($totalWinnings, $winningNumber, $players)
    {
    	$winners = [];

  		foreach ($players as $key => $value) {
			if ($value === $winningNumber) {
                $winners[] = $key;
		    }  			
  	    }

		$winnerCount = count($winners);
    
        if (!$winnerCount AND $winnerCount < 1) {
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

    public function sortLotteryWinners() {

    }
}

