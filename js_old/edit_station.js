
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
};

var statioon_id = getUrlVars()["q"];





function verwerfen(){


    location.href = "stationen.php";

}



function speichern(){


    var txtStationName = document.getElementById("txtStationName");

    var txtStationPunkte = document.getElementById("txtStationPunkte");

    var txtStationOrt = document.getElementById("txtStationOrt");

    var txtStationEnde = document.getElementById("txtStationEnde");

    var txtStationBemerkung = document.getElementById("txtStationBemerkung");





    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

         }   
        }
     
        if(statioon_id > 0){
            xmlhttp.open("GET", "../controller/station_controller.php?s=" +  statioon_id + "&station_name=" + txtStationName + "&station_punkte=" + txtStationPunkte + "&station_ort=" + txtStationOrt + "&station_ende=" + txtStationEnde + "&station_bemerkung=" + txtStationBemerkung);   //  neue Station anlegen
        }
        else{
            xmlhttp.open("GET", "../controller/station_controller.php?s=" + "neu");   // neue Station anlegen
        }

        

        xmlhttp.send();

    


}