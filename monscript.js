function Choix(form) {
            
            var i = form.categorie.selectedIndex;

            switch (i) {
                case 1 : var list = new Array ('Roman','Manga','B-D','Science'); break;
                case 2 : var list = new Array ('Pop','Rock','Rap','Anime'); break;
                case 3 : var list = new Array ('Hommes','Femmes','Enfants','none'); break;
                case 4 : var list = new Array ('Taekwondo','Danse','Football','Natation'); break;
            }
            form.categorie.selectedIndex = 0;
            for (i=0;i<4;i++) {
                form.sscategorie.options[i+1].text=list[i];

            }
} 

function codePromo(){
    
    var prixinit=parseInt(document.getElementById("prixf1").textContent)+parseInt(document.getElementById("prixf2").textContent);
    
    var code=document.getElementById("promo").value;
    console.log(prixinit);
    console.log(code);
    if(code=="FRENCH25"){
        prixinit=prixinit*0.75;
    }
    
    else if(code=="gratosbabe"){
        prixinit=0;
    }
    
    else{
        prixinit=prixinit;
    }
    
    document.getElementById("result").innerHTML=prixinit;
    console.log(prixinit);
    
}

function calcPrixInit(){
    
    prix=document.getElementById("prixi1").value;
    qt=document.getElementById("qt1").value;
    
    document.getElementById("prixf1").innerHTML= prix*qt;
    console.log(prix*qt);

    
    
}


function calcQuantiteMoins(nb){
    
    var monId = 'q'+nb;
    console.log(monId);
    var quantite=document.getElementById(monId).value;
    var newQuantite=document.getElementById(monId);
    newQuantite = parseInt(newQuantite.value,10);
    
    
    if (quantite>=2){
        newQuantite--;
        document.getElementById(monId).value=newQuantite; 
    }
    
    console.log(newQuantite);
    
}

function calcQuantitePlus(nb){
    
    var monId= 'q'+nb;
    var quantite=document.getElementById(monId).value;
    var newQuantite=document.getElementById(monId);
    newQuantite = parseInt(newQuantite.value,10);
    
    if (quantite<100){
        newQuantite++;
        document.getElementById(monId).value=newQuantite;
    }
    
    console.log(newQuantite);
    
}














