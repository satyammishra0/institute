//------------------------
// Dividing the onclick event
//------------------------

//------------------------
// Function to change styling
//------------------------

function temp(e, div_Name) {
  let class_Selector = document.querySelectorAll(".class-selector");
  class_Selector.forEach((element) => {
    element.style.display = "none";
  });

  let content_Btn = document.querySelectorAll(".content-btn");
  content_Btn.forEach((element) => {
    element.style.backgroundColor = "#fff";
    element.style.color = " #1c1a2c";
  });

  e.style.backgroundColor = "#5a4bda";
  e.style.color = "#cec9f4";
  div_Name.style.display = "block";
}

//------------------------
// Function to set the div
//------------------------
function hideDivOne(e) {
  let all_Courses = document.getElementById("all-courses");
  temp(e, all_Courses);
}

function hideDivTwo(e) {
  let selected_Couses = document.getElementById("selected-couses");
  temp(e, selected_Couses);
}

function hideDivThree(e) {
  let support_Details = document.getElementById("support-details");
  temp(e, support_Details);
}

function hideDivFour(e) {
  let about_Us = document.getElementById("about-us");
  temp(e, about_Us);
}

function hideDivFive(e) {
  let privacy_Policy = document.getElementById("privacy-policy");
  temp(e, privacy_Policy);
}

//------------------------
// Dialog Container Design
//------------------------

let open_Btn = document.getElementById("open-btn");
let close_Btn = document.getElementById("close-btn");

open_Btn.addEventListener("click", () => {
  let modal = document.getElementById("modal");
  modal.showModal();
});

close_Btn.addEventListener("click", () => {
  let modal = document.getElementById("modal");
  modal.close();
});
