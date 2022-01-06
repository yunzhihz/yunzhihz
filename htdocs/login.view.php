<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- jQuery and JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<title>登录</title>
  </head>
  <body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-4 offset-4 border border-info p-2">
				<form action="login.controller.php" method="POST">
				  <div class="form-group">
				    <label for="username">用户名</label>
				    <input type="text" class="form-control" id="username" name="username" aria-describedby="请输入用户名">
				    <small class="form-text text-muted">我们对您的输入信息将严格保密</small>
				  </div>
				  <div class="form-group">
				    <label for="password">密码</label>
				    <input type="password" id="password" class="form-control" name="password">
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="remeberPassword">
				    <label class="form-check-label" for="remeberPassword">记住密码</label>
				  </div>
				  <button type="submit" class="btn btn-primary">登录</button>
				</form>
			</div>
		</div>
	</div>
  </body>
</html>