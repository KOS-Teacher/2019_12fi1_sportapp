function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}


//var number = getUrlVars()["x"];
//var mytext = getUrlVars()["text"];

var klassen = getUrlVars()["klassen"];

var cboKlasse = document.getElementById("cboKlasse");

klassen.forEach(myFunction);

           function myFunction(item) {
                var option = document.createElement("option");
                option.text = "Kiwi";
                x.add(option); 
            } 




            

            function bestaetigen() {

                console.log("hiiiiiiiiiiiiiii")
    
                var txtSchuelerAnzahl = document.getElementById("txtSchuelerAnzahl").value;
                var e = document.getElementById("cboKlasse");
                var strUser = e.options[e.selectedIndex].value;
    
                   var xmlhttp = new XMLHttpRequest();
    
                   xmlhttp.onreadystatechange = function() {
    
                       if (this.readyState == 4 && this.status == 200) {
    
                            
    
                            var result = this.responseText;
    
                            location.href = "/view/admin_klasse_verwalten.php";    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
                       }
                  };
    
                  xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" +  strUser +  txtSchuelerAnzahl);
    
                  xmlhttp.send();
    
            }


