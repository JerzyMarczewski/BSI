// elements

const inputy = document.querySelectorAll("input[type=text]")
const form = document.querySelector("#form")
const submitButton = document.querySelector("#submit")

const regex = new RegExp('[1-9]+');
const regexNumber = new RegExp(/([1-9][0-9]{0,5})/)
const regexName = new RegExp(/^[A-Z][a-zęóąśłżźćń\-]{1,25}$/)
const regexNameWithSpace = new RegExp(/^[A-Z][a-zęóąśłżźćń \-]{1,25}$/)
const regexDate = new RegExp(/^(0[1-9]|[1-2][0-9]|3[01])\-(0[1-9]|1[0-2])\-(19[0-9][0-9]|20[0-1][0-9]|202[0-2])$/)
const regexStreet = new RegExp(/^([\w\. ]{1,25}[0-9]{0,5})$/)
const regexTel = new RegExp(/[0-9]{9}/)

window.onload = () => {
    inputy.forEach((element) => {
        element.addEventListener("input", handleInputChange)
        element.classList.add("red")
    })
    form.addEventListener('submit', handleSubmit)
}

function handleInputChange(e) {
    switch(e.target.id){
        case "imie":
        case "nazwisko":
            changeColor(e, regexName.test(e.target.value))
            break
        case "numer-domu":
        case "numer-mieszkania":
            changeColor(e, regexNumber.test(e.target.value))
            break
        case "miasto":
            changeColor(e, regexNameWithSpace.test(e.target.value))
            break
        case "ulica":
            changeColor(e, regexStreet.test(e.target.value))
            break
        
        case "narodziny":
            changeColor(e, regexDate.test(e.target.value))
            break
        case "telefon":
            changeColor(e, regexTel.test(e.target.value))
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
function handleSubmit(e){
    isOK = true
    inputy.forEach((element) => {
        if(element.classList.contains("red"))
            isOK = false
    })

    if(!isOK)
        e.preventDefault()
        

}
