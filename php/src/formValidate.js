let titleInput = document.getElementById("titleInput");
let contentInput = document.getElementById("contentInput");
let buttonReference = document.getElementById("addPostButton");

const validateFields = () => {
    let validationResult = false;
    let titleCheck = titleInput.value == "";
    let contentCheck = contentInput.value == "";
    validationResult = titleCheck || contentCheck;

    if(titleCheck) {
        titleInput.classList.add("badData");
    }else{
        titleInput.classList.remove("badData");
    }
    if(contentCheck) {
        contentInput.classList.add("badData");
    }else{
        contentInput.classList.remove("badData");
    }

    if(!validationResult)
        buttonReference.removeAttribute("disabled")
    else
        buttonReference.setAttribute("disabled", "");

    console.log(validationResult);
    return validationResult;
}

titleInput.addEventListener("change", validateFields);
contentInput.addEventListener("change", validateFields);
validateFields();