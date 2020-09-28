<?php 
function smallest_common_number($arr1, $arr2, $arr3) {
    // Declare lowest with no value so if its never initialized it is unset
    $lowest;
    
    // Sort arr1 in ascending order
    sort($arr1);

    // Go backwards in the array to get lower and lower each loop iteration
    for ($i = count($arr1)-1; $i >= 0; $i--) {
        // If the current value is spotted in both arrays, it becomes the new lowest value
        if ((array_search($arr1[$i], $arr2) !== false) && (array_search($arr1[$i], $arr3) !== false)) {
            $lowest = $arr1[$i];
        }
    }

    // If lowest is initialized (set), return it
    if (isset($lowest)) {
        return $lowest;
    } else {
        // Returning boolean false will not appear on the page, I will change to a string for the sake of visual feedback.
        return "false";
    }
}

// Echoing these so you can actually see it
/*
    Also, depending on the processor you use, <br> may output as text or an actual HTML line break.
    Real servers (IIS, xampp, nginx) will output as a line break but using a "Execute PHP Online" site will probably
    output it as <br> text to stop people from injecting their site.
*/
echo "First Input: " . smallest_common_number([1, 2, 3, 5, 6], [2, 3, 4, 5, 6], [4, 5, 6, 7, 8]) . "<br>"; // 5
echo "Second Input: " . smallest_common_number([2, 4, 6, 8, 10], [1, 3, 5, 7, 9], [55, 100, 200]); // false
?>