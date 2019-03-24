var answers = "";
// function to calculate the result of the survey
function tabulateAnswers() {
  var choices = document.getElementsByTagName('question');
  var answerOfUser = document.getElementsByTagName('input');
  var answerbox = document.getElementById('answer');
  answerbox.innerHTML = choices.length;
  var offset = 0;
  for (i=0; i<answerOfUser.length; i++) {
     // if the radio is checked..
       // add 1 to that choice's score
    if (answerOfUser[i].checked) {
      var done = false
      let x = 0;
      while (!done) {
        x++;
        var c = "c" + x;
        if (answerOfUser[i].value == c) {
          answers += x + ",";
          done = true;
        }
      }
     }
   }
   answers += "0";
   var i = 0;
   var saved = false;
   while (!saved) {
     if (localStorage.getItem(i) === null) {
       window.localStorage.setItem(i, answers);
       saved = true;
     }
     i++;
   }
}
