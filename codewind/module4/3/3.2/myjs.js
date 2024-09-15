function calcAverage(numbers) {
    let sum = 0;

    for(number of numbers) {
        sum += number;
    }

    let numbersAverage = sum/numbers.length;
    
    return numbersAverage;
}

let arr = [1, 2, 3, 4, 5];

console.log(calcAverage(arr));