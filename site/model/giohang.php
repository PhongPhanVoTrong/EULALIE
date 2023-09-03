<?php 

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

function themvaogiohang($id,$tenhanghoa,$giahanghoa,$giamgia,$hinh)
{
    $soluong = 1;
    $i = 0;
    $found = false;
  if (isset($_SESSION['cart']) && (count($_SESSION['cart'])) > 0) {
    foreach ($_SESSION['cart'] as $item) {

      if ($item['id'] == $id) {
        echo 'okl';
        $soluong += $item['soluong'];
        $found = true;
        $_SESSION['cart'][$i]['soluong'] = $soluong;

        break;
      }
      $i++;
    }

  }


  if (!$found) {

    $new_product = ['id' => $id, 'hinh' => $hinh,'giam_gia' => $giamgia, 'tenhanghoa' => $tenhanghoa, 'giahanghoa' => $giahanghoa, 
    'soluong' => $soluong];
    array_push($_SESSION['cart'], $new_product);
    
  }
  
}


function xoagiohang()
{
    # code...
    if (isset($_SESSION['cart'])) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            foreach($_SESSION['cart'] as $key => $item){
                if($id == $item['id']){
                    unset($_SESSION['cart'][$key]);
                    break;
                    
                }
    }
    
    // array_splice($_SESSION['cart'], $_GET['id'], 1);
  }
}
}

function xoatatcagiohang()
{
    # code...
   if(isset($_SESSION['cart'])){
    unset($_SESSION['cart']);
   }
}



