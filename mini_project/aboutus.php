<?php include 'inc/header.php'; ?>


        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="about-section">
  <h1>CONTACT</h1>
  <p>Email Id:MAKS_Limited@gmail.com</p>
  <p>Address:Chembur,Mumbai-400080</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Kewal Patel</h2>
        <p class="title">Founder</p>
        <p></p>
        <p>kewal@example.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Malhar Shetty</h2>
        <p class="title">Founder</p>
        <p></p>
        <p>malhar@example.com</p>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Sairaj Dhonnar</h2>
        <p class="title">Founder</p>
        <p></p>
        <p>sairaj@example.com</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Avdhut Zolekar</h2>
        <p class="title">Founder</p>
        <p></p>
        <p>avdhut@example.com</p>
        
      </div>
    </div>
  </div>
  
</div>
<style>
  body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: white;
  color:black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

</body>
</html>
<?php include 'inc/footer.php'; ?>
