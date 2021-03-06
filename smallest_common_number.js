function smallest_common_number(arr1, arr2, arr3) {
    // If sufficient arrays are passed
    if ((arr1 != undefined) && (arr2 != undefined) && (arr3 != undefined)) {
        // Declare the lowest number as false so if one is never found, it returns false
        let lowest = false;

        // Sort arr1 in ascending order
        arr1 = arr1.sort();

        // Go backwards in the array to get lower and lower each loop iteration
        for (let i = arr1.length; i >= 0; i--) {
            // If the current value is spotted in both arrays, it becomes the new lowest value
            if ((arr2.indexOf(arr1[i]) != -1) && (arr3.indexOf(arr1[i])) != -1) {
                lowest = arr1[i];
            }
        }

        // Return lowest. If a lowest was found, it will be the number, if not, it will be false
        return lowest;
    }
}

console.log(smallest_common_number([1, 2, 3, 5, 6], [2, 3, 4, 5, 6], [4, 5, 6, 7, 8])); // 5
console.log(smallest_common_number([2, 4, 6, 8, 10], [1, 3, 5, 7, 9], [55, 100, 200])); // false