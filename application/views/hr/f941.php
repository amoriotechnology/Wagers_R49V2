<style>
.pe-7s-cart{
  position: absolute;
  top: -44px;
  left: 50px;
  margin-left: 769px;
}

.pe-7s-help1{
  position: absolute;
  top:-68px;
  left:95px;
  margin-left: 770px
}

.pe-7s-settings{
  position: absolute;
  top:-92px;
  left:142px;
  margin-left: 770px;
}

.label{
  position: absolute;
  top: -79px;
  display: none;
}
.navbar {
  height: 40px;
}
.sidebar-toggle{
  margin-top: -97px;
  margin-left: -971px;
}

.pe-7s-bell{
  position: relative;
  left: 768px;
}
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="<?= base_url('my-assets/css/f941.css'); ?>" />
    <!-- <link rel="stylesheet" href="print.css" /> -->
    <title>Document</title>
  </head>
  <body>
 
<button class="btnclr btn btn-default dropdown-toggle  boxes filip-horizontal mobile_para"  onclick="downloadPagesAsPDF()" style="margin-left:80%;background: white;border: 2px solid black;" ><span  class="fa fa-download"></span>Download </button>

<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="download">
    <div class="container-fluid" id="one">
      <div class="row">
      <img src="<?= base_url()  ?>asset/images/941_1.jpg"  style="width:99%; margin-top: -2px; "  />
    
      <?php
      $Federal_Pin_Number = isset($get_cominfo[0]['Federal_Pin_Number']) ? $get_cominfo[0]['Federal_Pin_Number'] : '';
      if (strlen($Federal_Pin_Number) >= 9) {
        $one = substr($Federal_Pin_Number, 0, 2);
        $two = substr($Federal_Pin_Number, -7);

        $one1 = $one[0];
        $one2 = $one[1];

        $two3 = $two[0]; // Corrected from $two[2]
        $two4 = $two[1]; // Corrected from $two[3]
        $two5 = $two[2]; // Corrected from $two[4]
        $two6 = $two[3]; // Corrected from $two[5]
        $two7 = $two[4]; // Corrected from $two[6]
        $two8 = $two[5]; // Corrected from $two[7]
        $two9 = $two[6]; // Corrected from $two[8]
      } else {
          $one = '00'; // Example default value
          $two = '0000000'; // Example default value
      }
      ?>

      <div class="two-digit d-flex gap-3">
        <input class="ein-number" value=" <?= $one1; ?>" />
        <input class="ein-number second-value" value="<?= $one2; ?>" />
      </div>
        
      <div class="two-digit-2 d-flex gap-1">
        <input class="ein-number-2" value="<?= $two3; ?>" />
        <input class="ein-number-2 print-check" style="margin-left: 13px" value="<?= $two4; ?>" />
        <input class="ein-number-2 print-check-2" style="margin-left: 15px" value="<?= $two5; ?>" />
        <input class="ein-number-2 print-check-3" style="margin-left: 13px" value="<?= $two6; ?>" />
        <input class="ein-number-2 print-check-4" style="margin-left: 13px" value="<?= $two7; ?>" />
        <input class="ein-number-2 print-check-5" style="margin-left: 13px" value="<?= $two8; ?>" />
        <input class="ein-number-2 print-check-6" style="margin-left: 13px" value="<?= $two9; ?>" />
      </div>

      <?php
        if (isset($get_cominfo) && !empty($get_cominfo)) {
          $company_name = $get_cominfo[0]['company_name'];
          $mobile  = $get_cominfo[0]['mobile'];
        } else {
          $company_name = '';
          $mobile  = '';
        }
      ?>

      <div class="name-text"> <input type="text" value="<?= $company_name; ?>" /> </div>
      <div class="trade-text"> <input type="text" value="<?= $company_name; ?>" /> </div>

      <?php
        $address = isset($get_cominfo[0]['address']) ? $get_cominfo[0]['address'] : '';
        $get_address = explode(',' , $address);
      ?>
  
      <div class="qq1">
        <?php $isQ1 = ($selectedValue == 'Q1'); ?>
        <input type="checkbox" name="quarter[]" <?= $isQ1 ? 'checked' : ''; ?>>
      </div>
      <div class="qq2">
        <?php $isQ2 = ($selectedValue == 'Q2'); ?>
        <input type="checkbox" name="quarter[]" <?= $isQ2 ? 'checked' : ''; ?>>
      </div>
      <div class="qq3">
        <?php $isQ3 = ($selectedValue == 'Q3'); ?>
        <input type="checkbox" name="quarter[]" <?= $isQ3 ? 'checked' : ''; ?>>
      </div>
      <div class="qq4">
        <?php $isQ4 = ($selectedValue == 'Q4'); ?>
        <input type="checkbox" name="quarter[]" <?= $isQ4 ? 'checked' : ''; ?>>
      </div>

      <div class="Address-text"> <input type="text" value="<?= $get_address[0]; ?>" /> </div>
      <div class="city-text"> <input type="text" value="<?= $get_address[1]; ?>" /> </div>
      <div class="state-text"> <input type="text" value="<?= $get_address[2]; ?>" /> </div>
      <div class="zipcode-text"> <input type="text" value=" <?= $get_address[3]; ?>" /> </div>
      <div class="country"> <input type="text" value="" /> </div>
      <div class="foreign"> <input type="text" value="" /> </div>
      <div class="postal-code"> <input type="text" value="" /> </div>
      
      <div class="row1"> <input type="text" value="<?= $gt[0]['count_rows']; ?>"  style="margin-left: 9px;"/> </div>

      <?php
        $total_amount_sum = '0';
        // Check if get_941_sc_info is set and not empty, and add its value to $total_amount_sum
        if (isset($get_941_sc_info[0]['salebalanceamount'])) {
          $total_amount_sum += $get_941_sc_info[0]['salebalanceamount'];
        }
        // Check if $tif is set, then iterate over it and add each total_amount to $total_amount_sum
        if (isset($tif)) {
            foreach ($tif as $row) {
              $total_amount_sum += ($row['sum_total_amount']);
            }
          $total_amount_sum = $total_amount_sum - $get_941_sc_info[0]['salebalanceamount'];
        }

        $amount_partss = explode('.', $total_amount_sum);
        // Extract the integer and decimal parts
        $integer_parts = isset($amount_partss[0]) ? $amount_partss[0] : '0';
        $decimal_parts = isset($amount_partss[1]) ? substr($amount_partss[1], 0, 2) : '00';
      ?>

      <div class="row2">
        <input type="text" value="$<?= $integer_parts; ?>"  style="text-align:right;" />
        <input type="text" value="<?= $decimal_parts; ?>" />
      </div>

      <?php
        $federal_sum = '0';
        if (isset($tif)) {
          foreach ($tif as $row) {
            $federal_sum += $row['sum_f_tax']; // Add each total_amount to the sum
          }
        }
        $amount_partsf = explode('.', $federal_sum);

        // Extract the integer and decimal parts
        $integer_part_f = isset($amount_partsf[0]) ? $amount_partsf[0] : '0';
        $decimal_part_f = isset($amount_partsf[1]) ? substr($amount_partsf[1], 0, 2) : '00';
      ?>

      <div class="row3">
        <input type="text" value="$<?= $integer_part_f; ?>" style="margin-left: -41px;text-align:right;" />
        <input type="text" value="<?= $decimal_part_f; ?>"  style="margin-left: 2px;" />
      </div>
      <div class="row4"> <input type="checkbox" /> </div>

      <?php
        $amount_parts_s = explode('.', $total_amount_sum);
        // Extract the integer and decimal parts
        $integer_part_s = isset($amount_parts_s[0]) ? $amount_parts_s[0] : '0';
        $decimal_part_s = isset($amount_parts_s[1]) ? substr($amount_parts_s[1],0 ,2) : '00';
      ?>

      <div class="row5a">
        <input type="text" value="$<?= $integer_part_s; ?>"  style="margin-left: -34px;text-align:right;"  />
        <input type="text" value="<?= $decimal_part_s; ?>"  style="margin-left: 4px;" />
      </div>

          
      <?php
        $value =$total_amount_sum * 0.124;
        $s = explode('.', $value);
        // Extract the integer and decimal parts
        $integer = isset($s[0]) ? $s[0] : '0';
        $decimal = isset($s[1]) ? substr($s[1],0,2) : '00';
      ?>    

      <div class="row5a2">
        <input type="text" value="$<?= $integer; ?>" style="margin-left: -43px;text-align:right;" />
        <input type="text" value="<?= $decimal ; ?>" style="margin-left: 3px;" />
      </div>
  
      <div class="row5b"> <input type="text" value="" /> </div>
      <div class="row5b2"> <input type="text" value="" /> </div>

      <?php
        $amount_partss = explode('.', $total_amount_sum);
        // Extract the integer and decimal parts
        $integer_parts = isset($amount_partss[0]) ? $amount_partss[0] : '0';
        $decimal_parts = isset($amount_partss[1]) ? substr($amount_partss[1], 0, 2) : '00';
      ?>
    
      <div class="row5c">
        <input type="text" value="$<?= $integer_parts; ?>" style="margin-left: -34px;text-align:right;"  />
        <input type="text" value="<?= $decimal_parts; ?>"  style="margin-left: 4px;" />
      </div>

      <?php
        $medicare = '0';
        if (isset($tif)) {
          foreach ($tif as $row) {
            $medicare += $row['sum_m_tax']; // Add each total_amount to the sum
          }
        }
        $amount_parts_m = explode('.', $total_amount_sum);
        // Extract the integer and decimal parts
        $integer_part_m = isset($amount_parts_m[0]) ? $amount_parts_m[0] : '0';
        $decimal_part_m = isset($amount_parts_m[1]) ? substr($amount_parts_m[1],0,2) : '00';
        $medicare_cal=$total_amount_sum *0.029;
        if (strpos($medicare_cal, '.') !== false) {
            // Split the $medicare_cal by dot
            $amount_parts_mcal = explode('.', $medicare_cal);

            // Extract the integer and decimal parts
            $integer_part_mcal = isset($amount_parts_mcal[0]) ? $amount_parts_mcal[0] : '0';
            $decimal_part_mcal = isset($amount_parts_mcal[1]) ? substr($amount_parts_mcal[1],0,2) : '00';
        } else {
            // If $medicare_cal does not contain a dot, set default values
            $integer_part_mcal = $medicare_cal;
            $decimal_part_mcal = '00';
        }
      ?>
 
      <div class="row5c2">
        <input type="text" value="$<?= $integer_part_mcal  ; ?>"  style="margin-left: -53px;text-align:right;"  />
        <input type="text" value="<?= $decimal_part_mcal  ; ?>" style="margin-left: 4px;" />
      </div>

      <div class="row5d"> <input type="text" value="" /> </div>
      <div class="row5d2"> <input type="text" value="" /> </div>

      <?php
        $ssw = $total_amount_sum * 0.124; 
        $mw = $total_amount_sum * 0.029; 
        $gt = $ssw + $mw; // Corrected the missing $ sign

        $ovt = explode('.', $gt);
        // Extract the integer and decimal parts
        $integer_parts = isset($ovt[0]) ? $ovt[0] : '0';
        $decimal_parts = isset($ovt[1]) ? substr($ovt[1],0,2) : '00';

        // Use $gt for further operations or output
      ?>
    
      <div class="row5e">
        <input type="text" value="$<?= $integer_parts  ; ?>" style=" margin-left: -44px;text-align:right;"  />
        <input type="text" value="<?= $decimal_parts  ; ?>" style="margin-left: 5px;" />
      </div>

      <div class="row5f"> <input type="text" value="" /> </div>

      <?php
        $federal_sum = '0';
        if (isset($tif)) {
          foreach ($tif as $row) {
            $federal_sum += $row['sum_f_tax']; // Add each total_amount to the sum
          }
        }

        $ssw = $total_amount_sum * 0.124; 
        $mw = $total_amount_sum * 0.029; 
        $gt = $ssw + $mw; // Additional calculations based on total amount sum

        $fot = $federal_sum + $gt; // Corrected by adding a semicolon at the end
        $fvt = explode('.', $fot);
        // Extract the integer and decimal parts
        $integer_parts = isset($fvt[0]) ? $fvt[0] : '0';
        $decimal_parts = isset($fvt[1]) ? substr( $fvt[1],0 ,2) : '00';
        $final_doller=$integer_parts;
        $final_cent= $decimal_parts;
      ?>
 
      <div class="row6">
        <input type="text" value="$<?= $integer_parts; ?>"  style=" margin-left: -147px;text-align:right;" />
        <input type="text" value="<?=  $decimal_parts; ?>"   style="margin-left: 5px;" />
      </div>

      <div class="row7"> <input type="text" value=" " /> </div>
      <div class="row8"> <input type="text" value=" " /> </div>
      <div class="row9"> <input type="text" value=" " /> </div>

      <div class="row10">
        <input type="text" value="$<?= $integer_parts; ?>" style="margin-left: -65px;width: 100px;text-align:right;" />
        <input type="text" value="<?= $decimal_parts; ?>"  style="margin-left: 5px;" />
      </div>

      <div class="row11"> <input type="text" value=" " /> </div>
      <div class="row12"> 
        <input type="text" value="$<?= $integer_parts; ?>" style="margin-top:5px;margin-left: -65px;width: 100px;text-align:right;" />
        <input type="text" value="<?= $decimal_parts; ?>"  style="margin-left: 5px;" />
      </div>
      <div class="row13"> <input type="text" value=" " /> </div>
      <div class="row14"> <input type="text" value=" " /> </div>
      <div class="row15"> <input type="text" value=" " /> </div>
      <div class="row15a"> <input type="checkbox" value="" /> </div>
      <div class="row15b"> <input type="checkbox" value="" /> </div>
    </div>
  </div>

  <!-- second-page   -->
  <div class="container-fluid"  id="two" >
    <div class="row">
      <!-- <img src="img/941-2.jpg" alt="" /> -->
      <img src="<?= base_url()  ?>asset/images/941_2.jpg"  style="width: 99%" />
      <div class="f41-name"> <input type="text" value="<?= $company_name; ?>" /> </div>
      <div class="f41-ein"> <input type="text" value="<?= $Federal_Pin_Number; ?>" /> </div>
      <div class="row16a"> <input type="checkbox" /> </div>
      <div class="row16b"> <input type="checkbox" /> </div>
      <div class="row16c"> <input type="checkbox" /> </div>
      <div class="tax-month1"> <input type="text" value=" " /> </div>
      <div class="tax-month2"> <input type="text" value=" " /> </div>
      <div class="tax-month3"> <input type="text" value=" " /> </div>
      <div class="total-quater"> <input type="text" value="" /> </div>
      <div class="row17"> <input type="checkbox" /> </div>
      <div class="row17a"> <input type="input" value=" " /> </div>
      <div class="row18"> <input type="checkbox" /> </div>
      <div class="row18a"> <input type="checkbox" /> </div>
      <div class="row18b"> <input type="text" value=" " /> </div>
      <div class="row18c"> <input type="text" value=" " /> </div>
      <div class="row18d"> <input type="checkbox" /> </div>
      <div class="row19"> <input type="text" value="" /> </div>
      <div class="row19-date"> <input type="text" value="<?= date('m/d/Y'); ?>" /> </div>
      <div class="row19-name"> <input type="text" value="<?= $company_name; ?>" /> </div>
      <div class="row19-title"> <input type="text" value="Admin" /> </div>
      <div class="row19-day"> <input type="text" value="<?= $mobile; ?>" /> </div>
      <div class="pre-name"> <input type="text" value=" " /> </div>
      <div class="pre-sign"> <input type="text" value=" " /> </div>
      <div class="first-name"> <input type="text" value=" " /> </div>
      <div class="address"> <input type="text" value=" " /> </div>
      <div class="pre-city"> <input type="text" value=" " name="" id="" /> </div>
      <div class="pre-state"> <input type="text" value=" " /> </div>
      <div class="pre-zipcode"> <input type="text" value=" " /> </div>
      <div class="pre-pin"> <input type="text" value=" " /> </div>
      <div class="pre-date"> <input type="text" value=" " /> </div>
      <div class="pre-ein"> <input type="text" value="<?= $Federal_Pin_Number; ?>" /> </div>
      <div class="pre-phone"> <input type="text" value=" " /> </div>
    </div>
  </div>
  
  <div class="container-fluid" id="three" >
    <div class="row">
      <!-- <img src="img/942-3.jpg" alt="" class="f941-img3"> -->
      <img src="<?= base_url()  ?>asset/images/941_3.jpg"  style="width: 99%"    />
        <div class="row1-ein">
            <?php  
              // Extract the first two characters
              $first_two_chars = substr($Federal_Pin_Number, 0, 2);

              // Extract the remaining characters
              $remaining_chars = substr($Federal_Pin_Number, 2);
              $remaining_chars = str_replace('-', '', $remaining_chars);
            ?>
            <input type="text" style='font-size:12px;width:25px;' value="<?php  echo $first_two_chars ; ?> " />
            <input type="text" style='font-size:12px;' value="<?php  echo $remaining_chars ; ?> " />
        </div>

          <div class="dollar"> <input type="text" style='font-size:15px;' value="<?= "$".$final_doller; ?>"   /> </div>
          <div class="cent"> <input type="text" style=' font-size:15px;' value="<?= $final_cent; ?>" /> </div>
          <div class="busniess-name"> <input type="text" value=" " /> </div>
          <div class="b-address"> <input type="text" value="" /> </div>
          <div class="city-state-code"> <input type="text" value=" " /> </div>

          <div class="q1">
            <?php $isQ1 = ($selectedValue == 'Q1'); ?>
            <input type="radio" name="quarter" <?= $isQ1 ? 'checked' : ''; ?> id="q1">
          </div>

          <div class="q2">
            <?php $isQ2 = ($selectedValue == 'Q2'); ?>
            <input type="radio" name="quarter" <?= $isQ2 ? 'checked' : ''; ?> id="q2">
          </div>

          <div class="q3">
            <?php $isQ3 = ($selectedValue == 'Q3'); ?>
            <input type="radio" name="quarter" <?= $isQ3 ? 'checked' : ''; ?> id="q3">
          </div>

          <div class="q4">
            <?php $isQ4 = ($selectedValue == 'Q4'); ?>
            <input type="radio" name="quarter" <?= $isQ4 ? 'checked' : ''; ?> id="q4">
          </div>
      </div>
    </div>
  </body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  
<script>
    async function downloadPagesAsPDF() {
      const elements = [
        document.getElementById('one'),
        document.getElementById('two'),
        document.getElementById('three'),
      ];
      
      // Check if all elements are found
      if (elements.some(element => element === null)) {
        alert('One or more elements not found');
        return;
      }
      const canvases = await Promise.all(elements.map(element =>
        html2canvas(element, { scale: 2 })
      ));

      const pdf = new jspdf.jsPDF({
        orientation: 'p',
        unit: 'px',
        format: [canvases[0].width, canvases[0].height]
      });

      canvases.forEach((canvas, index) => {
        const imgData = canvas.toDataURL('image/jpeg', 1.0);
        if (index > 0) {
          pdf.addPage([canvas.width, canvas.height], 'p');
        }
        pdf.addImage(imgData, 'JPEG', 0, 0, canvas.width, canvas.height);
      });

      pdf.save('F941.pdf');
    }
</script>


 