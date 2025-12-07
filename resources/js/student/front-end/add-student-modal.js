import $h from "../../utils/helper";

const addStudentBtn = document.getElementById("addStudentBtn");
const addStudentModal = document.getElementById("addStudentModal");
const dismissStudentModalBtn = document.getElementById("dismissStudentModalBtn");

addStudentBtn.addEventListener("click", (event) => {
    $h.Modal.show(addStudentModal);
});

dismissStudentModalBtn.addEventListener("click", (event) => {
    $h.Modal.hide(addStudentModal);
});