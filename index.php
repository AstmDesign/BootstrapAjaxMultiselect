<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test the multiselect with ajax</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Bootstrap multiselect -->
    <link rel="stylesheet" href="http://davidstutz.github.io/bootstrap-multiselect/dist/css/bootstrap-multiselect.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <br>

      <form method="post" id="myForm">

        <!-- Build your select: -->
        <select name="categories[]" id="example-getting-started" multiple="multiple" class="col-md-12">
          <option value="A">Cheese</option>
          <option value="B">Tomatoes</option>
          <option value="C">Mozzarella</option>
          <option value="D">Mushrooms</option>
          <option value="E">Pepperoni</option>
          <option value="F">Onions</option>
          <option value="G">10</option>
          <option value="H">11</option>
          <option value="I">12</option>
        </select>
        <br><br>
        <button type="button" class="btnSubmit"> Send </button>

      </form>

      <br><br>
      <div id="result">result</div>
    </div><!--container-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Bootstrap multiselect -->
    <script src="http://davidstutz.github.io/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>

    <!-- Bootstrap multiselect -->
    <script src="ajax.js"></script>

    <!-- Initialize the plugin: -->
    <script type="text/javascript">
      $(document).ready(function() {

        $('#example-getting-started').multiselect();

      });
    </script>

  </body>
</html>
