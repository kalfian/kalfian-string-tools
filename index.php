
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>String Tools - Kalfian</title>
    <link rel="icon" href="https://www.kalfian.com/wp-content/uploads/2022/08/cropped-logo-kalfian-32x32.png" sizes="32x32"/>
    <link rel="icon" href="https://www.kalfian.com/wp-content/uploads/2022/08/cropped-logo-kalfian-192x192.png" sizes="192x192"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">String Tools</h5>
    </div>
    <div class="container">
      <div class="card-deck mb-3">
        <div class="card mb-6 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Input Text</h4>
          </div>
          <div class="card-body">
          <div class="btn-group mb-3" role="group" aria-label="Basic example">
            <button type="button" id="unescape-string" class="btn btn-secondary">Unescape String</button>
            <button type="button" id="json-format" class="btn btn-secondary">Json Format</button>
            <button type="button" id="escape-string" class="btn btn-secondary">Escape String</button>
          </div>
            <textarea rows="20" class="form-control" id="json-input-output"></textarea>
          </div>
        </div>
        <div class="card mb-6 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Formatted Json (Comming soon)</h4>
          </div>
          <div class="card-body">
            <div></div>
          </div>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; <?php echo date('Y'); ?> Kalfian</small>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $("#unescape-string").click(function() {
        var input = $("#json-input-output").val();
        var output = unescape(input);
        $("#json-input-output").val(output);
      });

      $("#json-format").click(function() {
        var input = $("#json-input-output").val();
        var output = JSON.stringify(JSON.parse(input), null, 2);
        $("#json-input-output").val(output);
      });
    </script>
  </body>
</html>
