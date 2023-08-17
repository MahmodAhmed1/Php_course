document.write("<h1>Task 1</h1>")

var num1 = Number(prompt("Enter Number Task 1"));
var num2 = Number(prompt("Enter Number Task 1"));

num1 > num2 ? document.write(num1, " greater than ", num2) : document.write("max number is ", num2);

document.write("<br><hr><br><h1>Task 2</h1><br>")

var num1 = Number(prompt("Enter Number Task 2"));
var num2 = Number(prompt("Enter Number Task 2"));

num1 == num2 ? document.write("answer = ", (num1 + num2) * 3) : document.write("answer = ", (num1 + num2));

document.write("<br><hr><br><h1>Task 3</h1><br>")

var name = prompt("Enter Name");
var num = prompt("Enter Number Task 3");

document.write("<ul>");
for (var i = 0; i < num; i++) {
    document.write("<li>hallo, ",name ,"</li>");
}
document.write("</ul>");


document.write("<hr><br><h1>Task 4</h1><br>");

var num = prompt("Enter Number Task 4");

if(num % 2 === 0){
    document.write(num + " is Even Number");
}else{
    document.write(num + " is Odd Number");
}

