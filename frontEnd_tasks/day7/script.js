//Task1
function swapVariables() 
{
    var Variable1 = document.getElementById('input1').value;
    var Variable2 = document.getElementById('input2').value;
    const [swappedVariable1, swappedVariable2] = [Variable2, Variable1];
    document.getElementById('result1').innerHTML = "Input1: " + swappedVariable1;
    document.getElementById('result2').innerHTML = "Input2: " + swappedVariable2;
}


//Task2
function minMax() {
    const array = document.getElementById("array").value;
    const arr = array.split(" ");
    const minValue = Math.min(...arr);
    const maxValue = Math.max(...arr);
    if(arr.length > 1){
        document.getElementById("min").textContent = `Minimum value: ${minValue}`;
        document.getElementById("max").textContent = `Maximum value: ${maxValue}`;
    }
}


function minimax(){
    
    const [minValue, maxValue] = getMinMax(...arr);
    print.innerHTML = `Min value: ${minValue}, Max value: ${maxValue}`;
};


//Task3
var fruits = ["apple", "strawberry", "banana", "orange", "mango"];
document.getElementById("fruitArr").innerHTML = `<span style="font-weight:bold">array of fruits </span><span style="color:blue; font-size:20px">[ ${fruits} ]</span>`;

//a
const areStrings = fruits.every((fruit) => typeof fruit === "string");
console.log("Every element is a string:", areStrings);
document.getElementById("areStrings").innerHTML = `<span style="font-weight:bold">Every element is a string:</span><span style="color:blue; font-size:20px"> ${areStrings}</span>`;


//b
const startsWithA = fruits.some((fruit) => fruit.startsWith("a"));
console.log("Some elements start with 'a':", startsWithA);
document.getElementById("startsWithA").innerHTML = `<span style="font-weight:bold">Some elements start with 'a': </span><span style="color:blue; font-size:20px">${startsWithA}</span>`;


//c
const filteredArr = fruits.filter((fruit) => fruit.startsWith("b") || fruit.startsWith("s"));
console.log("Filtered array:", filteredArr);
document.getElementById("filteredArr").innerHTML = `<span style="font-weight:bold">Filtered array: </span><span style="color:blue; font-size:20px">${filteredArr}</span>`;


//d
const favArr = fruits.map((fruit) => `I like ${fruit}`);
document.getElementById("favArr").innerHTML = `<span style="font-weight:bold">my fav fruit: </span><span style="color:blue; font-size:20px">${favArr}</span>`;


//e
fruits.forEach((fruit) =>document.write(`<span style="font-weight:bold">I fav </span><span style="color:blue; font-size:20px">${fruit}!</span> <br>`))



