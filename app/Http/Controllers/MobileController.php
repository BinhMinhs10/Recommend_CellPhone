<?php

namespace App\Http\Controllers;

use App\Mobilephones;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function index(){
    	$mobiles = Mobilephones::all();
        return view('home',['mobiles'=>$mobiles]);
    }
    public function topsis(Request $request){
    	// number of result after using topsis
    	$num_result = 6;
    	
    	// calculate weight of cretical
    	$dj = array('screen_size' => 0.0533,'camera_back' => 0.0446,'camera_before' => 0.0203,'CPU' => 0.0211,'battery' => 0.0241); 
    	$input = $request->except('_token');
    	$sum = 0;    	
    	foreach ($input as $key => $value) {
    		$B[$key] = $dj[$key] * $value / 5;
    		$sum+=$B[$key];
    	}
    	foreach ($B as $key => $value) {
    		$B[$key] = $value / $sum;
    	}
    	// TOPSIS
    	// normalized decision matrix follow vector
    	$step1 = function ($B){
    		$mobiles = Mobilephones::all();    		
	    	foreach ($B as $key => $weight) {
	    		$sum = 0;
	    		foreach ($mobiles as $mobile) {
	    			$sum += pow($mobile[$key],2); 
	    		}
	    		$sqrt_sum[$key] = sqrt($sum);
	    		foreach ($mobiles as $index => $mobile) {
	    			$a[$index][$key] = $mobile[$key] / $sqrt_sum[$key];
	    		}
	    	}  
	    	return $a;
    	};
    	// Calculate the weighted normalized decision matrix
    	$step2 = function ($B , $a){
			foreach ($a as $index => $mobile) {
				foreach ($B as $key => $weight) {
    				$V[$index][$key] = $mobile[$key] * $weight;
	    		}
    		}
    		return $V;
    	};
    	// Calculate the ideal solution V * and the negative ideal solution V –
    	// 
    	$step3 = function($V, $B){
    		foreach ($B as $key => $value) {
    			foreach ($V as $index => $mobile) {
    				// var_dump($mobile);
    				$param[$index] =  $mobile[$key];
    			}
    			
    			$V_plus[$key] = max($param);

    			$V_subtract[$key] = min($param);
    		}
    		// var_dump($V_plus);
    		// var_dump($V_subtract);
    		return [$V_plus, $V_subtract];
    		
    	};
    	// Calculate the separation measures, using the m-dimensional Euclidean distance
    	$step4 = function($V_plus, $V_subtract, $V, $B){
    		foreach ($V as $index => $row) {
    			$sum_plus = 0; $sum_subtract = 0;
    			foreach ($B as $key => $value) {
    				$sum_plus += pow(($row[$key]-$V_plus[$key]),2);
    				$sum_subtract += pow(($row[$key]-$V_subtract[$key]),2);
    			}
    			$C[$index] = sqrt($sum_subtract) / (sqrt($sum_subtract) + sqrt($sum_plus));
    		}
    		return $C;
    	};
    	$a = $step1($B);
    	$V = $step2($B, $a);
    	// var_dump($V);
    	$idealSolv = $step3($V, $B);
    	$C = $step4($idealSolv[0], $idealSolv[1], $V, $B);
    	arsort($C);
    	// var_dump($C);
    	$count = 0;
    	foreach ($C as $key => $value) {
    		// var_dump($key);
    		$keyMobile[] = $key;
    		
    		if($count == $num_result){ break; }
    		$count++;
    	}
    	// var_dump($keyMobile);
    	$mobiles =  Mobilephones::find($keyMobile);
    	return view('home',['mobiles'=>$mobiles]);
    }

    
}
