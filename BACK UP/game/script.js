$('#jouer').click(function() {

    //// Method JSON
    // $.getJSON('data.json', function(data) {
    //     $('#name').html(data.name);
    //     $('#age').html(data.age);
    // })

    //// Method AJAX
    $.ajax({
        type: 'POST',                    // GET, POST, PUT
        url: 'questions.json',               // page à charger
        dataType: 'json',               // html, json, text, xml, script
        timeout: 4000,                  // temps en ms avant que la requête soit considérée comme échoué
        success: function(data) {
            // Lance le jeu
            // Prendre une question au hasard selon niveau de difficulté
        }
    
    });
});

$('#rejouer').click(function() {

    //// Method JSON
    // $.getJSON('data.json', function(data) {
    //     $('#name').html(data.name);
    //     $('#age').html(data.age);
    // })

    //// Method AJAX
    $.ajax({
        type: 'POST',                    // GET, POST, PUT
        url: 'data.json',               // page à charger
        dataType: 'json',               // html, json, text, xml, script
        timeout: 4000,                  // temps en ms avant que la requête soit considérée comme échoué
        success: function(data) {
            // Relance le niveau
        }
    
    });
});