<?php
function generateTriangles($n = 5) {
    $output = "";

    // Right Triangle
    $output .= "Right Triangle:\n";
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $output .= "* ";
        }
        $output .= "\n";
    }

    // Inverted Triangle
    $output .= "\nInverted Triangle:\n";
    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            $output .= "* ";
        }
        $output .= "\n";
    }

    // Number Triangle
    $output .= "\nNumber Triangle:\n";
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $output .= $j . " ";
        }
        $output .= "\n";
    }

    // Floyd's Triangle
    $output .= "\nFloyd's Triangle:\n";
    $num = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $output .= $num . " ";
            $num++;
        }
        $output .= "\n";
    }

    return $output;
}

// Run directly in terminal
echo generateTriangles(5);
?>