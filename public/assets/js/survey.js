$(document).ready(main);

function main() {
  $.ajax({
    type: "GET",
    url: "getSurveyQuestion.php",
    success: function(data) {
      readyQuestions(JSON.parse(data));
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert("Error, see console");
        console.log(xhr.responseText);
        console.log(thrownError);
      }
  });
  $('#debug-fillin').click(function () {
    $('.question').each(function(index, element) {
      switch (element.id.substring(0,1)) {
        case '1':    // preset
          inputs = $(element).find('input');
          i = getRandomInt(0, inputs.length);
          $(inputs[i]).attr('checked', 'checked');
          break;
        case '2':    // MC
          inputs = $(element).find('input');
          i = getRandomInt(0, inputs.length);
          $(inputs[i]).attr('checked', 'checked');
          break;
        case '3':    // open
          $(element).find('textarea')[0].value = randomString(100);
          break;
        default:   // email
          $(element).find('input')[0].value = randomString(20);
      }
    });
  });
}

function readyQuestions(datas) {
  questionsDOM = $('.questions');
  for (i = 0; i < datas.length; i++) {
    data = datas[i];
    id = data.QuesId;
    contents = data.Contents;
    div = $('<div class="question" id=' + id + '>');
    div.append($('<h3>' + (i+1) + '. ' + contents + '</h3>'));
    switch (data.Type) {
      case "preset":
        answers = data.ProvidedAnswers.split(',');
        for (j = 0; j < answers.length; j++) {
          answer = answers[j];
          div.append(
            $('<input type="radio" ' +
              'name="' + id +
              '" value="' + answer +
              '">')
          );
          div.append($('<span>' + answer + '</span>'));
        }
        break;

      case "MC":
        answers = ['Very Satisfied', 'Somewhat Satisfied', 'Neutral', 'Somewhat Dissatisfied' , 'Very Dissatifiied'];
        for (j = 0; j < answers.length; j++) {
          answer = answers[j];
          div.append(
            $('<input type="radio" ' +
              'name="' + id +
              '" value="' + answer +
              '">')
          );
          div.append($('<span>' + answer + '</span>'));
        }
        break;

      case "open":
        div.append(
          $('<textarea form="survey"' +
          'name="' + id +
          '" id="' + ('text-' + id) +
          '" cols="60" rows="10"' +
          '></textarea>')
        );
        break;
    };
    div.append($('<br><br>'));
    questionsDOM.append(div);
  }
  questionsDOM.append($('<br>'));
  questionsDOM.append($('<input type="submit" value="Submit">'));
}

function randomString(length) {
  text = "";
  possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ abcdefghijklmnopqrstuvwxyz 0123456789";
  for(i = 0; i < length; i++ ) {
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return text;
}

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min;
}
