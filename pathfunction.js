//Path 1 Function
function displayRadioValue() {
    if (document.getElementById("OPTION-1").checked) {
      document.getElementById("OPTION-2").disabled = true;
    } else if (document.getElementById("OPTION-2").checked) {
      document.getElementById("OPTION-1").disabled = true;
    }
  
    if (document.getElementById("OPTION-3").checked) {
      document.getElementById("OPTION-4").disabled = true;
    } else if (document.getElementById("OPTION-4").checked) {
      document.getElementById("OPTION-3").disabled = true;
    }
  
    if (document.getElementById("OPTION-5").checked) {
      document.getElementById("OPTION-6").disabled = true;
    } else if (document.getElementById("OPTION-6").checked) {
      document.getElementById("OPTION-5").disabled = true;
    }
  
    var score = 0;
    var ele = document.getElementsByClassName("likert");
    
    for (i = 0; i < ele.length; i++) {
      if (ele[i].checked) score += parseInt(ele[i].value);
    }

    var deon_result = document.getElementById("deon-score");
    deon_result.value = score;

    var util_result = document.getElementById("util-score");
    util_result.value = score;

    if (score >= 2) {
    var button = document.getElementById("utilitarian");
    if (button.style.display === "none") {
      button.style.display = "block";
    }
    var hidden = document.getElementById("confirm");
    if (hidden.style.display === "block") {
      hidden.style.display = "none";
    }
  } else {
    var button2 = document.getElementById("deontology");
    if (button2.style.display === "none") {
      button2.style.display = "block";
    }
    var hidden = document.getElementById("confirm");
    if (hidden.style.display === "block") {
      hidden.style.display = "none";
    }
  }
}
//Path2 score
function displayRadioValue2() {
  if (document.getElementById("OPTION-7").checked) {
    document.getElementById("OPTION-8").disabled = true;
  } else if (document.getElementById("OPTION-8").checked) {
    document.getElementById("OPTION-7").disabled = true;
  }

  if (document.getElementById("OPTION-9").checked) {
    document.getElementById("OPTION-10").disabled = true;
  } else if (document.getElementById("OPTION-10").checked) {
    document.getElementById("OPTION-9").disabled = true;
  }

  if (document.getElementById("OPTION-11").checked) {
    document.getElementById("OPTION-12").disabled = true;
  } else if (document.getElementById("OPTION-12").checked) {
    document.getElementById("OPTION-11").disabled = true;
  }

  var score2 = 0;
  var elem = document.getElementsByClassName("likert2");

  for (q = 0; q < elem.length; q++) {
    if (elem[q].checked) score2 += parseInt(elem[q].value);
  }
  
  var deon_result2 = document.getElementById("deon-score2");
  deon_result2.value = score2;

  var util_result2 = document.getElementById("util-score2");
  util_result2.value = score2;

  if (score2 >= 2) {
    var button3 = document.getElementById("utilitarian2");
    if (button3.style.display === "none") {
      button3.style.display = "block";
    }
    var hidden2 = document.getElementById("confirm2");
    if (hidden2.style.display === "block") {
      hidden2.style.display = "none";
    }
  } else {
    var button4 = document.getElementById("deontology2");
    if (button4.style.display === "none") {
      button4.style.display = "block";
    }
    var hidden2 = document.getElementById("confirm2");
    if (hidden2.style.display === "block") {
      hidden2.style.display = "none";
    }
  }
}
