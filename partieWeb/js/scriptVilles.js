window.addEventListener("load",setupListenerSelect);
window.addEventListener("load",setupListenerPrix);

function setupListenerSelect (){
    let selectBillet=document.getElementById("billet");
	selectBillet.addEventListener("change",cacheEuro);
}

function cacheEuro () {
    let aCacher=document.getElementById("ville");

    let valueEuro=document.getElementById("billet").value;
    if (valueEuro=="euro"){
        aCacher.style.display = "block";
    }
    else {
        aCacher.style.display = "none";
    }
}


function setupListenerPrix (){
    let check=document.getElementById("checkConcert");
	check.addEventListener("click",changePrix);
}

function changePrix(){
    let prix = document.getElementById("prix");
    let nbPrix=parseFloat(prix.innerText);


    if (check=document.getElementById("checkConcert").checked == true){
        prix.innerHTML = nbPrix+10;
    }

    if (check=document.getElementById("checkConcert").checked == false){
        prix.innerHTML = nbPrix-10;
    }
}