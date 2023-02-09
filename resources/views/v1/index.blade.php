<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: - Penerapan CRUD pada Laravel ::..</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<br />
@if (\Session::has('success'))
<div class="alert alert-success">
<p>{{ \Session::get('success') }}</p>
</div><br />
@endif
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Nama</th>
<th>Harga</th>
<th colspan="2">Action</th>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
<td>{{$product['id']}}</td>
<td>{{$product['name']}}</td>
<td>{{$product['price']}}</td>
<td><a href="{{action('ProductController@edit', $product['id'])}}"
class="btn btn-warning">Ubah</a></td>
<td>
<form action="{{action('ProductController@destroy',
$product['id'])}}" method="post">
{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<button class="btn btn-danger" type="submit">Hapus</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</body>
</html>