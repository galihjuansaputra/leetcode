class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
     
    function twoSum($nums, $target) {
        for($i = 0; $i < count($nums); $i++){
            $n = [];
            for($j = $i + 1; $j < count($nums); $j++){
                if($nums[$i] + $nums[$j] == $target){
                    array_push($n, $i,$j);
                    return $n;
                }
            }
        }
    }
}
