const screenValue = document.querySelector(".screen");
const del = document.querySelector("#del");
const dot = document.querySelector("#dot");
const clear = document.querySelector("#clear");
const changeNegative = document.querySelector("#changeNegative");
const operators = document.querySelectorAll(".operator");
const equals = document.querySelector("#equals")

let a = 0;
let b = 0

window.onload = () => {
    for(let i=0;i<=9;i++){
        document.querySelector(`#b${i}`).addEventListener("click", handleNumberClick);
    }
    for(let i=0; i< operators.length;i++){
        operators[i].addEventListener("click", handleOperatorClick);
    }
    
    del.addEventListener("click", handleDelClick)
    dot.addEventListener("click", handleDotClick)
    changeNegative.addEventListener("click", handleChangeNegative)
    clear.addEventListener("click", handleClearClick)
    equals.addEventListener("click", handleEqualsClick)
}






function handleNumberClick(e){
    if(screenValue.innerText.length >= 12) return;
    if(screenValue.innerText === "0")
        screenValue.innerText = e.target.innerText
    else
        screenValue.innerText += e.target.innerText

    updateValues()
}

function handleDelClick(e){
    if(screenValue.innerText.length === 0) return;
    else if(screenValue.innerText.length === 1 || (screenValue.innerText.length === 2 && screenValue.innerText[0] ==='-')) 
        screenValue.innerText = 0;
    else 
        screenValue.innerText = screenValue.innerText.slice(0, -1)

    updateValues()
}

function handleChangeNegative(e){
    if(screenValue.innerText.length === 0 || (screenValue.innerText.length === 1 && screenValue.innerText === '0')) return;

    if(screenValue.innerText[0] === '-') 
        screenValue.innerText = screenValue.innerText.substring(1)
    else
        screenValue.innerText = '-' + screenValue.innerText

    updateValues()
}

function handleDotClick(e){
    if(!screenValue.innerText.includes('.'))
        screenValue.innerText = screenValue.innerText + '.';
}

function handleOperatorClick(e){
    changeOrangeOperator(e.target.id)
    a = b
    b = 0
    screenValue.innerText = 0
}

function removeOrangeFromOperators(){
    for(let i=0; i< operators.length;i++){
        operators[i].classList.remove("orange")
    }
}
function changeOrangeOperator(operatorID){
    for(let i=0; i< operators.length;i++){
        if(operators[i].id !== operatorID)
            operators[i].classList.remove("orange")
        else 
        operators[i].classList.add("orange")
    }
}
function handleClearClick(e){
    removeOrangeFromOperators();
    screenValue.innerText = 0;
    a = 0;
    b = 0;
}
function handleScreenValueChange(e){
    alert()
}

function updateValues(){
    b = parseFloat(screenValue.innerText)
    console.log('a = ' + a)
    console.log('b = ' + b)
}

function handleEqualsClick(){
    chosenOperator = null
    for(let i=0; i< operators.length;i++){
        if(operators[i].classList.contains("orange"))
            chosenOperator = operators[i]
    }
    if(chosenOperator === null)
        return

    removeOrangeFromOperators()

    switch(chosenOperator.id){
        case "multiplication":
            b = a*b
            a = 0
            screenValue.innerText = b
            break
        
        case "division":
            b = a/b
            a = 0
            screenValue.innerText = b
            break
            break
        
        case "subtraction":
            b = a-b
            a = 0
            screenValue.innerText = b
            break
            break
        
        case "addition":
            b = a+b
            a = 0
            screenValue.innerText = b
            break
            break
        default:
            break

    }
}