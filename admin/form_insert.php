<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			height: calc(100vh - 378px);
		}
		form {
			width: 280px;
			height: 378px;
			display: flex;
			flex-direction: column;
		}
		form input {
			height: 20px;
		}
		form textarea {
			height: 60px;
		}
		form button {
			height: 28px;
		}
	</style>
	<title>Insert</title>
</head>
<body>
	
	<form method="post" action="process_insert_items.php">
		Mã Hàng - varchar(5)
		<input type="text" name="ma_hang">
		<br>
		Tên Hàng - varchar(40)
		<input type="text" name="ten_hang">
		<br>
		Đơn Giá - varchar(10
		<input type="text" name="don_gia">
		<br>
		Mô Tả - text
		<textarea name="mo_ta"></textarea>
		<br>
		Link Ảnh - varchar(200)
		<input type="text" name="link_anh">
		<br>
		<button>Thêm</button>
	</form>
</body>
</html>