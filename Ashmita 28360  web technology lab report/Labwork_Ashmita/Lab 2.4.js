// Program to add all even numbers from 1 to 25

// Initialize the sum variable to store the sum of even numbers
let sum = 0;
// Loop through numbers from 1 to 25
for (let i = 1; i <= 25; i++) {
    // Check if the number is even
    if (i % 2 === 0) {
        // Add the even number to the sum
        sum += i;
    }
}
// Print the sum of all even numbers
console.log("The sum of all even numbers from 1 to 25 is:", sum);
