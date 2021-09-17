<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Danh Bạ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page"><i class="fas fa-home pe-1"></i>Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3" style="background-color: #f6f6f6">
                filter
            </div>
            <div class="col-9">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <table class="table">
                    <tr>
                        <th scope="col">Mã nhân viên</th>
                        <th scope="col">Tên nhân viên</th>
                        <th scope="col">Đơn vị</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Số di động</th>
                        <th scope="col">Email</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect('localhost:8000', 'root', '', 'danhba_dhtl')
                   if (!conn){
                        echo '<h1>không thể kết nối</h1>'
                    }
                    $sql = "select *from db_nhanvien ";
					$result = mysqli_query($conn,$sql);
					//03:kiểm tra xử lí kết quả
					if(mysqli_num_rows($result)>0)
					{
						while ($row = mysqli_fetch_assoc($result)){
							echo '<tr>;
							echo '<th scpope="row">'.$row['manv'].'</th>';
							echo
						}
					}
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>