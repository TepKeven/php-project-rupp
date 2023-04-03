function chooseImage(event){

    var image_element = event.target.previousElementSibling.firstElementChild;
    image_element.src = URL.createObjectURL(event.target.files[0])
}

function checkAllCheckboxes(event){
    
    var table_checkboxes = document.getElementsByClassName("table-checkbox");

    for(let table_checkbox of table_checkboxes){

        table_checkbox.checked = event.target.checked;
    }
}