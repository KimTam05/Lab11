<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>KNT - Danh sách nhà cung cấp</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Danh sách Bài viết</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã nhà cung cấp</th>
                    <th>Tên nhà cung cấp</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Điện thoại</th>
                    <th>Tùy chỉnh</th>
                </tr>
            </thead>
            <tbody>
                <form action="" method="post">
                    @forelse ($NhaCC_data as $item)
                        <tr>
                            <td>1</td>
                            <td>{{ $item -> KNTManhacc }}</td>
                            <td>{{ $item -> KNTTennhacc }}</td>
                            <td>{{ $item -> KNTDiachi }}</td>
                            <td>{{ $item -> KNTDienthoai }}</td>
                            <td>{{ $item -> kntemail }}</td>
                            <td>
                                View / Edit / Delete
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">Chưa có dữ liệu</td>
                        </tr>
                    @endforelse
                </form>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $NhaCC_data->links() }}
        </div>
    </div>
</body>
</html>