// elements

const inputy = document.querySelectorAll("input[type=text]")
const form = document.querySelector("#form")
const submitButton = document.querySelector("#submit")

const regex = new RegExp('/.*/');
const regexNumber = new RegExp('.*');
const regexName = new RegExp('.*');
const regexNameWithSpace = new RegExp('.*');
const regexDate = new RegExp('.*');
const regexStreet = new RegExp('.*');
const regexTel = new RegExp('.*');

window.onload = () => {
    inputy.forEach((element) => {
        // element.addEventListener("input", handleInputChange)
        element.classList.add("green")
    })
    // form.addEventListener('submit', handleSubmit)
}

// function handleInputChange(e) {
//     switch(e.target.id){
//         case "imie":
//         case "nazwisko":
//             changeColor(e, regexName.test(e.target.value))
//             break
//         case "numer-domu":
//         case "numer-mieszkania":
//             changeColor(e, regexNumber.test(e.target.value))
//             break
//         case "miasto":
//             changeColor(e, regexNameWithSpace.test(e.target.value))
//             break
//         case "ulica":
//             changeColor(e, regexStreet.test(e.target.value))
//             break
        
//         case "narodziny":
//             changeColor(e, regexDate.test(e.target.value))
//             break
//         case "telefon":
//             changeColor(e, regexTel.test(e.target.value))
//             break
//         default:
//             break
//     }
    
// }

// function changeColor(e, regexOK){
//     if (regexOK){
//         e.target.classList.remove("red")
//         e.target.classList.add("green")
//     }
//     else {
//         e.target.classList.remove("green")
//         e.target.classList.add("red")
//     }
// }
// function handleSubmit(e){
//     isOK = true
//     inputy.forEach((element) => {
//         if(element.classList.contains("red"))
//             isOK = false
//     })

//     if(!isOK)
//         e.preventDefault()
        

// }
