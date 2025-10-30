<?php
// Create a function sumYogaMinutes that receives an array of sessions with 'minutes' and returns the total minutes.
function sumYogaMinutes($sessions) {
    $totalMinutes = 0;
    foreach ($sessions as $session) {
        if (isset($session['minutes'])) {
            $totalMinutes += $session['minutes'];
        }
    }
    return $totalMinutes;
}