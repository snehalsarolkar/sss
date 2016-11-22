 <td valign="top" width="100%">
    <div class="themebg">
<br><br><br><br>
    <div class="signuppage1">
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="950">
  <tr>
    <h3>Search Transactions By Date</h3>
  </tr>
  <tr>
    <td width="600" valign="top" class="loginbg1"><form method=post name=mainform onsubmit="return checkform()">
  <input type=hidden name=a value='do_login'>
  <input type=hidden name=follow value=''>
  <input type=hidden name=follow_id value=''>
  <table cellspacing=0 cellpadding=2 border=0>
  
  <tr>
  

                          
                      <!--<img src="<?php //echo Yii::app()->request->baseUrl; ?>/img/logohome.png" alt="" />-->
               <?php 
                                    $compmodel = new Company;
                                    $compmodel = $compmodel->findByAttributes(array('id'=>1),array('select'=>'comp_name,comp_add,comp_city,pincode,mobile'));
            $record1 =  $compmodel->comp_name;
            $record2 =  $compmodel->comp_add;
            $record3 =  $compmodel->comp_city;
            $record4 =  $compmodel->pincode;
            $record5 =  $compmodel->mobile;
            
            //echo "<p><b>".$record1."</b></p>"; 
                                     //echo "<p>".$record2."</p>";
                                     //echo "<p>".$record3."</p>";
                                     ?><!--<b>Contact No.</b>--> <?php //echo "$record5";
                                   
                                   //  $fromdate=date("Y-m-d"); 
                                   // $fromdate1=$fromdate.' 00:00:00';
                                   // echo date_format($fromdate,"Y/m/d H:i:s");
                                  //  echo "From Date".$fromdate1;
                                  //  $todate=date("Y-m-d");
                                 //   $todate1=$todate.' 00:00:00';
                                 //   echo "Todate".$todate1;
                                 //   exit();
                                //    exit();
                                    ?>
                                  <?php 
                                   $urname=new User();
                                    // echo "<h5><p><b>".$id."</b></p></h5>";
                                   
                                 
                                     ?>
                                    </div>
                                    
                                    
                                    
                         
                          <br /><br />
                                     <?php
                                    $usrmodel=new User();
                                    $getdata = $usrmodel->findByAttributes(array('usr_id'=>2),array('select'=>'usr_code,usr_fst_nm'));
                                    $code= $getdata->usr_code;
                                    echo"<h4><p><span class=legend>User ID      :</span><font  size='3'> ".$code."</font></p></h4>";
                                    echo"<strong><span class=legend> From Date :-&nbsp;</span></strong><font  size='3'> <b>".$fromdate."<b></font>";

                                 echo "&nbsp;"; echo "&nbsp;";echo "&nbsp;";
                                 
                                 echo"<strong><span class=legend>To Date :-&nbsp;</span></strong><font  size='3'> <b>".$todate."<b></font>";
                                 echo "<br/>";
                                 echo "<br/>";
                                    //echo "<h4><p><span class=legend>From Date   :</span>".$fromdate."</p></h4>";
                                     //echo "<h4><p><span class=legend>To Date    :</span>".$todate."</p></h4>";
                                  
                                    ?></h4>
                      </div>
                  </div>
                 
              </div>
                           
                           <!-- <div class="row-fluid">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    
                                    <tr>
                                        
                                        <th><?php ?></th>
                                        <th></th>
                                        <th></th>
                                             <th></th>
                                        <th></th> <th></th><th></th><th></th>     <th></th>
                                         <th></th>
                                        <th></th>
                                         <th></th>
                                        <th></th>
                                         <th></th>
                                        <th></th>
                                         <th></th>
                                        <th></th>
                                         <th></th><th></th>
                                         <th></th>
                                        <th></th>
                                        <th></th>
                                        
                                        
                                        <th></th>
                                    </tr>
                                    
                                </table>
                                <table class="table table-striped table-hover" >    
                                    <tr >
                                        <th bgcolor="#868686"><i>No</i></th>
					   <th><i>User Code<i></th>
                        <th><i>User Name<i></th>
                         <th><i>Date<i></th>
					  <th><i>Amount<i></th>
					  <th><i>Remark</i></th>
					  
					  <th><i></i></th>
					  <th><i></i></th>
					  
                                    </tr>
                                    </thead>-->
                                    <table cellspacing=1 cellpadding=2 border=0 width=100% class=line> <tr><td>
                                    <table  cellspacing=1 cellpadding=2 border=0 width=100%>
        
