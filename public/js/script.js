let LogPopup = document.querySelector(".popup_login_container")
function HideLogPopup() {
    LogPopup.classList.toggle("hide_log_popup");
}
function ExitLogPopup() {
    LogPopup.classList.add("hide_log_popup");
}
let Popup = document.querySelector(".popup_register_container");
function HideRegPopup() {
    Popup.classList.toggle("hide_reg_popup");
}
function ExitRegPopup() {
    Popup.classList.add("hide_reg_popup");
}