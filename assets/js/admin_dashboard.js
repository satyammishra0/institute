let message_admin_btn = document.getElementById("message_admin_btn");
message_admin_btn.addEventListener("click", () => {
  confirm(
    "Please be aware before editing it can bake or make a student's carreer "
  );
});

//------------------------
// Function to change content of Dashboard
//------------------------

let all_courses_btn = document.getElementById("all_courses_btn");
let add_courses_btn = document.getElementById("add_courses_btn");

let all_courses_btn_parent = all_courses_btn.parentElement;
let add_courses_btn_parent = add_courses_btn.parentElement;

let right_all_courses = document.getElementById("right-all-courses");
let right_add_course = document.getElementById("right-add-course");

all_courses_btn.addEventListener("click", () => {
  all_courses_btn_parent.classList.add("active_content_tab");
  add_courses_btn_parent.classList.remove("active_content_tab");
  // Displaying the desired content
  right_add_course.style.display = "none";
  right_all_courses.style.display = "block";
});

add_courses_btn.addEventListener("click", () => {
  add_courses_btn_parent.classList.add("active_content_tab");
  all_courses_btn_parent.classList.remove("active_content_tab");
  // Displaying the desired content
  right_add_course.style.display = "block";
  right_all_courses.style.display = "none";
});

//------------------------
// Function to Delete confimration of blog
//------------------------
function delete_confirmation() {
  alert("Are you sure you want to delete the course !! Please rethink");
}

//------------------------
// Function to Logout the admin Panel
//------------------------
function logout_function() {
  alert("Are you sure you want to Logout !! Please rethink");
}
