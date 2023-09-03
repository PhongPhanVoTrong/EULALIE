<style>
* {
    box-sizing: border-box;
    font-family: sans-serif;
    font-size: 0.9vw;
}

.row {
    float: left;
    width: 100%;
    margin-left: 0.5px
}


.mb {
    margin-bottom: 30px;
}

.mb1 {
    margin-bottom: 5px;
    margin-top: 3vw;
    margin-left:15.2vw;
}

/* .mr {
    margin-right: 2%;
} */


.headeradmin {
    background-color: beige;
    border: 1px #ccc solid;
    color: #ff0844;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1.5vw;
    margin-top: 25px;
    text-align: center;
}


.formcontent {
    padding: 20px 0;
}

.formdslh table {
    width: 100%;
    border-collapse: collapse;
}

/*  */
.formdslh table th:nth-child(1) {
    width: 5%;
    padding: 20px 0px;
    background-color: beige;

}

.formdslh table th:nth-child(2) {
    width: 20%;
    background-color: beige;


}

.formdslh table th:nth-child(3) {
    width: 15%;
    background-color: beige;


}

.formdslh table th:nth-child(4) {
    width: 20%;
    background-color: beige;


}

.formdslh table th:nth-child(5) {
    width: 10%;
    background-color: beige;


}

.formdslh table th:nth-child(6) {
    width: 10%;
    background-color: beige;


}

.formdslh table th:nth-child(7) {
    width: 10%;
    background-color: beige;


}


.formdslh table td {
    padding: 10px 20px;
    border: 1px #ccc solid;
    color: red;
}

.formdslh table th {
    padding: 10px 20px;
    border: 1px #ccc solid;
    color: #ff0844;
}



.ml {
    float: left;
    width: 45%;
    margin-left: 15px;
}

.mr {
    float: right;
    width: 30%;
}



.formcontent .ml .mb1 input[type="text"] {
    width: 50%;
    border: 1px #ccc solid;
    padding: 4px 10px;
    border-radius: 5px;


}

.formcontent .ml .mb1 input[type="text"]:hover {
    border: 1px rgb(247, 197, 197) solid;
}

.formcontent .mb1 input[type="submit"] {
    width: 7%;
    border: 1px #ccc solid;
    margin-left: 15px;
    padding: 4px 10px;
    border-radius: 5px;
    color: #fff;
}

.formcontent .mb1 input[type="submit"]:hover {
    border: 1px rgb(247, 197, 197) solid;
    background-color: beige;
}

.formcontent .mb1 input[type="button"] {
    width: 7%;
    border: 1px #ccc solid;
    margin-left: 15px;
    padding: 4px 10px;
    border-radius: 5px;
    color: #fff;
}

.formcontent .mb1 input[type="button"]:hover {
    border: 1px rgb(247, 197, 197) solid;
    background-color: beige;
}


.row {
    float: left;
    width: 100%;
    /* margin-right: -10px;
    margin-left: -10px; */
}

.dv input[type="radio"] {
    width: 2%;
    line-height:2%;
    display:inline-block;
    margin:0px 10px 0px 25px;
}

.card-box #idl{
    width: 20%;
    border:0.1px solid #cccc;
    box-shadow: 0px 0px 0.15px 0.15px #cccc;
    border-radius:3px;
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
    margin: 10px 50px 0px 210px;
    background-color: #ffffff;
    width: 70%;
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
        QUẢN LÝ THÊM SẢN PHẨM
    </div>
    <div class="row formcontent">
        <form action="admin.php?act=addsanpham" method="post" enctype="multipart/form-data">
            <div class="row mb1 ml">

                <!-- <div class="row mb1">
                    Id Loại <br>
                    <select name="idloai" id="">
                        <?php
                                    foreach ($dsaddloai as $loai) {
                                        # code...
                                        echo'
                                        <option value=" ' .$loai['idloai']. ' "> '   .$loai['tenloai'].  ' </option> ';                          
                                    }
                                    ?>
                    </select>
                </div> -->

                <div class="row">
                    <div class="col-sm-12">
                        <form action="admin.php?act=add_post" method="post" enctype="multipart/form-data">
                            <div class="card-box" style="margin-top:15px;">
                                <h4 class="m-b-30 m-t-0 header-title"> <b>Loại sản phẩm</b> </h4>
                                <!-- <input type="text" class="form-control" id="" name="idloai" placeholder="Thêm mô tả"
                                    required> -->
                                <select name="idloai" id="idl">
                                    <?php
                                    foreach ($dsaddloai as $loai) {
                                        # code...
                                        echo'
                                        <option value=" ' .$loai['idloai']. ' "> '   .$loai['tenloai'].  ' </option>
                                
                                         ';                          
                                    }
                                    ?>
                                </select>
                            </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <form action="admin.php?act=add_post" method="post" enctype="multipart/form-data">
                            <div class="card-box" style="margin-top:15px;">
                                <h4 class="m-b-30 m-t-0 header-title"> <b>Tên Sản Phẩm</b> </h4>
                                <input type="text" class="form-control" id="" name="tensp" placeholder="Thêm sản phẩm"
                                    required>
                            </div>
                    </div>
                </div>

                <!--  -->


                <div class="row">
                    <div class="col-sm-12">
                        <form action="admin.php?act=add_post" method="post" enctype="multipart/form-data">
                            <div class="card-box" style="margin-top:15px;">
                                <h4 class="m-b-30 m-t-0 header-title"> <b>Hình</b> </h4>
                                <input type="file" class="form-control" id="" name="img" placeholder="Thêm hình"
                                    required>
                            </div>
                    </div>
                </div>

                <!--  -->


                <div class="row">
                    <div class="col-sm-12">
                        <form action="admin.php?act=add_post" method="post" enctype="multipart/form-data">
                            <div class="card-box" style="margin-top:15px;">
                                <h4 class="m-b-30 m-t-0 header-title"> <b>Giá Sản phẩm</b> </h4>
                                <input type="text" class="form-control" id="" name="gia" placeholder="Thêm giá sản phẩm"
                                    required>
                            </div>
                    </div>
                </div>

                <!--  -->

                <div class="row">
                    <div class="col-sm-12">
                        <form action="admin.php?act=add_post" method="post" enctype="multipart/form-data">
                            <div class="card-box" style="margin-top:15px;">
                                <h4 class="m-b-30 m-t-0 header-title"> <b>Số lượt xem</b> </h4>
                                <input type="text" class="form-control" id="" name="slx" placeholder="Thêm số lượt xem"
                                    required>
                            </div>
                    </div>
                </div>

                <!--  -->


                <div class="row">
                    <div class="col-sm-12">
                        <form action="admin.php?act=add_post" method="post" enctype="multipart/form-data">
                            <div class="card-box" style="margin-top:15px;">
                                <h4 class="m-b-30 m-t-0 header-title"> <b>Mô tả sản phẩm</b> </h4>
                                <input type="text" class="form-control" id="" name="tt" placeholder="Thêm mô tả"
                                    required>
                            </div>
                    </div>
                </div>


                <!--  -->



                <div class="row">
                    <div class="col-sm-12">
                        <form action="admin.php?act=add_post" method="post" enctype="multipart/form-data">
                            <div class="card-box" style="margin-top:15px;">
                                <h4 class="m-b-30 m-t-0 header-title"> <b>Ẩn Hiện</b> </h4>
                                <div class="dv">
                                    <input type="radio" class="form-control" id="" name="role"
                                        placeholder="Ẩn hiện loại" checked>Ẩn
                                    <input type="radio" class="form-control" id="" name="role"
                                        placeholder="Ẩn hiện loại" checked>Hiện
                                </div>
                            </div>
                    </div>
                </div>

                <!--  -->
            </div>
            <div class="row mb1">
                <input type="submit" value="Thêm Mới" name="themmoi" class="btn btn-success waves-effect waves-light">
                <a href="admin.php?act=dssanpham"> <input type="button" value="Danh Sách" class="btn btn-danger waves-effect waves-light"></a>
            </div>
        </form>
    </div>
