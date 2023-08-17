function problem1() {
    var str = "this is javaScript";
    var letter = "i";

    var arr = [];
    for (let i = 0; i < str.length; i++) {
      if (str[i] === letter) {
        arr.push(i);
      }
    }
    document.getElementById("results1").innerHTML =`sentence "${str}" <br> letter "${letter}"` + "<br> positions: [ " + arr + " ]";
  }

  function problem2() {
    function getRandomNames(names) {
      var randomIndex1 = Math.floor(Math.random() * names.length);
      var randomIndex2 = Math.floor(Math.random() * names.length);
      while (randomIndex2 === randomIndex1) {
        randomIndex2 = Math.floor(Math.random() * names.length);
      }
      return [names[randomIndex1], names[randomIndex2]];
    }

    var names = ["ahmed", "islam", "sandra", "Fatma", "ali"];
    var twoName = getRandomNames(names);
    document.getElementById("results2").innerHTML ="all names [ " + names + " ] <br>the two random name is: [ " + twoName + " ]";
  }

  function problem3() {
    function fizzBuzz(num){
        if(num % 3 == 0 && num % 5 == 0){
            return "divided by 3 and 5:  Fizz buzz";
        }else if(num % 3 == 0){
            return "divided by 3 only: fizz";
        }else if(num % 5 == 0){
            return "divided by 5 only: buzz";
        }else{
            return "none";
        }
    }
    var num = 3;
    document.getElementById("results3").innerHTML = fizzBuzz(num);
  }

  function problem4() {
    var arr = [4, 8, 1];
    var sum = arr[0] + arr[1] + arr[2];
    var product = arr[0] * arr[1] * arr[2];
    var division = arr[0] / arr[1] / arr[2];
    document.getElementById("results4").innerHTML = 
      "<span style='color:red'>sum of the three values: </span>" + 
      arr[0] + "+" + arr[1] + "+" + arr[2] + " = " + sum + "<br>" +
      "<span style='color:red'>product of the three values: </span>" + 
      arr[0] + "*" + arr[1] + "*" + arr[2] + " = " + product + "<br>" +
      "<span style='color:red'>division of the three values: </span>" + 
      arr[0] + "/" + arr[1] + "/" + arr[2] + " = " + division + "<br>";
  }

  function problem5() {
    var points = [1, 20, 3, 4, 5];
    var descending = points.slice().sort(function(a, b){return b - a});
    var ascending = points.slice().sort(function(a, b){return a - b});
    document.getElementById("results5").innerHTML = 
      "<span style='color:red'>original values: </span>" + points + "<br>" +
      "<span style='color:red'>sorted in descending order: </span>" + descending + "<br>" +
      "<span style='color:red'>sorted in ascending order: </span>" + ascending + "<br>";
  }

  function problem6() {
    var radius = prompt("enter radius");
    var area = Math.PI * radius ** 2;
    alert("The area of the circle with radius " + radius + " is " + area.toFixed(2));
    var value = prompt("enter value");
    var sqrt = Math.sqrt(value);
    alert("The square root of " + value + " is " + sqrt);
    var angle = prompt("enter angle");
    var cos = Math.cos(angle * Math.PI / 180);
    alert("cosine " + angle + " is " + cos.toFixed(4));
  }