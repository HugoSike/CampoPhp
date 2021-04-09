function showContent(){
    elemento = document.getElementById("content");
    check = document.getElementById("horometro");
    

    if (check.checked){
        elemento.style.display = 'block';
        document.getElementById("horometroDiv").className = "col-md-2";
    }
    else{
        elemento.style.display = 'none';
        document.getElementById("horometroDiv").className = "col-md-2 mt-4";
    }
}

function showChecked(){
    document.getElementById("horometro").checked = true;
    showContent();
}