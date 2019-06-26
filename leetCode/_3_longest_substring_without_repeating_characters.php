<?php
    /**
     * Given a string, find the length of the longest substring without repeating characters.

    Example 1:

    Input: "abcabcbb"
    Output: 3
    Explanation: The answer is "abc", with the length of 3.

    Example 2:

    Input: "bbbbb"
    Output: 1
    Explanation: The answer is "b", with the length of 1.

    Example 3:

    Input: "pwwkew"
    Output: 3
    Explanation: The answer is "wke", with the length of 3.
    Note that the answer must be a substring, "pwke" is a subsequence and not a substring.


     */

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $max_len = 0;
        $count = 0;
        $start = 0;
        for($i=0;$i<strlen($s);$i++){
            if (false!==$loca = strpos(substr($s,$start,$count),$s{$i})){
                $start = $i - ($count - $loca - 1);
                $count = $count - $loca;

            }else{
                $count++;
                $max_len = $count > $max_len ? $count:$max_len;
            }
        }
        return $max_len;
    }
}

