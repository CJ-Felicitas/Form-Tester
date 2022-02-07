function createSchedule() {

    const deleteElement = document.getElementById("changeMenu");
    const parentElementDelete = document.getElementById("container");
    parentElementDelete.removeChild(deleteElement);

    const createRow = document.createElement("div");
    parentElementDelete.appendChild(createRow);
    createRow.setAttribute("id","changeMenu");
    createRow.setAttribute("class","row changeMenuRow-properties")
    
    parentElementDelete.appendChild(createRow)
    
    const createForm = document.createElement("form");
    createForm.setAttribute("id","form");
    createForm.setAttribute("action","../scripts/createSchedule.php");
    createForm.setAttribute("method","post");
    createForm.setAttribute("class","form-properties")

    createRow.appendChild(createForm);

    // create a div for the coloumn
    const divColumnLeft = document.createElement("div");
    divColumnLeft.setAttribute("class","col-lg-6");
    divColumnLeft.setAttribute("id","leftColumn");
    
    const divColumnRight = document.createElement("div");
    divColumnRight.setAttribute("class","col-lg-6");
    divColumnRight.setAttribute("id","rightColumn");

    createForm.append(divColumnLeft,divColumnRight);
    
    const nameInput = document.createElement("input");
    nameInput.setAttribute("id","nameInput");
    nameInput.setAttribute("name","patientName");
    nameInput.setAttribute("class","form-control changeMenuMargin input-properties");
    nameInput.setAttribute("placeholder","Name of the Patient");

    const addressInput = document.createElement("input");
    addressInput.setAttribute("id","addressInput");
    addressInput.setAttribute("name","patientAddress");
    addressInput.setAttribute("class","form-control changeMenuMargin input-properties")
    addressInput.setAttribute("placeholder","Home Address of the Patient");

    const PhoneNumberInput = document.createElement("input");
    PhoneNumberInput.setAttribute("id","PhoneNumberInput");
    PhoneNumberInput.setAttribute("name","patientPhoneNumber");
    PhoneNumberInput.setAttribute("class","form-control changeMenuMargin input-properties");
    PhoneNumberInput.setAttribute("placeholder","Phone Number of the Patient");

    const selectOption = document.createElement("select");
    
    const option1 = document.createElement("option");
    const option1_innerText = document.createTextNode("Branch 1");
    option1.appendChild(option1_innerText);

    const option2 = document.createElement("option");
    const option2_innerText = document.createTextNode("Branch 2");
    option2.appendChild(option2_innerText);

    const option3 = document.createElement("option");
    const option3_innerText = document.createTextNode("Branch 3");
    option3.appendChild(option3_innerText);

    selectOption.setAttribute("name","patientBranch");
    selectOption.setAttribute("class","selectOption-properties form-control");

    option1.setAttribute("value","Branch 1");
    option2.setAttribute("value","Branch 2");
    option3.setAttribute("value","Branch 3");

    selectOption.append(option1,option2,option3);

    const submitButton = document.createElement("input");
    submitButton.setAttribute("type","submit");
    submitButton.setAttribute("id","submitButton");
    submitButton.setAttribute("name","submit");
    submitButton.setAttribute("class","btn submitButton-properties");
    submitButton.setAttribute("value","Submit");

    const ageInput = document.createElement("input");
    ageInput.setAttribute("id","ageInput");
    ageInput.setAttribute("name","patientAge");
    ageInput.setAttribute("class","form-control changeMenuMargin input-properties");
    ageInput.setAttribute("placeholder","Age of Patient");

    divColumnLeft.append(nameInput,addressInput,PhoneNumberInput,selectOption,ageInput,submitButton);

    const textArea = document.createElement("textarea");
    textArea.setAttribute("class","textArea-properties");
    textArea.setAttribute("placeholder","Any Further description of the patient");
    textArea.setAttribute("name","furtherDescription");
    textArea.setAttribute("id","furtherDescription");
    divColumnRight.append(textArea);


    

   
}