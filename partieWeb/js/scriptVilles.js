window.addEventListener("load",setupListenerSelect);
window.addEventListener("load",setupListenerPrixConcert);

function setupListenerSelect (){
    let selectBillet=document.getElementById("billet");
	selectBillet.addEventListener("change",cacheEuro);
}

function cacheEuro () {
    let aCacher=document.getElementById("ville");

    let valueEuro=document.getElementById("billet").value;
    if (valueEuro=="Selection Culturo"){
        aCacher.style.display = "block";
    }
    else {
        aCacher.style.display = "none";
    }
}
