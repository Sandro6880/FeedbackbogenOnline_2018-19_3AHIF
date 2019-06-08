var answers = "";

function tabulateAnswers() {
  var choices = document.getElementsByTagName('question');
  var answerOfUser = document.getElementsByTagName('input');
  var offset = 0;
  for (i=0; i<answerOfUser.length; i++) {
    if (answerOfUser[i].checked) {
      var done = false
      let x = 0;
      while (!done) {
        x++;
        var c = "c" + x;
        if (answerOfUser[i].value == c) {
           localStorage.setItem(offset, x);
           offset++;
          done = true;
        }
      }
     }
   }

}
