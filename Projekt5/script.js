const screenValue = document.querySelector(".screen");
const del = document.querySelector("#del");
const changeNegative = document.querySelector("#changeNegative");

window.onload = () => {
    for(let i=0;i<=9;i++){
        document.querySelector(`#b${i}`).addEventListener("click", handleNumberClick);
    }
    del.addEventListener("click", handleDelClick)
    changeNegative.addEventListener("click", handleChangeNegative)
}

let operationChosen = false;




function handleNumberClick(e){
    del.classList.add("orange")
    if(screenValue.innerText.length >= 12) return;
    if(screenValue.innerText === "0")
        screenValue.innerText = e.target.innerText
    else
        screenValue.innerText += e.target.innerText
}

function handleDelClick(e){
    if(screenValue.innerText.length === 0) return;
    else if(screenValue.innerText.length ===1) 
        screenValue.innerText = 0;
    else 
        screenValue.innerText = screenValue.innerText.slice(0, -1)
}

function handleChangeNegative(e){
    if(screenValue.innerText.length === 0 || (screenValue.innerText.length === 1 && screenValue.innerText === '0')) return;

    if(screenValue.innerText[0] === '-') 
        screenValue.innerText = screenValue.innerText.substring(1)
    else
        screenValue.innerText = '-' + screenValue.innerText
}