<?php

declare(strict_types=1);

namespace Fathom\Leetcode;

/*
https://leetcode.com/problems/contains-duplicate/

Given an integer array nums, return true if any value appears at least twice in the array,
and return false if every element is distinct.
*/

final class ContainsDuplicate217
{
    public static function containsDuplicate(array $nums): bool {
        $vals = [];
        foreach($nums as $v) {
            if (isset($vals[$v])) {
                return true;
            }
            $vals[$v] = true;
        }
        return false;
    }
}
