<?php get_header('', 'Tạo mới sản phẩm') ?>

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Tạo mới phòng</h5>
            <!--end::Page Title-->
        </div>
        <!--end::Info-->
    </div>
</div>
<!--end::Subheader-->
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">

        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Form thông tin phòng mới</h3>
            </div>
            <!--begin::Form-->
            <form method="POST" action="/du_an_1_Nhom3/?role=admin&mod=production&action=saveCreate" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-12">
                            <div class="form-group">
                                <label>Tên phòng</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập vào tên phòng" />
                            </div>
                            <div class="form-group">
                                <label>Danh sách loại phòng</label>
                                <select class="form-control select2" name="category_id">
                                    <?php
                                    foreach ($categories as $category) {
                                        //extract($danhmuc);
                                        if ($categories == $category['id']) echo '<option value="' . $category['id'] . '" selected > ' . $category['name'] . ' </option>';
                                        else echo '<option value="' . $category['id'] . '"  > ' . $category['name'] . ' </optinon>';
                                    } ?>
                                 
                                </select>
                            </div>
                            <div class="form-group mb-1">
                                <label for="descriptionCategoryInput">Chi tiết phòng</label>
                                <textarea name="description" id="kt-ckeditor-1"></textarea>
                            </div>
                        </div>
                       
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Giá cho mỗi sản phẩm</label>
                                <div class="input-group">
                                    <input type="number" name="price" class="form-control" placeholder="Giá cho mỗi sản phẩm" aria-describedby="basic-addon2" />
                                    <div class="input-group-append"><span class="input-group-text">VND</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Trạng thái sản phẩm</label>
                                <select class="form-control select2" name="status">
                                    <option value="1">Có thể thuê</option>
                                    <option value="2">Không thể thuê</option>
                                </select>
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="image" id="">
                            </div>
                        </div>
                        <!-- <div class="col col-9">
                            <div><label>Hình ảnh sản phẩm</label></div>
                            <div class="dropzone dropzone-default dropzone-primary" id="kt_dropzone_3">
                                <div class="dropzone-msg dz-message needsclick">
                                    <h3 class="dropzone-msg-title">Kéo thả hình ảnh cần upload</h3>
                                    <span class="dropzone-msg-desc">Chỉ chấp nhận tải lên file hình ảnh</span>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col col-9">
                            <div><label for="">Hình ảnh sản phẩm</label></div>
                            <input type="file" name="image" id="">
                        </div> -->
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Tạo mới</button>
                    <button type="reset" class="btn btn-secondary">Làm lại</button>
                    <a href="/?role=admin&mod=category" class="btn btn-default">Quay về</a>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
<?php get_footer() ?>