<tr>
<td class="inheader" width=10 align="center">No</td>
 <td class="inheader" width=100 align="center">User Code</td>
 <td class="inheader" width=100 align="center">User Name</td>
 <td class="inheader" width=170 align="center">Date</td>
 <td class="inheader" width=120 align="center">Amount</td>
 <td class="inheader" width=150 align="center">Remark</td>
 </tr>
                             <?php
                                //$datprovider=$usrmodel->$id;
        //$data=$datprovider->getdata();
        $model=new Tree();
        $usrmodel=new User();
        $trans=new Transaction();
        $epinmodel=new Productpin();
        
        $treemodel = new Tree;
        $productmodel=new Product();
      
        $i=1;
        $grandtot=0;
        $grandtds=0;
        $grandservice=0;
        $j = 0;
        
        //foreach($data as $rec)
        //{
        
         $prosum=0;
         $protot=0;
         $cnt=0;
         $epinamt=0;
        // $maturitymodel=new Maturity();
         $criteria = new CDbCriteria;
         $criteria->select = 'usr_id,crdr_amt,crdr_remark,crdr_dep,crdr_trdt';
         $criteria->condition='usr_id>2 and crdr_dep="ADMIN_PAIR"';
         $criteria->addBetweenCondition('DATE(crdr_trdt)', $fromdate, $todate);         
         $gatepin = $trans->findAllByAttributes(array(),$criteria); 
         //print_r($gatepin);
         //exit;        
         foreach($gatepin as $record)
         {
             $usrid = $record->usr_id;
             $getusrid=$usrmodel->findByAttributes(array('usr_id'=>$usrid),array('select'=>'usr_code,usr_fst_nm,usr_id'));
             
            
             $usercode=$getusrid->usr_code;
             $username=$getusrid->usr_fst_nm;         
             $amount=$record->crdr_amt;
             $crdr_remark=$record->crdr_remark;
             $date = $record->crdr_trdt;
             
        
                        
            ?>
            <tbody>
                                    <tr>
                                         <?php echo "<td class=hisborder1>".$i."</td>"; ?>
                                         <?php echo "<td class=hisborder1>".$usercode."</td>"; ?>
                                          <?php echo "<td class=hisborder1>".$username."</td>"; ?>
                                          <?php echo "<td class=hisborder1>".$date."</td>" ?>
                                         <?php echo "<td class=hisborder1>".$amount."</td>" ?>
                                         <?php echo "<td class=hisborder1>".$crdr_remark."</td>" ?>
                                          
                                         <?php $i++; ?>
                                       
                                    </tr>
                                    <?php $grandtot+=$amount; ?> 
                                       
            <?php  } ?>       
                           
                           
                           
            <?php   
               
         $criteria = new CDbCriteria;
         $criteria->select = 'usr_id,crdr_amt,crdr_remark,crdr_dep,crdr_trdt';
         $criteria->condition=' crdr_dep="tds" and usr_id>2';
         $criteria->addBetweenCondition('DATE(crdr_trdt)', $fromdate, $todate);         
         $gatetds = $trans->findAllByAttributes(array(),$criteria);
         
         foreach($gatetds as $record)
         {
             $usrid = $record->usr_id;
             $getusrid=$usrmodel->findByAttributes(array('usr_id'=>$usrid),array('select'=>'usr_code,usr_fst_nm,usr_id'));
             
            
             $usercode=$getusrid->usr_code;
             $username=$getusrid->usr_fst_nm;         
             $amount1=$record->crdr_amt;
             $crdr_remark=$record->crdr_remark;
             $date = $record->crdr_trdt;
             
             $grandtds+=$amount1;
             
        }
                 ?>  
                 
        <?php   
               
         $criteria = new CDbCriteria;
         $criteria->select = 'usr_id,crdr_amt,crdr_remark,crdr_dep,crdr_trdt';
         $criteria->condition=' usr_id>2 and crdr_dep="service"';
         $criteria->addBetweenCondition('DATE(crdr_trdt)', $fromdate, $todate);         
         $gateservice = $trans->findAllByAttributes(array(),$criteria);
         
         foreach($gateservice as $record)
         {
             $usrid = $record->usr_id;
             $getusrid=$usrmodel->findByAttributes(array('usr_id'=>$usrid),array('select'=>'usr_code,usr_fst_nm,usr_id'));
             
            
             $usercode=$getusrid->usr_code;
             $username=$getusrid->usr_fst_nm;         
             $amount1=$record->crdr_amt;
             $crdr_remark=$record->crdr_remark;
             $date = $record->crdr_trdt;
             
             $grandservice+=$amount1;
             
        }
                 ?>        
                                    
                                  
                                   
      <?php //}  ?> 
                                   
                                    </tbody>
                                    <tr><td><br /></td></tr>
                                    <tr>
    <td colspan=5>
    <span class=legend><p align="center">Total:<b>$<?php echo $grandtot; ?></span></b></td>
