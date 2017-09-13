<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form method='post' id="form" enctype="multipart/form-data" action='http://127.0.0.1:8000/admin/users/add-save' class="inscription">
{{csrf_field()}}
 <div class="form-group">
    <label for="name">name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="Email">Email address</label>
    <input name="email" type="email" class="form-control" id="Email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input name="password" type="password" class="form-control" id="Password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="photo">File input</label>
    <input name="photo" type="file" id="file">
  </div>
  <div class="form-group">
    <input name="id_cms_privileges" type="hidden" id="" value="2">
             </div>
  <center><button type="submit" class="btn btn-default">Submit</button></center>
</form>
  </div>
  <div class="col-md-4"></div>
</div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>