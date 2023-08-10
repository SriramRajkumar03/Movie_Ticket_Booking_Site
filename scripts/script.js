function validateForm() {
  //collect form data in JavaScript variables
  var pw1 = document.getElementById("pswd1").value;
  var pw2 = document.getElementById("pswd2").value;
  var name = document.getElementById("nam").value;
  var uname = document.getElementById("unam").value;
  if (name == "") {
    alert("*Enter your name");
    return false;
  }
  if (!isNaN(name)) {
    alert("*Only characters are allowed");
    return false;
  }
  if (!isNaN(uname)) {
    alert("*Only characters are allowed");
    return false;
  }
  if (pw1 == "") {
    alert("*Fill the password please");
    return false;
  }
  if (pw2 == "") {
    alert("*Enter the password please");
    return false;
  }
  if (pw1.length < 8) {
    alert("*Password length must be atleast 8 characters");
    return false;
  }
  if (pw1.length > 15) {
    alert("*Password length must not exceed 15 characters");
    return false;
  }
  if (pw1 != pw2) {
    alert("*Passwords are not the same");
    return false;
  }
}
const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.occupied)");

let ticketPrice = 150;

const updateSelectedCount = () => {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
};
container.addEventListener("click", (event) => {
  if (
    event.target.classList.contains("seat") &&
    !event.target.classList.contains("occupied")
  ) {
    event.target.classList.toggle("selected");

    updateSelectedCount();
  }
});
updateSelectedCount();

var dateRange = document.getElementById("date"),
  monthNames = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ];
for (var day = 0; day < 6; day++) {
  var date = new Date();
  date.setDate(date.getDate() + day);
  dateRange.options[dateRange.options.length] = new Option(
    [date.getDate(), monthNames[date.getMonth()]].join(" "),
    date.toISOString()
  );
}
function paymentf(selectedSeatsCount) {
  var noseats = document.getElementById("count").innerText;
  var seatsp = document.getElementById("total").innerText;
  var mov = document.getElementById("mname").innerText;
  var stime = document.getElementById("time");
  var time = stime.options[stime.selectedIndex].text;
  var datet = document.getElementById("date");
  var datee = datet.options[datet.selectedIndex].text;
  if (noseats == 0) {
    alert("Please select a seat");
  } else {
    window.location.href =
      "payment.php?NOS=" +
      noseats +
      "&TOT=" +
      seatsp +
      "&ID=" +
      mov +
      "&DT=" +
      datee +
      "&TM=" +
      time;
  }
}
