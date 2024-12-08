<?php get_header('','tạo mới dịch vụ') ?>

<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-beetween flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Tạo mới dịch vụ</h5>
        </div>
    </div>
</div>

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Form thông tin dịch vụ mới</h3>
            </div>
            <form method="POST" action="/du_an_1_Nhom3/?role=admin&mod=service&action=saveCreate" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên dịch vụ</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên dịch vụ" />
                    </div>
                    <div class="form-group">
                        <label>Giá dịch vụ</label>
                        <input type="text" name="price" class="form-control" placeholder="Nhập giá dịch vụ" />
                    </div>
                    <div class="form-group mb-1">
                            <label for="descriptionCategoryInput">Mô tả dịch vụ</label>
                            <textarea name="description" class="form-control" id="descriptionCategoryInput" rows="3"></textarea>
                        </div>
                        <div class="col col-9">
                            <div><label for="">Hình ảnh dịch vụ</label></div>
                            <input type="file" name="image" id="">
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Tạo mới</button>
                    <button type="reset" class="btn btn-secondary">Làm lại</button>
                    <a href="du_an_1_Nhom3/?role=admin&mod=service" class="btn btn-default">Quay về</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php get_footer() ?>