function findMax(num1, num2) {
    let max;
    if (num1 > num2) {
        max = num1;
    } else {
        max = num2;
    }
    return max;
}

// Example usage:
let a = 5;
let b = 10;
let maximum = findMax(a, b);
console.log("The maximum number is: " + maximum); // Output will be 10
