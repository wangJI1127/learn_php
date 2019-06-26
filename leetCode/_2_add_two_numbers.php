<?php
/**
 * You are given two non-empty linked lists representing two non-negative integers.
 * The digits are stored in reverse order and each of their nodes contain a single digit.
 * Add the two numbers and return it as a linked list.

    You may assume the two numbers do not contain any leading zero, except the number 0 itself.

    Example:

    Input: (2 -> 4 -> 3) + (5 -> 6 -> 4)
    Output: 7 -> 0 -> 8
    Explanation: 342 + 465 = 807.


 */
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class ListNode {
     public $val = 0;
     public $next = null;
     function __construct($val) { $this->val = $val; }
}

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $head = 0;
        $l = array();
        while ($l1 && $l2){
          $l[] = ($head + $l1->val + $l2->val) % 10;
          if (intval(($head + $l1->val + $l2->val) / 10) > 0){
              $head = 1;
          }else{
              $head = 0;
          }

          $l1 = $l1->next;
          $l2 = $l2->next;
        }
        while ($l1){
            $l[] = ($head + $l1->val) % 10;
            if (intval(($head + $l1->val) / 10) > 0){
                $head = 1;
            }else{
                $head = 0;
            }
            $l1 = $l1->next;
        }
        while ($l2){
            $l[] = ($head + $l2->val) % 10;
            if (intval(($head + $l2->val) / 10) > 0){
                $head = 1;
            }else{
                $head = 0;
            }
            $l2 = $l2->next;
        }
        if(!$l1 && !$l2 && $head == 1){
            $l[] = $head;
        }
//        $l = array_reverse($l);
        $headNode = new ListNode($l[0]);
        $pnode = $headNode;
        for($i = 1;$i < count($l);$i++){ // 尾插法
            $qnode = new ListNode($l[$i]);
            $pnode->next = $qnode;
            $pnode = $pnode->next;
        }
        return $headNode;


    }


}
