



var SchuelerNummer = document.getElementById("SchuelerNummer"); 

var SchuelerKlasse = document.getElementById("SchuelerKlasse");

var SchuelerPunkte = document.getElementById("SchuelerPunkte");

var KlasseRang = document.getElementById("KlasseRang");

var BestePunkte = document.getElementById("BestePunkte");

var vars = {};

function getUrlVars() {
    
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}


function getUrlParameterByName(name, url)
{
	if (!url) url = window.location.href;
	name = name.replace(/[\[\]]/g, "\\$&");
	var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"), results = regex.exec(url);
	if (!results) return null;
	if (!results[2]) return '';
	return decodeURIComponent(results[2].replace(/\+/g, " "));
}

SchuelerNummer.innerHTML = getUrlParameterByName('SchuelerNummer');


SchuelerKlasse.innerHTML = getUrlParameterByName('SchuelerKlasse');

SchuelerPunkte.innerHTML = getUrlParameterByName('SchuelerPunkte');


KlasseRang.innerHTML = getUrlParameterByName('KlasseRang');


BestePunkte.innerHTML = getUrlParameterByName('BestePunkte');


//SchuelerNummer.innerHTML = getUrlVars()["SchuelerNummer"];

//SchuelerKlasse.innerHTML = getUrlVars()["SchuelerKlasse"];

//SchuelerPunkte.innerHTML = getUrlVars()["SchuelerPunkte"];

//KlasseRang.innerHTML = getUrlVars()["KlasseRang"];

//BestePunkte.innerHTML = getUrlVars()["BestePunkte"];



