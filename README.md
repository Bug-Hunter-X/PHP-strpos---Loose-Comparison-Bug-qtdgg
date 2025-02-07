This repository demonstrates a common yet subtle bug in PHP related to the use of `strpos()` and loose comparison.  The code in `bug.php` showcases the problem, while `bugSolution.php` presents a corrected version. The core issue involves the fact that `strpos()` returns `false` when a substring is not found, but `false` also evaluates to 0 in loose comparison. This leads to incorrect results when the substring is at index 0. The solution uses strict comparison (`!==`) to resolve this ambiguity.