</div>
</body>

</html>


<!-- =========================================== -->


<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Chart" href="">Home <span class=""></span></a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dashboard.html">Dashboard
                                            v.1</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dashboard-2.html">Dashboard
                                            v.2</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/analytics.html">Analytics</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/widgets.html">Widgets</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="">Products <span
                                        class=""></span></a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/inbox.html">Inbox</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/view-mail.html">View
                                            Mail</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/compose-mail.html">Compose
                                            Mail</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#others" href="">Pages<span class=""></span></a>
                                <ul id="others" class="collapse dropdown-header-top">
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/profile.html">Profile</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/contact-client.html">Contact
                                            Client</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/contact-client-v.1.html">Contact
                                            Client v.1</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/project-list.html">Project
                                            List</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/project-details.html">Project
                                            Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="">Interface
                                    <span class=""></span></a>
                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/google-map.html">Google
                                            Map</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/data-maps.html">Data
                                            Maps</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/pdf-viewer.html">Pdf
                                            Viewer</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/x-editable.html">X-Editable</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/code-editor.html">Code
                                            Editor</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/tree-view.html">Tree
                                            View</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/preloader.html">Preloader</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/images-cropper.html">Images
                                            Cropper</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Chartsmob" href="">Charts <span
                                        class=""></span></a>
                                <ul id="Chartsmob" class="collapse dropdown-header-top">
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/bar-charts.html">Bar
                                            Charts</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/line-charts.html">Line
                                            Charts</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/area-charts.html">Area
                                            Charts</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/rounded-chart.html">Rounded
                                            Charts</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/c3.html">C3
                                            Charts</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/sparkline.html">Sparkline
                                            Charts</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/peity.html">Peity
                                            Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="">Tables <span
                                        class=""></span></a>
                                <ul id="Tablesmob" class="collapse dropdown-header-top">
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/static-table.html">Static
                                            Table</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/data-table.html">Data
                                            Table</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#formsmob" href="">Forms <span
                                        class=""></span></a>
                                <ul id="formsmob" class="collapse dropdown-header-top">
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/basic-form-element.html">Basic
                                            Form Elements</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/advance-form-element.html">Advanced
                                            Form Elements</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/password-meter.html">Password
                                            Meter</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/multi-upload.html">Multi
                                            Upload</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/tinymc.html">Text
                                            Editor</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dual-list-box.html">Dual
                                            List Box</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Appviewsmob" href="">App views <span
                                        class=""></span></a>
                                <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/basic-form-element.html">Basic
                                            Form Elements</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/advance-form-element.html">Advanced
                                            Form Elements</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/password-meter.html">Password
                                            Meter</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/multi-upload.html">Multi
                                            Upload</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/tinymc.html">Text
                                            Editor</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dual-list-box.html">Dual
                                            List Box</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="">Pages <span
                                        class=""></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/login.html">Login</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/register.html">Register</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/captcha.html">Captcha</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/checkout.html">Checkout</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/contact.html">Contacts</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/review.html">Review</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/order.html">Order</a>
                                    </li>
                                    <li><a
                                            href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/comment.html">Comment</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="breadcome-area des-none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a
                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dashboard.html"><i
                                            class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <!-- <li><a href="">Home</a> <span class="bread-slash">/</span> -->
                                </li>
                                <li><span class="bread-blod">Dashboard</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>