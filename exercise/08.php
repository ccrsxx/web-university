<?php
$test_score = readline('What is your test score: ');

if ($test_score < 0 || $test_score > 100) {
  echo 'Invalid test score';
} else if ($test_score >= 90) {
  echo 'You got an A!';
} elseif ($test_score >= 80) {
  echo 'You got a B!';
} elseif ($test_score >= 70) {
  echo 'You got a C!';
} elseif ($test_score >= 60) {
  echo 'You got a D!';
} else {
  echo 'You got an F!';
}