</tr>
                                </table>
                                <style>
ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
    
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

ul.pagination li a.active {
    background-color: #E63A25;
    color: white;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}
</style>

                            <div class="pager">
                            <ul class="pagination">
                             <li><a href="#">«</a></li>
  <li class="page"><a href="/robot1/index.php/transaction/transdate">1</a></li>
  <li><a class="active" href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">6</a></li>
  <li><a href="#">»</a></li>
</ul>
                            </div>
                                                       <?php /* $sql = "SELECT COUNT(ID) AS total FROM cho_crdr"; 
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page);*/?>
                            <?php
                            $record_per_page=25;
                            $total_pages=ceil($total_records /$record_per_page);
                            /*$results_per_page=25;
                            $total_pages = ceil($total_records / $results_per_page);
                            for ($i=1; $i<=$total_pages; $i++) { 
    echo "<a href='/robot1/index.php/transaction/transdate?page=".$i."'>".$i."</a> "; 
}; */?>
                            
<?php

// database connection stuff here
//$rows_per_page = 10;
//$sql = "SELECT * FROM cho_crdr";
//$result = mysql_query($sql);
//$total_records = mysql_num_rows($result);
//$pages = ceil($total_records / $rows_per_page);
//mysql_free_result($result);
?> 
<script type="text/javaScript">

$(document).ready(function(){

$('#table-div-id').tablePaginate({navigateType:'full',recordPerPage:25});
});
</script>

                            
                            <!--<div class="row-fluid">
                                <div class="span4 invoice-block pull-right">
                                    <ul class="unstyled amounts">
                                        <li>  Total amount : <?php //echo $grandtot; //echo ".$record->inv_amt." ?></li>
                                        
                                    </ul><br /><br />
                                    
                                   <p> <?php //yii::app()->session['usr_id']; ?> </p> 
                                </div>
                                  
                            </div>-->
                            </td></tr></table>
                            <br />
                           <?php echo CHtml::link('Back', array('transaction/transdate'),array('class'=>'sbmt')); ?>
                            <div class="space20"></div>
                            <div class="row-fluid text-center">                                
                              
                            </div>
                                               
                  
               </tr></table></td>
            
            
          
    
  
  <script language="javascript" type="text/javascript">

        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();
            
            
            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>   
    
        
