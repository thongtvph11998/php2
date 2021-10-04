
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm sản phẩm</h1>
    <form action="" method="POST" enctype="multipart/form-data">
            <div class="col-sm-12">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId"
                               placeholder="">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm</label>
                        <input type="file" class="form-control-file" name="image" id="" aria-describedby="helpId"
                               placeholder="">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="hot" id="hot" aria-describedby="helpId"
                               placeholder="">
                        <label for="hot" class="form-check-label">Hot</label>
                    </div>
                </div>
               <div class="col-sm-8">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mô tả</label>
                        
                        <div class="card-body pad">
                            <div class="mb-3">
                                <textarea class="textarea" placeholder="Place some text here" name="mo_ta">
                                </textarea>
                      
                    </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input type="number" class="form-control" name="so_luong" id="" aria-describedby="helpId"
                               placeholder="">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="">Giá sản phẩm</label>
                        <input type="number" class="form-control" name="gia_sp" id="" aria-describedby="helpId"
                               placeholder="">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                                    <label for="">Danh Mục</label>
                                    <select class="form-control" name="danh_muc" id="">
                                               
                                     <option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option>
                                            </select>
                                </div>
                </div>

                <div class="col-sm-8">
                    <button type="submit" name="btn_insert" id="" class="btn btn-primary">Thêm mới
                    </button>
                    <a name="" id="" class="btn btn-primary" href="index.php?page=cate" role="button">Quay Lại</a>
                </div>
            </div>
        </form>
</body>
</html>