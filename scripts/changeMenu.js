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
    createForm.setAttribute("action","createSchedule.php");
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
    nameInput.setAttribute("class","form-control changeMenuMargin input-properties");
    nameInput.setAttribute("placeholder","Name of the Patient");

    const addressInput = document.createElement("input");
    addressInput.setAttribute("id","addressInput");
    addressInput.setAttribute("class","form-control changeMenuMargin input-properties")
    addressInput.setAttribute("placeholder","Home Address of the Patient");

    const ageInput = document.createElement("input");
    ageInput.setAttribute("id","ageInput");
    ageInput.setAttribute("class","form-control changeMenuMargin input-properties");
    
    const submitButton = document.createElement("input");
    submitButton.setAttribute("type","submit");
    submitButton.setAttribute("id","submitButton");
    submitButton.setAttribute("name","submit");
    submitButton.setAttribute("class","btn submitButton-properties");
    submitButton.setAttribute("value","Submit");
    divColumnLeft.append(nameInput,addressInput,ageInput,submitButton);


    const textArea = document.createElement("textarea");
    textArea.setAttribute("class","textArea-properties");
    textArea.setAttribute("placeholder","Any Further description of the patient");
    divColumnRight.append(textArea);


    

   
}