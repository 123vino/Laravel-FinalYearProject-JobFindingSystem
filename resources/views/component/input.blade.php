<div class="form-group">
    <label for="fullname">Fullname</label>
    <input type="text"
      class="form-control" name="fullname" id="fullname" aria-describedby="helpId" placeholder="fullname">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Company Dashboard</title>
  </head>
  <body>
      <h1> Dashboard </h1>
      {{$LoggedUserInfo['comName']}};
      <a href="{{ route('auth.logout') }}">Logout</a>
      
  </body>
  </html>


 