<style>
        * {
            box-sizing: border-box;
            font-family: sans-serif;
            font-size: 0.9vw;
        }

        .row {
            float: left;
            width: 100%;
            margin-right: -10px;
            margin-left: -10px;
        }

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            padding-left: 10px;
            padding-right: 10px;
        }

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .btn-group-vertical>.btn-group:after,
        .btn-group-vertical>.btn-group:before,
        .btn-toolbar:after,
        .btn-toolbar:before,
        .clearfix:after,
        .clearfix:before,
        .container-fluid:after,
        .container-fluid:before,
        .container:after,
        .container:before,
        .dl-horizontal dd:after,
        .dl-horizontal dd:before,
        .form-horizontal .form-group:after,
        .form-horizontal .form-group:before,
        .modal-footer:after,
        .modal-footer:before,
        .modal-header:after,
        .modal-header:before,
        .nav:after,
        .nav:before,
        .navbar-collapse:after,
        .navbar-collapse:before,
        .navbar-header:after,
        .navbar-header:before,
        .navbar:after,
        .navbar:before,
        .pager:after,
        .pager:before,
        .panel-body:after,
        .panel-body:before,
        .row:after,
        .row:before {
            display: table;
            content: " ";
        }

        .headeradmin {
            background-color: beige;
            border: 1px #ccc solid;
            color: #ff0844;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1.5vw;
            margin-top: 20px;
            text-align:center;
        }

        .form-control {
            border: 1px solid #e3e3e3;
            border-radius: 4px;
            padding: 7px 12px;
            height: 38px;
            max-width: 100%;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-transition: all 300ms linear;
            -moz-transition: all 300ms linear;
            -o-transition: all 300ms linear;
            -ms-transition: all 300ms linear;
            transition: all 300ms linear;
        }

        .card-box {
            padding: 20px;
            border: 2px solid #f3f3f3;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -moz-border-radius: 5px;
            background-clip: padding-box;
            margin-bottom: 20px;
            background-color: #ffffff;
        }

        .note-editor.note-frame .note-editing-area .note-editable {
            padding: 10px;
            overflow: auto;
            color: #000;
            background-color: #fff;
        }

        .note-editor .note-editing-area .note-editable {
            outline: 0;
        }

        .mota {
            width: 100%;
        }

        .ck-editor__editable_inline {
            min-height: 400px;
        }
</style>



<div class="row">
    <div class="row headeradmin">
        QUẢN LÝ TIN TỨC
    </div>
    <div>

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="p-6">
                                <div class="">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form action="admin.php?act=add_post" method="post"
                                                enctype="multipart/form-data">
                                                <div class="card-box" style="margin-top:15px;">
                                                    <h4 class="m-b-30 m-t-0 header-title"> <b>TIÊU ĐỀ BÀI VIẾT</b> </h4>
                                                    <input type="text" class="form-control" id="posttitle" name="tieude"
                                                        placeholder="Thêm Tiêu Đề" required>
                                                </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="card-box">
                                                <h4 class="m-b-30 m-t-0 header-title"><b>Ngày đăng</b></h4>
                                                <input type="date" id="birthday" name="ngaydang">
                                            </div>
                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="card-box">
                                                <h4 class="m-b-30 m-t-0 header-title"><b>Mô tả tin tức</b></h4>
                                                <input type="text" name="mota" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="card-box">
                                                <h4 class="m-b-30 m-t-0 header-title"><b>Chi tiết bài đăng</b></h4>
                                                <textarea id="mota" class="mota" name="noidung" required></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box">
                                                <h4 class="m-b-30 m-t-0 header-title"><b>Ảnh Nổi Bật</b></h4>
                                                <input type="file" class="form-control" id="postimage" name="img"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box">
                                                <h4 class="m-b-30 m-t-0 header-title"><b>Ẩn/Hiện</b></h4>
                                                <input type="text" class="form-control" id="" name="role" required>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="Lưu và Đăng" name="themmoi"
                                        class="btn btn-success waves-effect waves-light">
                                    <button type="button" class="btn btn-danger waves-effect waves-light"><a
                                            href="admin.php?act=dstintuc">Danh Sách</a></button>
                                </form>
                                        <script src="admin/ckeditor5/ckeditor.js"></script>
                                            <script>
                                            ClassicEditor
                                                .create(document.querySelector('#mota'))
                                                .then(editor => {})
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                            </script>
                                </div>
                                
                            </div> <!-- end p-20 -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

        </div>

    </div>

</div>



<!-- =========================================== -->