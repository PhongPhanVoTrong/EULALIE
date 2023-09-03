<!-- ============================================= -->


<style>
body {
    box-sizing: border-box;
    font-family: sans-serif;
    font-size: 0.9vw;
    background-color: white;

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
    margin-left: 0.1vw;
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
    text-align:center;
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
    width: 5%;
    background-color: beige;


}

.formdslh table th:nth-child(3) {
    width: 7%;
    background-color: beige;


}

.formdslh table th:nth-child(4) {
    width: 15%;
    background-color: beige;


}

.formdslh table th:nth-child(5) {
    width: 15%;
    background-color: beige;


}

.formdslh table th:nth-child(6) {
    width: 10%;
    background-color: beige;


}

.formdslh table th:nth-child(7) {
    width: 5%;
    background-color: beige;


}

.formdslh table th:nth-child(8) {
    width: 30%;
    background-color: beige;


}

.formdslh table th:nth-child(9) {
    width: 1%;
    background-color: beige;


}






.formdslh table td {
    padding: 10px 20px;
    border: 1px #ccc solid;
    color: #ff0844;
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
    background-color: rgb(255, 250, 250);
    margin-left: 15px;
    padding: 4px 10px;
    border-radius: 5px;
    color: #ff0844;
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
    color: #ffff;
}

.formcontent .mb1 input[type="button"]:hover {
    border: 1px rgb(247, 197, 197) solid;
    background-color: beige;
}
</style>


<div class="row">
    <div class="row headeradmin">
        QUẢN LÝ DANH SÁCH SẢN PHẨM
    </div>
    <form action="admin.php?act=dssanpham" method="post">
        <div class="row formcontent">
            <div class="row formcontent">

                <div class="row mb1 formdslh">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>ID SP</th>
                            <th>Id Loại</th>
                            <th>Tên SP</th>
                            <th>Img</th>
                            <th>Đơn Giá</th>
                            <th>Số Lượt Xem /Ẩn Hiện</th>
                            <th>Mô Tả</th>

                            <th width="5px; !important">Tính Năng</th>
                        </tr>
                        <script>
                                function xoa() {
                                    return confirm("Bạn có chắc chắn muốn xóa không?");
                                }
                                </script>
                        <?php 
                        $i=1;
                            foreach ($dsaddsanpham as $sanpham) {
                                $sanpham['img2']="./public/img/product/imgnb/".$sanpham['img'];
                                if(is_file( $sanpham['img2'])){
                                    $sanpham['img']="<img src='".$sanpham['img2']."'  height='45px' > ";                         
                                   }else{
                                    $sanpham['img']="Không có ảnh";
                                   }
                            echo'        
                            <tr>
                                    <td>'.$i.'</td>         
                                    <td>'.$sanpham['idsp'].'</td>                               
                                    <td>Id = '.$sanpham['idloai'].'      </td>                            
                                    <td>'.$sanpham['tensp'].'</td>           
                                    <td>'.$sanpham['img'].'</td>           
                                    <td>'.$sanpham['dongia'].' VNĐ</td>           
                                    <td>Slx:'.$sanpham['soluotxem'].'   Ẩn/Hiện:'.$sanpham['anhien'].'      </td>           
                                    <td style="   
                        
                                    overflow: hidden;
                                    text-overflow: clip;">'.$sanpham['mota'].' </td>                 
                                    <td>
                                        <a href="admin.php?act=update_sanpham&idsp='.$sanpham['idsp'].' "><img src="https://cdn-icons-png.flaticon.com/128/2904/2904805.png" style="width:20px; height:20px;" ></a>
                                        <a onclick="xoa();"
                                        href="admin.php?act=del_sp&idsp='.$sanpham['idsp'].' ">
                                         <img src="https://cdn-icons-png.flaticon.com/128/7476/7476971.png" style="width:20px; height:20px;" ></>
                                         </td>   
                            </tr>


                              ' ;
                            $i++;
                            }          
                        ?>
                    </table>

                    <!-- onclick="return alert("Bạn có muốn xóa");"   -->
                </div>
            </div>
            <div class="row mb1">
                <a href="admin.php?act=addsanpham"> <input type="button" value="Thêm Mới" name="themmoi" class="btn btn-success waves-effect waves-light"></a>
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
                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="">Interface <span
                                        class=""></span></a>
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