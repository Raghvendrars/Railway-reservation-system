<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Book Flight UI</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="c-modal">
  <div id='left-popup' class="c-modal__content">
    <div id='hero-city' class="c-modal__hero">
      <h1>SAN FRANCISCO</h1>
      <h2>California, USA</h2>
    </div>
    <div id='flight-details' class="c-flight-details">
      <div id='times'>
        <label>From</label>
        <select>
          <option>Berlin Brandenburg (BER)</option>
          <option>Kraków–Balice (KRK)</option>
        </select>
        <br>
        <div id='departure-time'>
          <label>Departure</label>
          <p>08:30 AM</p>
        </div>
        <div id='arrival-time'>
          <label>Arrival</label>
          <p>04:45 PM</p>
        </div>
      </div>
      <p>Flight time: 8h. 15min., same day arriwal</p>
    </div>
    <div id='ticket-details'>
      <div id='ticket-options'>
        <label>Class</label>
        <select id='ticket-class' onchange="getTotalPrice()">
          <option value="economy">Economy</option>
          <option value="business">Business</option>
        </select>
        <label>Passengers</label>
        <select id='ticket-amount' onchange="getTotalPrice()">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>
      <div id='ticket-price'>
        <label>Price per person</label>
        <span id='price'>---</span>
        <label>Total price</label>
        <span id='total-price'>---</span>
      </div>
      <button>BOOK THIS FLIGHT</button>
    </div>
  </div>
</div>
<small>If You like my work <span>&#10084;</span> let me know.</small>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
