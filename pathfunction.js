//Path Function
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
    var result = document.getElementById("target");
    for (i = 0; i < ele.length; i++) {
      if (ele[i].checked) score += parseInt(ele[i].value);
    }
    result.innerHTML = score;
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
      if (hidden.style.display === "block") {
        hidden.style.display = "none";
      }
    }
  }