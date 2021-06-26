<?php
include 'connection.php';
?>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire_html/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jan 2019 07:12:38 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    
    
    <!-- global styles-->
    <link rel="stylesheet" href="admin/css/components.css"/>
    <link rel="stylesheet" href="admin/css/custom.css"/>
    <!-- end of global styles-->
    <link rel="stylesheet" href="admin/css/pages/invoice.css">


    <style>
#pnrtable,#faretable, #pnrth, #pnrtd {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 06px;
}
#pnrtable,#faretable,#psrtable{
    margin-left:auto;
    margin-right: auto;
}

</style>
    
</head>
<body>
    <div id="wrap">
        
        <div class="wrapper">
           
            <!-- /#left -->
            <div id="content" class="bg-container">
                
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <i class="icon ion-card qwe" data-pack="default" data-tags="credit, price, debit, money, shopping, cash, dollars, $"></i>
                                        Your Ticket
                                    </div>
                                    <div class="card-body m-t-35">
                                        <div class="row">

                                            <table style="width:90%" id="pnrtable">

<input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
                                                    <?php

                     $id=$_GET['getid'];
                     $q="SELECT * FROM transaction where id = '$id'";
                  // $q="SELECT * FROM class INNER JOIN train_schedule ON class.train_num=train_schedule.train_num";
                     $sql = mysqli_query($con,$q);
                     $result = mysqli_fetch_array($sql);
                    ?>
 
  <tr>
    <td id="pnrtd"><strong>PNR:</strong> <?php echo $result['pnr']?></td>
    <td id="pnrtd"><b>Train No & Name:</b> <?php echo $result['train_num']?> <?php echo $result['train_name']?></td>
    <td id="pnrtd"><strong>Quota:</strong> General</td>
  </tr>
  <tr>
    <td id="pnrtd"><strong>Transaction Id:</strong> <?php echo $result['trans_id']?></td>
    <td id="pnrtd"><strong>Booking Date $ Time:</strong> <?php echo $result['booking_date']?></td>
    <td id="pnrtd"><strong>Class:</strong> 3rd Ac</td>
  </tr>
  <tr>
    <td id="pnrtd"><strong>From:</strong> <?php echo $result['source']?></td>
    <td id="pnrtd"><strong>Date of Journey:</strong> 19/03/2019</td>
    <td id="pnrtd"><strong>To:</strong> <?php echo $result['destination']?></td>
  </tr>
  <tr>
    <td id="pnrtd"><strong>Passenger Mobile No:</strong> <?php echo $result['mobile']?></td>
    <td id="pnrtd"><strong></strong></td>
    <td id="pnrtd"><strong>Distance:</strong> 1127Km</td>
  </tr>
</table>



     <table style="width:90%; margin-top: 04%;" id="faretable" >
   <tr> <th>Fare Details:</th></tr>
  <tr>
    <td id="pnrtd"><strong>Ticket Fare**</strong></td>
    <td id="pnrtd">RS. <?php echo $result['fare']?>/-</td>
    
  </tr>
  <tr>
    <td id="pnrtd"><strong>Website Service Charge(Incl. of GST)#</strong></td>
    <td id="pnrtd">RS. 0.0/-</td>
    
  </tr>
  <tr>
    <td id="pnrtd"><strong>Total Fare(all inclusive)</strong></td>
    <td id="pnrtd">RS. <?php echo $result['fare']?>/-</td>
    
  </tr>
</table>



     <table style="width:90%; margin-top: 03%;" id="psrtable">
  <tr>
   <th id="pnrth">Passengers Detail:</th>
   </tr>
   <tr style="text-align: center;">
       
       <th id="pnrth">Name</th>
       <th id="pnrth">Age</th>
       <th id="pnrth">Gender</th>
       <th id="pnrth">Booking Status</th>
       <th id="pnrth">Adhar</th>
   </tr>
  <tr style="text-align: center;">
    
    <td id="pnrtd"><?php echo $result['name']?></td>
    <td id="pnrtd"><?php echo $result['age']?></td>
    <td id="pnrtd"><?php echo $result['gender']?></td>
    <td id="pnrtd">CNF</td>
    <td id="pnrtd"><?php echo $result['adhar']?></td>
  </tr>

  <?php

                    ?>
