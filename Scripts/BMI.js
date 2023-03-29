function calculateBMI(){
    let height = parseInt(document.getElementById("inputsm").value);
    let weight = parseInt(document.getElementById("floatingWeight").value);
    // let age = parseInt(document.getElementById("floatingAge").value);

    if (height === "" || isNaN(height)) 
        $("#result").text("Provide a valid Height!");  
    else if (weight === "" || isNaN(weight)) 
        $("#result").text("Provide a valid Weight!");  
    else {
        let BMI = (weight / ((height * height) / 10000)).toFixed(1);
        $("#result").text("Your BMI is " + BMI);
    }

}