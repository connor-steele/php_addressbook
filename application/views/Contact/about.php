<!DOCTYPE html>
<html>
  <head>
    <title>about page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
    body {
        margin: 0;
        z-index: 1;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 25%;
        position: fixed;
        height: 100%;
        overflow: auto;
            color: white;
        background-color: #3a3e45;
    }
    li a {
        display: block;
        color: white;
        padding: 8px 0 8px 16px;
        text-decoration: none;
    }
    li a.active {
        background-color: #45ba7d;
        color: white;
    }
    li a:hover:not(.active) {
        background-color: #555;
        color: white;
    }
    #add {
      position: fixed;
      top: 200px;
      left: 400px;
      right: 300px;
      max-width: 700px;
      background-color: #555;
      color: white;
      z-index: 1;
    }
    .wrapper {
    position: fixed;
    top: 100px;
    left: 0;
    right: 200px;
    width: 100%;
    height: 60%;
    background-image: url('http://i.livescience.com/images/i/000/073/070/iFF/green-technology-stock.jpg?1420054403');;
    background-repeat: no-repeat;
    background-size: 100%;
    opacity: 0.5;
    z-index: -2;
    }
    }
    div.well.validation-errors{
      position: relative;
      left: 400px;
      max-width: 500px;
      color: red;
      align-self: center;
    }
    .add > h1 {
      text-align: center;
    }
    </style>
  </head>
  <body>
    <ul>
      <li><a href="<?php echo site_url('contact/index'); ?>">Home</a></li>
      <li><a  href="<?php echo site_url('contact/add'); ?>">Add
      <li><a class="active" href="<?php echo site_url('contact/about'); ?>">About</a></li>
    </ul>
          <div class="well" id="add">
      <h1>ABOUT</h1>
      <br>
        <p>This is a simple address book app built in PHP, HTML, CSS, and Bootstrap made in the codeIgniter Framwork</p>
      </div>
    <div class="wrapper">
    </div>
  </body>
</html>
