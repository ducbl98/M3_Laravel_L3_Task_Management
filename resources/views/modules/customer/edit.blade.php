<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Customer</title>
</head>
<body>
<div class="contain-content">
    <h1>Thêm khách hàng</h1>
    <form method="post" action="{{route('customer.update',['id'=>'1'])}}">
        @csrf
        <input type="text" name="name" placeholder="Nhập tên khách hàng">
        <input type="text" name="phone" placeholder="Nhập SDT khách hàng">
        <input type="text" name="email" placeholder="Nhập Email khách hàng">
        <input type="submit" value="Thêm">
    </form>
</div>
</body>
</html>
