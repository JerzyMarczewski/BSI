// elements

const inputy = document.querySelectorAll("input[type=text]")

const regex = new RegExp('[1-9]+');
const regexNumber = new RegExp(/([1-9][0-9]{0,5})/)
const regexName = new RegExp(/^[A-Z][a-zęóąśłżźćń]{1,30}$/)
const regexNameWithSpace = new RegExp(/^[A-Z][a-zęóąśłżźćń]{1,30}$/)

window.onload = () => {
    inputy.forEach((element) => element.addEventListener("input", handleInputChange ))
}

function handleInputChange(e) {
    switch(e.target.id){
        case "imie":
        case "nazwisko":
            changeColor(e, regexName.test(e.target.value))
            break
        case ("numer-mieszkania", "numer-domu"):
            console.log(regexNumber.test(e.target.value))
            changeColor(e, regexNumber.test(e.target.value))
            break
        
        default:
            break
    }
    
}

function changeColor(e, regexOK){
    if (regexOK){
        e.target.classList.remove("red")
        e.target.classList.add("green")
    }
    else {
        e.target.classList.remove("green")
        e.target.classList.add("red")
    }
}