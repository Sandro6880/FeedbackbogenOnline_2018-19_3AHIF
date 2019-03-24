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
       localStorage.setItem(i, answers);
       saved = true;
     }
     i++;
   }
}
