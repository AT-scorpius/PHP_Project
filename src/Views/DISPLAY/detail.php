<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eCommerce Product Detail</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- display -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>

body {
  font-family: 'open sans';
  overflow-x: hidden;
 }

img {
  max-width: 100%;
 }
.action{
  margin-top: 100px;
  margin-left: 100px;
}
.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px;
     }
     }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
         }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  padding: 3em;

  }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flexstocking } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
        }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
         }

.product-title, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold;
 }

.checked, span {
  color: black;
  margin-left: 50px;
}

.product-title,.product-description, .price, .vote, .sizes {
  margin-bottom: 15px;
}

.product-title {
  margin-top: 0;
}

.size {
  margin-right: 10px;
 }
  .size:first-of-type {
    margin-left: 40px;
   }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px;
 }
  .color:first-of-type {
    margin-left: 20px;
  }

.add-to-cart, .like {
  background: pink;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: red;
  -webkit-transition: background .3s ease;
          transition: background .3s ease;
         }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff;
   }


@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3);

          }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
          }
        }
@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3);
           }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
            } }


  /* css  */
  .price_size {
    border-radius: 10px 10px 10px 10px;
    border: #f7544a solid 2px;
    width: auto;
    height: auto;
    margin: 2%, 2%, 2%, 2%;
}

#table {
    font-size: small;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
th, td {
  text-align: left;
  padding: 8px;
  font-size: medium;
}

tr:nth-child(even){background-color: #f2f2f2}
#guide-buy {
    display: center;
    margin: 5% 5% 5% 5%;
    font-size: large;
    color: pink;
  }
    
        .nav-item active li{
            color: #FFFFFF;
            text-decoration: none;
        }
        tr, th, td {
            color: #f7544a;
        }
    
.Hinh {
    align-content: center;
    margin-top: 100px;
}

.Hinh img {
    width: 100%;
}
.hinh2 {
    align-content: center;
    margin-left: 15%;
    width: 70%;
    height: auto;
}

</style>
  </head>
  <body>
  

 
  <?php
if(isset($_GET['ma_id'])  && $_GET['ma_id']!=""){
    $id=$_GET['ma_id'];
    include '../../Models/detail-product.php';

    $det= new Detail ();
    $arr=$det->getDetailProduct($id);
    while($product= mysqli_fetch_array($arr)){


      ?>
         <div class='card'>
      <div class='container'>
        <div class='wrapper row'>
<div class='preview col-6 col-md-6 col-xl-6 col-sm-12'>
    <div class='preview-pic tab-content'>
    <div id='hinhanh' class='preview-pic tab-content'>
    <div class='tab-pane active' id='pic-1'><img src="<?php echo $product['image1'];  ?>" /></div>
    <div class='tab-pane' id='pic-2'><img src="<?php echo $product['image2']; ?>"/></div>
    <div class='tab-pane' id='pic-3'><img src="<?php echo $product['image3']; ?>"/></div>
    </div>
    <ul class='preview-thumbnail nav nav-tabs'>
      <li><a data-target='#pic-2' data-toggle='tab'><img src="<?php echo $product['image2']; ?>" /></a></li>
      <li><a data-target='#pic-3' data-toggle='tab'><img src="<?php echo $product['image1']; ?>" /></a></li>
      <li><a data-target='#pic-4' data-toggle='tab'><img src="<?php echo $product['image2']; ?>" /></a></li>
      <li><a data-target='#pic-5' data-toggle='tab'><img src="<?php echo $product['image3']; ?>" /></a></li>
    </ul>
</div>
</div>
<div class='details col-6 col-md-12 col-xl-6 col-sm-12'>
  <h3 class='product-title'><?php echo $product['name_product']; ?></h3>
  <?php } ?>
  <div class='price_size'>
<table id='table'>
          <tr>
              <th>SIZE</th>
              <th>PRICE</th>
              <th>STATUS</th>
          </tr>
  <?php
   $product_size=$det->getDetailProduct_Size($id);
   while($product= mysqli_fetch_array( $product_size)){
    $id= $product['id_product'];
    $id_size=$product['id_size'];

    $size_name=$det->getNameSize($id_size);
    $fetch1 = mysqli_fetch_array( $size_name);

    $price= $det->getPrice($id,$id_size);
    $fetch2 = mysqli_fetch_array( $price);

    $quantity=$det->getQuantity($id,$id_size);
    $fetch3 = mysqli_fetch_array( $quantity);
    if($fetch3['quantity']>0){
      $n="stocking";
    }
    else{
      $n="Out of stock";
    }
  ?>


          <tr>
              <td><?php echo $fetch1['name_size'];?></td>
              <td> <?php echo $fetch2['price'];?></td>
              <td>  <?php echo   $n; ?></td>
          </tr>
<?php } ?>

</table>

      </div>
      <div class='action'>
              <button class='add-to-cart btn btn-default btn-lg' type='button'>add to cart</button>
              <button class='like btn btn-default btn-lg' type='button'><span class='fa fa-heart'></span></button>
      </div>

<div id='guide-buy'>
          <p><i class='far fa-heart '></i> <span>Gift Wrapping - Small Bear - Giving Free Cards</span></p>
          <p><i class='far fa-heart '></i> <span>Fast Delivery - Punctual Delivery & Hand-Handed</span></p>
          <p><i class='far fa-heart '></i> <span>Nationwide Delivery 2 - 5 Days - Receiving New</span></p>
          <p><i class='far fa-heart '></i> <span>Permanent Road Warranty - 1 year Teddy Bear Warranty</span></p>
          <p><i class='far fa-heart '></i> <span>Bear Washing & Cleaning Service at Home Cheap Price</span></p>
          <p> <i class='far fa-heart '></i> <span>Shop Addresses Easy To Find - Free Car Parking</span></p>
          <p><i class='fas fa-map-marker-alt '></i> <span>101B_ Le Huu Trac_ Son Tra_ Da Nang</p>
          <p><i class='fas fa-phone'> </i> <span>Phone: <strong>0945841549</strong></span></p>
</div>
</div>
<?php
$det= new Detail ();
$arr=$det->getDetailProduct($id);
 while($product= mysqli_fetch_array($arr)){
   ?>
<div class='col-12 col-md-12 col-xl-12 col-sm-12 '>
                <div class='Hinh' id='pic-detail'>
                    <div class='hinh2 '><img src="<?php echo $product['image2']; ?>"  /> </br>

                    </div>
                    </br>
                    <div class='hinh2 '><img  src="<?php echo $product['image2']; ?>" /></br>

                    </div>
                    </br>
                    <div class='hinh2 '><img  src="<?php echo $product['image2']; ?>" /></div>
                    </br>
                </div>
                <?php } ?>
                <br>
</div>
</div>
</div>
</div>
</div>
      <?php
     }
   ?>

  </body>
</html>
