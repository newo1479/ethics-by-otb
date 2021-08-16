function e1s1Lock() {
    if (document.getElementById("example1-stage1-utilitarian-ni").checked) {
      document.getElementById("example1-stage1-deontology-i").disabled = true;
    } else if (document.getElementById("example1-stage1-deontology-i").checked) {
      document.getElementById("example1-stage1-utilitarian-ni").disabled = true;
    }
    
    var a = document.getElementById("example2");
    if (a.style.display === "none") {
      a.style.display = "block";
    }
    var aa = document.getElementById("e1s2-button");
    if (aa.style.display === "none") {
      aa.style.display = "block";
    }
  }

//Lock e1p2 and Display S1P3
function e1s2Lock() {
    if (document.getElementById("example1-stage2-utilitarian-ni").checked) {
      document.getElementById("example1-stage2-deontology-i").disabled = true;
    } else if (document.getElementById("example1-stage2-deontology-i").checked) {
      document.getElementById("example1-stage2-utilitarian-ni").disabled = true;
    }
    var b = document.getElementById("example3");
    if (b.style.display === "none") {
      b.style.display = "block";
    }
  }
//Display S1 Submit Button
function submitExamples1() {
    var z = document.getElementById("e1-submit");
    if (z.style.display === "none") {
      z.style.display = "block";
    }
  }

  //Lock e2s1 and Display e2s2
function e2s1Lock() {
    if (document.getElementById("example2-stage1-utilitarian-ni").checked) {
      document.getElementById("example2-stage1-deontology-i").disabled = true;
    } else if (document.getElementById("example2-stage1-deontology-i").checked) {
      document.getElementById("example2-stage1-utilitarian-ni").disabled = true;
    }
    var d = document.getElementById("example5");
    if (d.style.display === "none") {
      d.style.display = "block";
    }
    var dd = document.getElementById("e2s2-button");
    if (dd.style.display === "none") {
      dd.style.display = "block";
    }
  }
  
  //Lock e2s2 and Display e2s3
  function e2s2Lock() {
    if (document.getElementById("example2-stage2-utilitarian-ni").checked) {
      document.getElementById("example2-stage2-deontology-i").disabled = true;
    } else if (document.getElementById("example2-stage2-deontology-i").checked) {
      document.getElementById("example2-stage2-utilitarian-ni").disabled = true;
    }
    var e = document.getElementById("example6");
    if (e.style.display === "none") {
      e.style.display = "block";
    }
  }
  
  //Display E2 Submit Button
  function submitExamples2() {
    var y = document.getElementById("e2-submit");
    if (y.style.display === "none") {
      y.style.display = "block";
    }
  }
  
  //Lock e3s1 and Display e3s2
  function e3s1Lock() {
    if (document.getElementById("example3-stage1-utilitarian-ni").checked) {
      document.getElementById("example3-stage1-deontology-i").disabled = true;
    } else if (document.getElementById("example3-stage1-deontology-i").checked) {
      document.getElementById("example3-stage1-utilitarian-ni").disabled = true;
    }
    var e3s1 = document.getElementById("example8");
    if (e3s1.style.display === "none") {
      e3s1.style.display = "block";
    }
    var e3s1_nextbutton = document.getElementById("e3s2-button");
    if (e3s1_nextbutton.style.display === "none") {
      e3s1_nextbutton.style.display = "block";
    }
  }
  
  //Lock e3s2 and Display e3s3
  function e3s2Lock() {
    if (document.getElementById("example3-stage2-utilitarian-ni").checked) {
      document.getElementById("example3-stage2-deontology-i").disabled = true;
    } else if (document.getElementById("example3-stage2-deontology-i").checked) {
      document.getElementById("example3-stage2-utilitarian-ni").disabled = true;
    }
    var e3s2 = document.getElementById("example9");
    if (e3s2.style.display === "none") {
      e3s2.style.display = "block";
    }
  }
  
  //Display S3 Submit Button
  function submitExamples3() {
    var x = document.getElementById("e3-submit");
    if (x.style.display === "none") {
      x.style.display = "block";
    }
  }
  
  //Single Stage functions
  function example13(){
    var l = document.getElementById("example13");
    if (l.style.display === "none"){
      l.style.display = "block";
    }
  }
  
  function example14(){
    var m = document.getElementById("example14");
    if (m.style.display === "none"){
      m.style.display = "block";
    }
  }

  function e4s1Lock() {
    if (document.getElementById("example4-stage1-utilitarian-ni").checked) {
      document.getElementById("example4-stage1-deontology-i").disabled = true;
    } else if (document.getElementById("example4-stage1-deontology-i").checked) {
      document.getElementById("example4-stage1-utilitarian-ni").disabled = true;
    }
    var e3s1 = document.getElementById("example13");
    if (e3s1.style.display === "none") {
      e3s1.style.display = "block";
    }
    var e3s1_nextbutton = document.getElementById("e3s2-button");
    if (e3s1_nextbutton.style.display === "none") {
      e3s1_nextbutton.style.display = "block";
    }
  }
  
  //Lock e4s2 and Display e4s3
  function e4s2Lock() {
    if (document.getElementById("example4-stage2-utilitarian-ni").checked) {
      document.getElementById("example4-stage2-deontology-i").disabled = true;
    } else if (document.getElementById("example4-stage2-deontology-i").checked) {
      document.getElementById("example4-stage2-utilitarian-ni").disabled = true;
    }
    var e3s2 = document.getElementById("example9");
    if (e3s2.style.display === "none") {
      e3s2.style.display = "block";
    }
  }
  //Display S4 Submit Button
  function submitExamples4() {
    var x = document.getElementById("e4-submit");
    if (x.style.display === "none") {
      x.style.display = "block";
    }
  }

