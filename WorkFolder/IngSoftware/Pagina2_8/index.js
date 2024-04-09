const dateElement = document.getElementById('lblDate');
const currentDate = new Date();
const formattedDate = currentDate.toDateString();
dateElement.textContent = "Fecha: " + formattedDate;
