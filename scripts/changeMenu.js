function createSchedule() {

    const divColumn = document.createElement('div');
    const getIDAppended_divColumn = document.getElementById('changeMenu');
    divColumn.setAttribute("class","col-lg-12");

    const breakLine = document.createElement("br");



   const newElement_firstInput = document.createElement('input');

   newElement_firstInput.setAttribute("id","patientName");
   newElement_firstInput.setAttribute("style","border-radius: 10px; height:50px;font-family: 'Rubik', sans-serif; font-size:18px;width:300px;padding:7px; margin-bottom: 10px;");
   newElement_firstInput.setAttribute("placeholder","Name of the Patient");
   newElement_firstInput.setAttribute("class","form-control");

   const newElement_secondInput = document.createElement('input');
  
   newElement_secondInput.setAttribute("id","patientAddress");
   newElement_secondInput.setAttribute("style","border-radius: 10px; height:50px;font-family: 'Rubik', sans-serif; font-size:18px;width:300px;padding:7px;margin-bottom:10px");
   newElement_secondInput.setAttribute("placeholder","Home address of the Patient");
   newElement_secondInput.setAttribute("class","form-control");

divColumn.append(newElement_firstInput,breakLine,newElement_secondInput,breakLine);
getIDAppended_divColumn.appendChild(divColumn);

   
}