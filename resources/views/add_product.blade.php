<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <div class="form-outline mb-4">
                    <input type="text" id="form1Example13" class="form-control form-control-lg" name="name"/>
                    <label class="form-label" for="form1Example13">Name</label>
                  </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form1Example13" class="form-control form-control-lg" name="description"/>
                  <label class="form-label" for="form1Example13">Description</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="number" id="form1Example23" class="form-control form-control-lg" name="count" />
                  <label class="form-label" for="form1Example23">Count</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="add()">Add</button>
            </div>
          </div>
        </div>
      </section>

      <script src="/js/add_product.js"> </script>
</body>
</html>
