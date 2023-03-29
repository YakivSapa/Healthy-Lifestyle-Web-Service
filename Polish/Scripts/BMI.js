function calculateBMI(){
    let height = parseInt(document.getElementById("inputsm").value);
    let weight = parseInt(document.getElementById("floatingWeight").value);

    if (height === "" || isNaN(height)) 
        $("#result").text("Podaj poprawny wzrost!");  
    else if (weight === "" || isNaN(weight)) 
        $("#result").text("Podaj poprawną wagę!");  
    else {
        let BMI = (weight / ((height * height) / 10000)).toFixed(1);
        $("#result").text("Twoje BMI wynosi " + BMI);
    }

}