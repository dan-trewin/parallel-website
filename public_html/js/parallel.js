
$(() => {
  // On page load:

  if ($('#page').data('page-name') === 'games') {

    $('#navigation').load('./nav.html', () => {
      $('#navGamesBtn').addClass('active');
    });

    $('.gamesBlock').matchHeight();
  }

  else if ($('#page').data('page-name') == 'scores') {
   
    $('#navigation').load('./nav.html', () => {
      $('#navScoresBtn').addClass('active');
    });

    displayScores('http://parallelgames.net/webServices.php?action=getScores&gameName=' + $('#gameSelector').val() + '&scoreType=' + $('#typeSelector').val());

    $('#gameSelector, #typeSelector').change(() => {
      $('.scoresCol').html('');
      displayScores('http://parallelgames.net/webServices.php?action=getScores&gameName=' + $('#gameSelector').val() + '&scoreType=' + $('#typeSelector').val());
    });
  }

  else if ($('#page').data('page-name') === 'about') {

    $('#navigation').load('./nav.html', () => {
      $('#navAboutBtn').addClass('active');
    });
  }

  else {
    $('#navigation').load('./nav.html');
  }

});

function divLinkClicked (path) {
  console.log(path)
  window.location = path;
}

function displayScores(url) {

  $.getJSON(url, (data) => {

    var scores = [];

    $.each(data, (key, val) => {

      scores.push(val);
    });

    for (var i = 0; i < scores.length; i++) {
      //$('#scores').append((i+1) + '. ' + names[i] + '' + scores[i] + '<br>');
      $('#scoresCol1').append((i + 1) + '.<br>');
      $('#scoresCol2').append(scores[i].name + '<br>');
      $('#scoresCol3').append(scores[i].score + '<br>');
    }
    if (scores.length === 0) {
      $('#scoresCol1').append('Highscores not currently supported for this title.');
    }
  });
}