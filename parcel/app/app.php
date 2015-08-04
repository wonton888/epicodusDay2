<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Parcel.php";

  $app = new Silex\Application();

  $app->get('/', function() {
    return '<head>
      <title>Pracels</title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
      <body>
        <div class="container">

        <h1>Please fill out the form below: </h1>

        <form action="/parcel">
          <div class="form-group">
            <label for="length">Enter the length: </label>
            <input id="length" name="length" class="form-control" type="text">
          </div>
          <div class="form-group">
            <label for="width">Enter the Width: </label>
            <input id="width" name="width" class="form-control" type="text">
          </div>
          <div class="form-group">
            <label for="height">Enter the Height: </label>
            <input id="height" name="height" class="form-control" type="text">
          </div>
          <div class="form-group">
            <label for="weight">Enter the Weight: </label>
            <input id="weight" name="weight" class="form-control" type="text">
          </div>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </body>';
  });

    $app->get('/parcel', function(){

      $first_parcel = new Parcel($_GET["length"], $_GET["width"], $_GET["height"], $_GET["weight"]);
      $first_parcel->setLength($_GET["length"]);
      $first_parcel->setWidth($_GET["width"]);
      $first_parcel->setHeight($_GET["height"]);


?>
      <title>Answers</title>

      <h1> Here are the answers below: </h1>

<?php
      $first_parcel_length = $first_parcel->getLength();
      if ($first_parcel->getlength() == 0)
      {echo  "<p>Length: A number please!</p>";} else {

      echo "<p>Length: $first_parcel_length (ft)</p>";}

      $first_parcel_width = $first_parcel->getWidth();
      if ($first_parcel->getWidth() == 0) {
          echo "<p>Width: A number please!</p>"; }
      else {
          echo "<p>Width: $first_parcel_width (ft)</p>";
      }

      $first_parcel_height = $first_parcel->getHeight();
      if ($first_parcel->getHeight() == 0) {
          echo "<p>Height: A number please!</p>"; }
      else {
          echo "<p>Height: $first_parcel_height (ft)</p>";
      }

      $first_parcel_weight = $first_parcel->getWeight();
      if ($first_parcel->getWeight() == 0) {
          echo "<p>Weight: A number please!</p>"; }
      else {
          echo "<p>Weight: $first_parcel_weight (lbs)</p>";
      }

      $first_parcel_volume = $first_parcel->volume($first_parcel_length, $first_parcel_width, $first_parcel_height);
      echo "<p>Volume: $first_parcel_volume (cubic ft)</p>";

      $first_parcel_ship_cost = $first_parcel->costToShip($first_parcel_weight);
      echo "<p>Shipping Cost:$$first_parcel_ship_cost</p>";

      return "";
    });
    return $app;
?>
