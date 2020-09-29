<?php 
function smallest_common_number($arr1, $arr2, $arr3) {
    // Declare lowest as false so if it is never overridden, it returns false
    // Also I did a string "false" instead of a boolean, so you can see it in the page
    $lowest = "false";
    
    // Sort arr1 in ascending order
    sort($arr1);

    // Go backwards in the array to get lower and lower each loop iteration
    for ($i = count($arr1)-1; $i >= 0; $i--) {
        // If the current value is spotted in both arrays, it becomes the new lowest value
        if ((array_search($arr1[$i], $arr2) !== false) && (array_search($arr1[$i], $arr3) !== false)) {
            $lowest = $arr1[$i];
        }
    }

    // Return lowest. If a lowest was found, it will be the number, if not, it will be "false"
    return $lowest;
}

// Echoing these so you can actually see it
echo smallest_common_number([1, 2, 3, 5, 6], [2, 3, 4, 5, 6], [4, 5, 6, 7, 8]) . "<br>"; // 5
echo smallest_common_number([2, 4, 6, 8, 10], [1, 3, 5, 7, 9], [55, 100, 200]); // false
?>