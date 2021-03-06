// TODO: refactor && ES6

function getClass() {
  var x = document.getElementById("ticket-class");
  var classOfTickets = x.options[x.selectedIndex].value;
  return classOfTickets;
}

function getQuantity() {
  var y = document.getElementById("ticket-amount");
  var numberOfTickets = y.value;
  return numberOfTickets;
}

function getBasePrice() {
  var basePrice = 200.61;
  if (getClass() !== 'business') {
    return basePrice;
  } else {
    basePrice *= 1.5;

    function round(value, decimals) {
      return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
    }

    basePrice = round(basePrice, 2);
    return basePrice;
  }
}

function getTotalPrice() {
  document.getElementById('price').innerHTML = getBasePrice();
  var totalPrice = 0;
  totalPrice = getBasePrice() * getQuantity();

  function round(value, decimals) {
    return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
  }

  totalPrice = round(totalPrice, 2);
  document.getElementById('total-price').innerHTML = totalPrice;
}