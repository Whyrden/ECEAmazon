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
    
    var prixinit=parseInt(document.getElementById("prixf1").value)+parseInt(document.getElementById("prixf2"));
    
    var code=document.getElementById("promo").value;
    console.log(prixinit);
    
    if(code=="oce"){
        prixinit=prixinit-2;
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