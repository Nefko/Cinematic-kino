<!doctype html>
<title>Example</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" type="text/css" href="style/icons.css">
<link rel="stylesheet" type="text/css" href="style/slideshow.css">
<link rel="stylesheet" type="text/css" href="style/custom.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Roboto', sans-serif;
  }
</style>

<body>

  <!-- STUPAC LIJEVO -->
  <nav class="side">
  </nav>

  <!-- SREDINA -->
  <div class="middle">
    <!-- HEADER -->
    <header>
      <a href="index.html"><img src="images/cinematic1.png" style="height:85%"></a>
      <a href="https://www.facebook.com" class="fa faa fa-facebook"></a>
      <a href="https://www.twitter.com" class="fa faa fa-twitter"></a>
      <a href="https://www.instagram.com" class="fa faa fa-instagram"></a>
    </header>

    <ul>
      <li><a href="filmovi.php">Filmovi</a></li>
      <li><a href="rezerviraj.php">Rezerviraj</a></li>
      <li style="float:right"><a href="login.html" class="fa active xd fa-user fa-2x"></a></li>
    </ul>

    <!-- GLAVNI DIO -->
    <main class="content"><article><table class="w3-table w3-border w3-card w3-margin-top table_name">
          <tr>
            <th width="30%">Naziv filma</th>
            <th class="w3-border"><?php print(date('d.m.Y.'));?></th>
            <th class="w3-border"><?php print(date('d.m.Y.',(time()+86400))); ?></th>
            <th class="w3-border"><?php print(date('d.m.Y.',(time()+86400*2))); ?></th>
            <th class="w3-border"><?php print(date('d.m.Y.',(time()+86400*3)));?></th>
            <th class="w3-border"><?php print(date('d.m.Y.',(time()+86400*4)));?></th>
            <th class="w3-border"><?php print(date('d.m.Y.',(time()+86400*5)));?></th>
            <th class="w3-border"><?php print(date('d.m.Y.',(time()+86400*6)));?></th>
          </tr>

<!--<div class="w3-card rezerv_box">15:00</div> kartica u zablici -->
          <?php


          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "kino";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM filmovi";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

          echo "<tr>";
          echo "<td class='table_name w3-border'>";
          echo "<img style='width: 6em;' src='images/posters/{$row['ime']}p.jpg' alt=''>";
          echo "<span style='font-size:1.4em;'> {$row['ime']} </span>";
          echo "<br> <span style='color: black; font-size:1em;'> {$row['zanr']} </span>";
          echo "</td>";
          echo "<td class='w3-border'></td>";
          echo "<td class='w3-border'></td>";
          echo "<td class='w3-border'></td>";
          echo "<td class='w3-border'></td>";
          echo "<td class='w3-border'></td>";
          echo "<td class='w3-border'></td>";
          echo "<td class='w3-border'></td>";
          echo "/<tr>";
          }
          } else {
          echo "0 results";
          }
          $conn->close();


               ?>







        </table>


      </article>

    </main>

    <!-- FOOTER -->
    <footer style="font-family: 'Roboto', sans-serif;">
      <a href="terms.html">Uvjeti korištenja</a> &nbsp;&nbsp;| &nbsp;&nbsp;<a href="privacy.html">Politika privatnosti</a>&nbsp;&nbsp;| &nbsp;&nbsp;<a href="">Kontakt</a>
    </footer>
  </div>

  <!-- STUPAC DESNO -->
  <nav class="side">
  </nav>

</body>
