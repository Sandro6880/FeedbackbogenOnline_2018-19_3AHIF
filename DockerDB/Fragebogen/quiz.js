var answers = "";
// function to calculate the result of the survey
function tabulateAnswers() {
  var choices = document.getElementsByTagName('question');
  var answerOfUser = document.getElementsByTagName('input');

  var offset = 0;
  for (var i=0; i<choices.length; i++) {
    var done = false;
    for (var x = 0+offset; x < 4+offset; x++) {
      if (answerOfUser[x].checked && !done) {
        answers+=answerOfUser[x].value[1];
        done = true;
      }
    }
    offset+=4;
    if (!done) {
      answers+="0";
    }
  }
   window.location.href = "questioninfo.php?answers=" + answers;
   }
