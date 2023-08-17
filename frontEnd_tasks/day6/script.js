function addNewUser() {
    var inputName = document.getElementById("userName"); 
    var name = inputName.value;
    var inputEmail = document.getElementById("email"); 
    var email = inputEmail.value;
    var nameValidation = document.getElementById("nameValidation");
    var emailValidation = document.getElementById("emailValidation");

    const nameRegex = /^[a-zA-Z]+$/;
    const emailRegex = /\S+@\S+\.\S+/;
    
    nameValidation.innerHTML = "";
    emailValidation.innerHTML = "";
    
    if (name.length <= 3 || !nameRegex.test(name)) {
        nameValidation.innerHTML = "Please enter a valid name.";
    }
    else if(!emailRegex.test(email)){
        emailValidation.innerHTML = "Please enter a valid Email.";
    }
    else{
        var newRow = document.createElement("tr");
        var cellName = document.createElement("td");
        var cellEmail = document.createElement("td");
        cellName.innerHTML = name;
        cellEmail.innerHTML = email;
        newRow.append(cellName,cellEmail);
        myTable.append(newRow);
        inputName.value = ""
        inputEmail.value = ""
    }
}

function changeStyle(){
    var table = document.getElementById("myTable");
    if(table.getAttribute("class") == "oldStyle"){
        table.classList.remove("oldStyle");
        table.classList.add("newStyle");
    }
    else{
        
        table.classList.remove("newStyle");  
        table.classList.add("oldStyle");  
    }
}

function changeImg() {
    var image = document.getElementById("myImage");
    if(image.getAttribute("src") == "car.jpg"){
        image.setAttribute("src", "space.jpg");
    }
    else{
        image.setAttribute("src", "car.jpg");
    }
    
}

function getData() {
    fetch('https://jsonplaceholder.typicode.com/users')
      .then((response) => response.json())
      .then(json => {
        var table = document.getElementById("myTable");
        for (var i = 0; i < json.length; i++) {
        var newRow = document.createElement("tr");
        var cell1 = document.createElement("td");
        var cell2 = document.createElement("td");
        cell1.innerHTML = json[i].name;
        cell2.innerHTML = json[i].email;
        
        newRow.append(cell1, cell2);
        myTable.append(newRow);
        }
  });
}