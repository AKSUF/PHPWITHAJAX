const settings = {
    async: true,
    crossDomain: true,
    url: 'https://visual-crossing-weather.p.rapidapi.com/forecast?aggregateHours=24&location=Washington%2CDC%2CUSA&contentType=csv&unitGroup=us&shortColumnNames=0',
    method: 'GET',
    headers: {
        'X-RapidAPI-Key': '6b21896eadmshc3f91162435c5bcp15e9abjsnb9c617ad4e50',
        'X-RapidAPI-Host': 'visual-crossing-weather.p.rapidapi.com'
    }
};

$.ajax(settings).done(function(response) {
    console.log(response);
});