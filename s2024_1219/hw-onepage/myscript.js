var today = new Date();
var defaultDate = new Date(today.setDate(today.getDate() + 1));
var defaultDateTxt = defaultDate.getFullYear() + "-" + (defaultDate.getMonth()+1).toString().padStart(2, "0") + "-" + (defaultDate.getDate()).toString().padStart(2, "0");
document.getElementById("date").value = defaultDateTxt;