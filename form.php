<?php
/* @var $this RegisterFormController */
/* @var $model RegisterForm */
/* @var $form CActiveForm */

//echo $this->pageheaderbig(array('Search By Date'));
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'datelevel',
	'enableClientValidation'=>true,
    //'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		
	),
    'htmlOptions'=>array(
        'class'=>$this->formclass,
    )
)); ?>
        <?php echo $this->formstartsection(); ?>
      
 <td width="100%" valign="top">
 <div class="themebg">
<br><br><br><br>
    <div class="signuppage">  
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="600">
  <tr>
    <h3>Search By Date</h3>
  </tr>
  <tr>
    <td width="600" valign="top" class="loginbg1"><form method=post name=mainform onsubmit="return checkform()">
  <input type=hidden name=a value='do_login'>
  <input type=hidden name=follow value=''>
  <input type=hidden name=follow_id value=''>
  <table cellspacing=0 cellpadding=2 border=0>
  <tr>
  	&nbsp;&nbsp; <span class="legend">Fields with * are required.</span> 
    <script>
    function setDOB()
{
var day1 = document.getElementById('day');
var day2 = day1.options[day1.selectedIndex].text;
//if(day2.length < 2 ) day2 = '0'+day2;
var month1 = document.getElementById('month');
var month2 = month1.options[month1.selectedIndex].value;
//if(month2.length < 2 ) month2 = '0'+month2;
var year1 = document.getElementById('year');
var year2 = year1.options[year1.selectedIndex].text;
var strText= year2 +'-'+ month2 + '-'+ day2;
document.getElementById('dob').value= strText;

}
 function setDOB1()
{
var day1 = document.getElementById('day1');
var day2 = day1.options[day1.selectedIndex].text;
//if(day2.length < 2 ) day2 = '0'+day2;
var month1 = document.getElementById('month1');
var month2 = month1.options[month1.selectedIndex].value;
//if(month2.length < 2 ) month2 = '0'+month2;
var year1 = document.getElementById('year1');
var year2 = year1.options[year1.selectedIndex].text;
var strText= year2 +'-'+ month2 + '-'+ day2;
document.getElementById('dob1').value= strText;

}
</script>
 <td align=right class="hisbg2b">
<p align="left">From*:
<?php echo $form->dropdownList($model,'from_date',array('1'=>'Jan','2'=>'Feb','3'=>'Mar','4'=>'Apr','5'=>'May','6'=>'Jun','7'=>'Jul','8'=>'Aug','9'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec'),array("class"=>'inpts','id'=>'month','onchange'=>"setDOB()"));
echo "&nbsp";echo "&nbsp";echo "&nbsp";
echo $form->dropdownList($model,'from_date',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31'),array("class"=>'inpts','id'=>'day','onchange'=>"setDOB()"));
echo "&nbsp";echo "&nbsp";echo "&nbsp";
echo $form->dropdownList($model,'from_date',array('1'=>'2016'),array("class"=>'inpts','id'=>'year','onchange'=>"setDOB()"));?>
<?php echo $form->textField($model,'from_date',array('id'=>'dob','readonly'=>'true'))?>

<br><img src=images/q.gif width=1 height=4><br>

&nbsp;&nbsp;&nbsp;

&nbsp;To*: 
<?php echo $form->dropdownList($model,'to_date',array('1'=>'Jan','2'=>'Feb','3'=>'Mar','4'=>'Apr','5'=>'May','6'=>'Jun','7'=>'Jul','8'=>'Aug','9'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec'),array("class"=>'inpts','id'=>'month1','onchange'=>"setDOB1()"));?>&nbsp;&nbsp;
<?php echo $form->dropdownList($model,'to_date',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31'),array("class"=>'inpts','id'=>'day1','onchange'=>"setDOB1()"));?>&nbsp;&nbsp;
<?php echo $form->dropdownList($model,'to_date',array('1'=>'2016'),array("class"=>'inpts','id'=>'year1','onchange'=>"setDOB1()"));?>
<?php echo $form->textField($model,'to_date',array('id'=>'dob1','readonly'=>'true'))?>


 </td>
 
    </tr>
    </table>
    <br />
      <?php echo $this->formsubmitsection(); ?>
            <?php echo CHtml::submitButton('Submit',array("class"=>'sbmt')); ?>
            <?php echo CHtml::resetButton('Reset',array("class"=>'sbmt')); ?>
    <?php echo $this->formsubmitsectionend(); ?>
     <script>
      $('#submit').click(function(event) {

        var from = $('#from').val(); 
        var to   = $('#to').val();
        $.ajax({
                type: "POST",
                url: "datetransreport.php",
                data:"from="+from+"&to="+to,
                success: function (msg) {

                    //some action
                }
            });

    });
   </script> 
   
    
  </form>
</td>
  </tr>
  
</table>
    
    

     
   
   
    <?php //echo $this->formsubmitsectionend(); ?>
    <?php echo $this->formendsection(); ?>
<?php $this->endWidget(); ?>
<?php echo $this->endpageheaderbig(); ?>
</td>
</div></div>



	<!--<legend>&nbsp;&nbsp;Fields with <span class="required">*</span> are required.</legend>
	<?php //echo $form->errorSummary($model); ?>
    
      <?php //echo $this->textfiledbig(array('label'=>$form->labelEx($model,'usr_code'),'field'=>$form->textField($model,'usr_code',array('class' =>$this->bigfield,'placeholder'=>'User Name','onblur'=>"fiveargs('getusname','sponusr',this.value);"))."<div id='sponusr'></div>",'error'=>$form->error($model,'usr_code',array("class"=>$this->alert1)))); ?>
  
  
    
     <?php //echo $this->textfiledbig(array('label'=>$form->labelEx($model,'from_date'),'field'=>$form->textField($model,'from_date',array('class' =>$this->bigfield,'placeholder'=>'from_date')),'error'=>$form->error($model,'from_date',array("class"=>$this->alert1)))); ?>
    
    
    <?php //echo $this->textfiledbig(array('label'=>$form->labelEx($model,'to_date'),'field'=>$form->textField($model,'to_date',array('class' =>$this->bigfield,'placeholder'=>'to_date')),'error'=>$form->error($model,'to_date',array("class"=>$this->alert1)))); ?>
    <h6></h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
   <?php
   // echo $form->labelEx($model,'From Date');
 /*         $this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    
    'attribute' => 'from_date',
    'value'=>Yii::app()->dateFormatter->format('yyyy-MMM-dd',strtotime($model->from_date)),
       'htmlOptions'=>array(
			 
			'placeholder'=>'From Date',
		),
   
)); ?>
<br /><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<?php 
 //echo $form->labelEx($model,'To Date');
          $this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'attribute' => 'to_date',
    'value'=>Yii::app()->dateFormatter->format('yyyy-MMM-dd',strtotime($model->to_date)),
    'htmlOptions'=>array(
			 
			'placeholder'=>'To Date',
		),
));  ?>


	<?php echo $this->formsubmitsection(); ?>
            <?php echo CHtml::submitButton('Submit',array("class"=>$this->button1)); ?>
            <?php echo CHtml::resetButton('Reset',array("class"=>$this->button2)); ?>
    <?php echo $this->formsubmitsectionend(); ?>
    <?php echo $this->formendsection(); ?>
<?php $this->endWidget(); ?>
<?php echo $this->endpageheaderbig(); */?>