</table>






                                            
                                        </div>
                                        
                                        <div class="row" style="margin-top: 04%;">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header bg-white">
                                                <strong>Dear Passengers Know Your Entitlement</strong>
                                                    </div>
                                                    <div class="card-body m-t-35">
                                                        <div class="table-responsive">
                                                            <table class="table table-sm">
                                                                <thead>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Rail Neer Packaged Drinking Water(Chilled)</strong>
                                                                    </td>
                                                                    <td>
                                                                        <strong></strong>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <strong></strong>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class="text-right">
                                                                        <strong>Price</strong>
                                                                    </td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                        <td>(a). 1 Litter Bottel/1000ml</td>
                                                                    <td></td>
                                                                    <td class="text-center"></td>
                                                                    <td></td>
                                                                    <td class="text-right">RS. 10/-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>(b). 500ml Bottel</td>
                                                                    <td></td>
                                                                    <td class="text-center"></td>
                                                                    <td></td>
                                                                    <td class="text-right">RS. 15/-</td>
                                                                </tr>
                                                                <tr>
                                                            <td><strong>Veg.Breakfast-</strong> Bread Butter and Cutlet- 02 Veg Cutlet(100gm)+02 Bread Slice+10gms Butter Chiplet+ Tomato Sauce</td>
                                                                    <td></td>
                                                                    <td class="text-center"></td>
                                                                    <td></td>
                                                                    <td class="text-right">RS. 30/-</td>
                                                                </tr>
                                                                 <tr>
                                                            <td><strong>Non-Veg.Breakfast-</strong> Omlette of 02 Eggs + 02 Bread slice + 10gm Butter Chiplet + Tomato Sauce</td>
                                                                    <td></td>
                                                                    <td class="text-center"></td>
                                                                    <td></td>
                                                                    <td class="text-right">RS. 35/-</td>
                                                                </tr>
                                                                 <tr>
                                                            <td><strong>Vegetarian-</strong> Rice(150gm) + Paratha(02 nos) / Chapati(04 nos) + Dal/Sambhar(150gms) + Mix Veg(100gms) + Pickle Sanchet + 250ml PWD Glass.</td>
                                                                    <td></td>
                                                                    <td class="text-center"></td>
                                                                    <td></td>
                                                                    <td class="text-right">RS. 50/-</td>
                                                                </tr>
                                                                 <tr>
                                                            <td><strong>Non. Vegetarian-</strong>  Rice(150gm) + Paratha(nos) / Chapati(04 nos) + Dal/Sambhar(150gms) + Egg Curry(02 nos of Eggs) + Pickle Sanchet + 250ml PWD Glass.</td>
                                                                    <td></td>
                                                                    <td class="text-center"></td>
                                                                    <td></td>
                                                                    <td class="text-right">RS. 55/-</td>
                                                                </tr>
                                                                
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <button type="button" class="btn  button-alignment btn-success m-t-15" data-toggle="button">
                                                    
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 invoice_print" >
                                <span class="pull-sm-right">
                                    <a style="color:#fff;" class="btn button-alignment btn-info m-t-15" data-toggle="button" onclick="javascript:window.print();">
                                        Print
                                    </a>
                                    <button type="button" class="btn button-alignment btn-warning m-t-15" data-toggle="button">
                                        Cancel
                                    </button>
                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
        </div>
        <!--wrapper-->
    </div>    
<!-- /#wrap -->
<!-- global scripts-->
<script src="admin/js/components.js"></script>
<script src="admin/js/custom.js"></script>
<!-- end of global scripts-->
</body>

</html>