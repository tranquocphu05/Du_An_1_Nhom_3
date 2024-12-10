<?php get_header('', 'Chỉnh sửa sản phẩm') ?>

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Chỉnh sửa sản phẩm</h5>
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
                <h3 class="card-title">Form chỉnh sửa phòng</h3>
            </div>
            <!--begin::Form-->
            <form method="POST" action="/du_an_1_Nhom3/?role=admin&mod=production&action=update"
                enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Danh mục sản phẩm</label>
                        <input type="hidden" value="<?= $production['id'] ?>" name="id">

                        <select class="form-control select2" name="category_id">
                            <?php foreach ($categories as $category) {
                                if ($production['category_id'] == $category["id"]) {
                                    echo '<option  value="' . $category['id'] . '" selected=selected> ' . $category['name'] . '</option>';
                                } else {
                                    echo '<option  value="' . $category['id'] . '" > ' . $category['name'] . '</option>';
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên phòng</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập vào tên phòng"
                            value="<?php echo $production['name'] ?>" />
                        <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                    </div>
                    <div class="form-group">
                        <label>Ảnh phòng</label>
                        <input type="file" name="image" class="form-control"
                            value="<?php echo $production['image'] ?>" />
                        <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                    </div>
                    <div class="form-group">
                        <img src="<?php echo $production['image'] ?>" width="200px" alt="">
                    </div>
                    <div class="form-group">
                        <label>Số lượng phòng</label>
                        <input type="text" name="count" class="form-control" placeholder="Nhập vào số lượng phòng"
                            value="<?php echo $production['count'] ?>" />
                        <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                    </div>
                    <div class="form-group">
                        <label>Giá phòng</label>
                        <input type="text" name="price" class="form-control" placeholder="Nhập vào giá phòng"
                            value="<?php echo $production['price'] ?>" />
                        <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                    </div>
                    <div class="form-group">

                        <input type="radio" value="1" name="status" <?= $production['status'] == 1 ? "checked" : "" ?>>Có
                        thể thuê
                        <input type="radio" value="2" name="status" <?= $production['status'] == 2 ? "checked" : "" ?>>Không thể thuê
                    </div>
                    <div class="form-group mb-1">
                        <label for="descriptionCategoryInput">Mô tả phòng</label>
                        <textarea name="description" class="form-control" id="descriptionCategoryInput"
                            rows="3"><?php echo $production['description'] ?></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Chỉnh sửa</button>
                    <a href="/du_an_1_Nhom3/?role=admin&mod=production" class="btn btn-default">Quay về</a>
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