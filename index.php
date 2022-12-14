<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;500&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="https://dentaldost.com/wp-content/uploads/2020/12/dentaldost-logo-fav.ico" type="image/x-icon" />
  <title>DentalDost Assignment</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;500&display=swap");

    html {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
    }

    .navbar {
      background-color: #d9e9fc;
      height: 70px;
      width: 100%;
      border: solid 1px;
      display: flex;
      justify-content: center;
    }

    .logo {
      margin-top: 8px;
      margin-left: 80px;
      float: left;
    }

    .navContent {
      align-items: center;
      float: left;
      margin: auto;
      padding: 0px;
      text-align: center;
    }

    .midspace {
      display: flex;
      justify-content: space-evenly;
    }

    .entryInput {
      padding-top: 48px;
    }

    .numberButtons {
      background-color: #ffedfd;
      padding-bottom: 10px;
      border-radius: 8px;
    }

    #entrynumber {
      width: 400px;
      height: 40px;
      padding: 10px;
      font-size: large;
    }

    table {
      text-align: center;
      width: 100%;
    }

    th {
      background-color: #ffe4ff;
      min-width: 80px;
      margin: 0 8px;
    }

    td {
      /* border-bottom: 3px solid #d9e9fc; */
      border-bottom: 3px solid #ddd;
    }

    .mytable {
      background-color: #fdeace;
    }

    .goto {
      /* width: 80px; */
      height: 48px;
      margin-top: 12px;
      margin-right: 8px;
      background-color: #00376a;
      border-radius: 48px;
    }

    a:link,
    a:visited,
    a:hover,
    a:active {
      color: white;
      text-decoration: none;
      font-size: medium;
    }

    footer {
      padding: 48px;
      background-color: #002446;
      color: #fff;
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>



<body>
  <header id="header">
    <!-- Navigation Bar -->
    <div class="navbar">
      <div class="logo">
        <img src="https://dentaldost.com/wp-content/uploads/2022/11/DentalDost-logo-with-icon.png" alt="Logo" class="logoImage" />
      </div>
      <div class="navContent">
        <h1 style="font-size: 48px; display: contents">Assignment Submission</h1>
      </div>
      <button class="goto"><a href="#footer"> <b> Go to Bottom </b> </a></button>
    </div>
    </div>
  </header>


  <!-- Fetching data from API -->

  <?php
  // API 
  $api_url = 'https://jsonplaceholder.typicode.com/posts';
  //Get data
  $data = file_get_contents($api_url);
  //Converting JSON to Assoc. Arrays
  $data_arr = json_decode($data);
  $length = sizeof($data_arr);
  ?>

  <div class="midspace">
    <!-- Middle Section -->
    <div class="headLine">
      <p style="font-size: 48px; padding-left: 80px;">
        Data Table
      </p>
    </div>
    <div class="entryInput">
      <div class="numberButtons">
        <button style="background-color: #ffedfd; border: none; font-size: medium;"><b>Jump to</b></button>
        <button class="goto" style="width: 80px"><a href="#1"><b> 1 - 20 </b> </a></button>
        <button class="goto" style="width: 80px"><a href="#21"><b> 21 - 40 </b> </a></button>
        <button class="goto" style="width: 80px"><a href="#41"><b> 41 - 60 </b> </a></button>
        <button class="goto" style="width: 80px"><a href="#61"><b> 61 - 80 </b> </a></button>
        <button class="goto" style="width: 80px"><a href="#81"><b> 81 - 100 </b> </a></button>
      </div>
    </div>
  </div>


  <!-- Table Section -->

  <section class="mytable">
    <div>
      <table>
        <tr>
          <th>ID</th>
          <th>User ID</th>
          <th>title</th>
          <th>body</th>
        </tr>
        <?php
        //Printing data into table
        foreach ($data_arr as $key => $value) {
        ?>
          <tr>

            <td>
              <section id="<?php echo $value->id; ?>"></section><?php echo $value->id; ?>
            </td>
            <td><?php echo $value->userId; ?></td>
            <td><?php echo $value->title; ?></td>
            <td><?php echo $value->body; ?></td>

          </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </section>


  <!-- Footer Section -->
  <footer id="footer">
    <div class="upperFooter">
      <div style="padding-left: 80px">
        <img src="https://i0.wp.com/dentaldost.com/wp-content/uploads/2022/10/dentaldost-logo-with-name.png?w=363&ssl=1" alt="Footer Logo">
      </div>
    </div>
    <hr>
    <div style="margin-right: 100px;"><button class="goto"><a href="#header"> <b> Go to Top </b> </a></button></div>
    <div class="about">
      <address>
        Submitted By
        <br />
        &copy;Yogesh Kadam
        <br />
        yogesh.kadam19@vit.edu
        <br />
        13/12/2022
      </address>
    </div>
  </footer>
</body>

</html>