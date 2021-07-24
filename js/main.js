console.log("Hello worldQ");


const btnClickMe = document.querySelector('.click-btn');
const btnContainer = document.querySelector('.container-btn');
const modalWindow = document.querySelector('.modal-wrapper');

btnClickMe.addEventListener('click',()=>{
    btnContainer.style.display = "none";
    modalWindow.style.display = "block";
})

const btnClose = document.getElementById('btn-close')

btnClose.addEventListener('click',()=>{
    modalWindow.style.display = "none";
    btnContainer.style.display = "flex";

})




const maskedInputs = document.querySelectorAll("[data-mask]");

for (let index = 0; index < maskedInputs.length; index++) {
    maskedInputs[index].addEventListener('input', maskInput);
}

function maskInput() {
    let input = this;
    let mask = input.dataset.mask;
    let value = input.value;
    let literalPattern = /[0\*]/;
    let numberPattern = /[0-9]/;
    let newValue = "";
    try {
        let maskLength = mask.length;
        let valueIndex = 0;
        let maskIndex = 0;

        for (; maskIndex < maskLength;) {
            if (maskIndex >= value.length) break;

            if (mask[maskIndex] === "0" && value[valueIndex].match(numberPattern) === null) break;

            // Found a literal
            while (mask[maskIndex].match(literalPattern) === null) {
                if (value[valueIndex] === mask[maskIndex]) break;
                newValue += mask[maskIndex++];
            }
            newValue += value[valueIndex++];
            maskIndex++;
        }

        input.value = newValue;
    } catch (e) {
        console.log(e);
    }
}