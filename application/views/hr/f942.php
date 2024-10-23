<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('my-assets/css/f942.css'); ?>">
    <title>Document</title>
</head>

<body>
    <!-- <button class="btnclr btn btn-default dropdown-toggle  boxes filip-horizontal mobile_para" onclick="downloadPagesAsPDF()" style="margin-left:265px;background: white;border: 2px solid black;" ><span class="fa fa-download"></span>Download </button> -->
    <button class="btnclr btn btn-default dropdown-toggle  boxes filip-horizontal mobile_para"  onclick="downloadPagesAsPDF()"   style="margin-left:265px;background: white;border: 2px solid black;"  ><span  class="fa fa-download"></span>Download </button>

    <body bgcolor="#A0A0A0" vlink="blue" link="blue">
        <div id="download">
            <div class="page-1" id="one">
                <img src="<?= base_url()  ?>asset/images/f942_1.jpg" width="100%" />
        
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

 
        <div class="Address-text"> <input type="text" value="<?= $get_address[0]; ?>" /> </div>
        <div class="city-text"> <input type="text" value="<?= $get_address[1]; ?>" /> </div>
        <div class="state-text"> <input type="text" value="<?= $get_address[2]; ?>" /> </div>
        <div class="zipcode-text"> <input type="text" value=" <?= $get_address[3]; ?>" /> </div>
        <div class="country"> <input type="text" value="" /> </div>
        <div class="foreign"> <input type="text" value="" /> </div>
        <div class="postal-code"> <input type="text" value="" /> </div>

        <?php
            $t_tax = 0;
            $t_tax = $get_payslip_info[0]['overalltotal_amount'];
            // Format the number with two decimal places
            $formatted_tax = number_format($t_tax, 2);
            $parts = explode('.', $formatted_tax);
            $inter = $parts[0]; // The integer (dollar) part
            $decimal = isset($parts[1]) ? $parts[1] : '00'; // The decimal (cent) part, defaulting to '00' if not present
        ?>

        <div class="row1">
            <input type="text" value="$<?= $inter; ?>"  style="margin-left: -35px;width: 80px;text-align: right;"  /> 
            <input type="text" value="<?= $decimal; ?>" />
        </div>

        <?php
            $ftotal_amount = isset($get_payslip_info[0]['ftotal_amount']) ? round($get_payslip_info[0]['ftotal_amount'], 2) : '0';
            $parts = explode('.', $ftotal_amount);
            $inter1 = $parts[0]; // The integer (dollar) part
            $decimal1 = isset($parts[1]) ? $parts[1] : '00'; // The decimal (cent) part, defaulting to '00' if not present
        ?>

        <div class="row2">
            <input type="text" value="$<?= $inter1; ?>"  style="margin-left: -55px;text-align: right;width: 80px;"  />
            <input type="text" value="<?= $decimal1; ?>" />
        </div>
        <div class="row3"> <input type="checkbox"> </div>

        <?php
            $overalltotal_amount = isset($get_payslip_info[0]['overalltotal_amount']) ? $get_payslip_info[0]['overalltotal_amount'] : '0';
            $formatted_overalltax = number_format($overalltotal_amount, 2);
            $parts = explode('.', $formatted_overalltax);
            $inter2 = $parts[0]; // The integer (dollar) part
            $decimal2 = isset($parts[1]) ? $parts[1] : '00'; // The decimal (cent) part, defaulting to '00' if not present
        ?>

        <div class="row4">
            <input type="text" value="$<?= $inter2; ?>"  style="margin-left: -49px;text-align: right;"  />
            <input type="text" value="<?= $decimal2; ?>" />
        </div>
        <div class="row4a1"> <input type="text" value="" /> </div>
        <div class="row4a2"> <input type="text" value="" /> </div>
        <div class="row4b"> <input type="text" value="" /> </div>

        <?php
            $total_medi_tax = $overalltotal_amount * 0.029 ;
            $formatted_total_medi_tax = number_format($total_medi_tax, 2);
            $totalsocialsecurity_Medicaretax = $total_medi_tax + $social_security;
            $formatted_result = number_format($totalsocialsecurity_Medicaretax, 2);
            // $formatted_result = round($totalsocialsecurity_Medicaretax, 2);
            $totaltaxesbeforeadjustments = $ftotal_amount + $totalsocialsecurity_Medicaretax;
            $formatted_resultbfa = number_format($totaltaxesbeforeadjustments, 2);
            $currentyear_adjustments = 0;
            $totaltax_afteradjustments = $totaltaxesbeforeadjustments + $currentyear_adjustments;
            $formattedtotaltax_afteradjustments = number_format($totaltax_afteradjustments, 2);
            $parts = explode('.', $formatted_overalltax);
            $inter6 = $parts[0]; // The integer (dollar) part
            $decimal6 = isset($parts[1]) ? $parts[1] : '00'; // The decimal (cent) part, defaulting to '00' if not present
        ?>

        <div class="row4c">
            <input type="text" value="$<?= $inter6; ?>"  style="margin-left: -47px; text-align: right;"  />
            <input type="text" value="<?= $decimal6 ; ?>" />
        </div>

        <div class="row4d"> <input type="text" value="" /> </div>

        <?php
            $social_security = $overalltotal_amount * 0.124;
            $formatted_social_security = number_format($social_security, 2);
            $parts = explode('.', $formatted_social_security);
            $inter7 = $parts[0]; // The integer (dollar) part
            $decimal7 = isset($parts[1]) ? $parts[1] : '00'; // The decimal (cent) part, defaulting to '00' if not present
        ?>

        <div class="row4c2a">
            <input type="text" value="$<?= $inter7; ?>" style="margin-left: -52px;text-align: right;" />
            <input type="text" value="<?= $decimal7; ?>" />
        </div>
        <div class="row4c2b"> <input type="text" value="" /> </div> 
        <div class="row4c2c"> <input type="text" value="" /> </div>
        <div class="row4c2d"> <input type="text" value="" /> </div>

        <?php
            $mw = $overalltotal_amount * 0.029;
            $formatted_mm = number_format($mw, 2);
            $parts = explode('.', $formatted_mm);
            $inter8 = $parts[0]; // The integer (dollar) part
            $decimal8 = isset($parts[1]) ? $parts[1] : '00'; // The decimal (cent) part, defaulting to '00' if not present
        ?>

        <div class="row4c2e">
            <input type="text" value="$<?= $inter8 ; ?>" style="margin-left:-69px;text-align:right;"  />
            <input type="text" value="<?= $decimal8; ?>"  style="margin-left:5px;"  />
        </div>

        <div class="row4c2f"> <input type="text" value="" /> </div>

        <?php
            $ss_tot = round(($social_security + $mw + $ftotal_amount), 2);
            $parts = explode('.', $ss_tot);
            $inter10 = $parts[0]; // The integer (dollar) part
            $decimal10 = isset($parts[1]) ?  sprintf('%02d', $parts[1]) : '00'; // The decimal (cent) part, defaulting to '00' if not present
        ?>
 
        <div class="row5">
            <input type="text" value="$<?= $inter10 ; ?>"  style="margin-left:-50px;text-align:right;" />
            <input type="text" value="<?= $decimal10; ?>" />
        </div>
        
        <?php
            $ss = round(($social_security + $mw), 2);
            $parts = explode('.', $ss);
            $inter9 = $parts[0]; // The integer (dollar) part
            $decimal9 = isset($parts[1]) ? sprintf('%02d', $parts[1]) : '00'; // Format the decimal part with two digits, defaulting to '00' if not present
        ?>
        <div class="row5a">
            <input type="text" value="$<?= $inter9; ?>" style="margin-left:-70px;text-align:right;width: 90px;" />
            <input type="text" value="<?= $decimal9; ?>"  />
        </div>

        <div class="row6"> <input type="text" value="" /> </div>
        
        <div class="row7">
            <input type="text" value="<?= $inter10; ?>"  style="width: 80px;margin-left: -63px;text-align: right;" />
            <input type="text" value="<?= $decimal10; ?>"  style="width: 20px;margin-left: 4px;" />
        </div>
        <div class="row8a"> <input type="text" value="" /> </div>
        <div class="row8b"> <input type="text" value="" /> </div>
        <div class="row8c"> <input type="text" value="" /> </div>
        <div class="row8d"> <input type="text" value="" /> </div>
    </div>

        <div class="page-2" id="two">
            <img src="<?= base_url()  ?>asset/images/f942_2.jpg" width="100%" />
            <div class="row8e"> <input type="text" value="<?= $company_name; ?>" /> </div>
            <div class="row8f"> <input type="text"   value="<?= $Federal_Pin_Number; ?>" /> </div>
            <div class="row8g"> <input type="text" value="" /> </div>
            <div class="row9"> <input type="text" value="" /> </div>
            <div class="row10a"> <input type="text" value="" /> </div>
            <div class="row10b"> <input type="text" value="" /> </div>
            <div class="row10c"> <input type="text" value="" /> </div>
            <div class="row10d"> <input type="text" value="" /> </div>
            <div class="row10e"> <input type="text" value="" /> </div>
            <div class="row10f"> <input type="text" value="" /> </div>
            <div class="row10g"> <input type="text" value="" /> </div>
            <div class="row10h"> <input type="text" value="" /> </div>
            <div class="row10i"> <input type="text" value="" /> </div>
            <div class="row10j"> <input type="text" value="" /> </div>
            <div class="row11"> <input type="text" value="" /> </div>
            <div class="row12"> <input type="text" value="" /> </div>
            <div class="row12a"> <input type="checkbox" /> </div>
            <div class="row12b"> <input type="checkbox" /> </div>
            <div class="row13aa"> <input type="checkbox" /> </div>
            <div class="row13bb"> <input type="checkbox" /> </div>
            <div class="row13a"> <input type="text" value=""> </div>
            <div class="row13b"> <input type="text" value=""> </div>
            <div class="row13c"> <input type="text" value=""> </div>
            <div class="row13d"> <input type="text" value=""> </div>
            <div class="row13e"> <input type="text" value=""> </div>
            <div class="row13f"> <input type="text" value=""> </div>
            <div class="row13g"> <input type="text" value=""> </div>
            <div class="row13h"> <input type="text" value=""> </div>
            <div class="row13i"> <input type="text" value=""> </div>
            <div class="row13j"> <input type="text" value=""> </div>
            <div class="row13k"> <input type="text" value=""> </div>
            <div class="row13l"> <input type="text" value=""> </div>
            <div class="row13m"> <input type="text" value=""> </div>
        </div>


        <div class="page-3" id="three">
            <img src="<?= base_url()  ?>asset/images/f942_3.jpg" width="100%" />
            <div class="trade-name"> <input type="text" value="<?= $company_name; ?>"> </div>
            <div class="ein-p3"> <input type="text" value="<?= $Federal_Pin_Number; ?>"> </div>
            <div class="row14"> <input type="checkbox"> </div>
            <div class="row14a"> <input type="text" value="<?= date('m/d/Y'); ?>"> </div>
            <div class="row15"> <input type="text" value=""> </div>
            <div class="row16"> <input type="text" value=""> </div>
            <div class="row17"> <input type="text" value=""> </div>
            <div class="row18"> <input type="text" value=""> </div>
            <div class="row19"> <input type="text" value=""> </div>
            <div class="row20"> <input type="text" value=""> </div>
            <div class="row21"> <input type="text" value=""> </div>
            <div class="row22"> <input type="text" value=""> </div>
            <div class="row23"> <input type="text" value=""> </div>
            <div class="row24"> <input type="text" value=""> </div>
            <div class="row25"> <input type="text" value=""> </div>
            <div class="row26"> <input type="text" value=""> </div>
            <div class="row27a"> <input type="checkbox" /> </div>
            <div class="row27b"> <input type="text" value="" /> </div>
            <div class="row27c"> <input type="text" value="" /> </div>
            <div class="row28"> <input type="checkbox" /> </div>
            <div class="row28b">
                <input type="text" value="" />
                <input type="text" value="" style="margin-left: 3px;" />
                <input type="text" value="" style="margin-left: 6px;" />
                <input type="text" value="" style="margin-left: 7px;" />
                <input type="text" value="" style="margin-left: 7px;" />
            </div>
            <div class="row29a"> <input type="text" value=" " /> </div>
            <div class="row29b"> <input type="text" value="<?= date('m/d/Y'); ?>" /> </div>
            <div class="row29c"> <input type="text" value="<?= $company_name; ?>" /> </div>
            <div class="row29d"> <input type="text" value="Admin" /> </div>
            <div class="row29e"> <input type="text" value="<?= $mobile; ?>" /> </div>
            <div class="row30"> <input type="checkbox" /> </div>
            <div class="pre-name"> <input type="text" value="" /> </div>
            <div class="pre-sign"> <input type="text" value="" /> </div>
            <div class="first-name"> <input type="text" value="" /> </div>
            <div class="address"> <input type="text" value="" /> </div>
            <div class="pre-city"> <input type="text" value="" name="" id="" /> </div>
            <div class="pre-state"> <input type="text" value="" /> </div>
            <div class="pre-zipcode"> <input type="text" value="" /> </div>
            <div class="pre-pin"> <input type="text" value="" /> </div>
            <div class="pre-date"> <input type="text" value="" /> </div>
            <div class="pre-ein"> <input type="text" value="<?= $Federal_Pin_Number; ?>" /> </div>
            <div class="pre-phone"> <input type="text" value="" /> </div>
        </div>
        <div class="page-4" id="four">
            <img src="<?= base_url()  ?>asset/images/f942_4.jpg" width="100%" />
        </div>
        <div class="page-5" id="five">
            <img src="<?= base_url()  ?>asset/images/f942_5.jpg" width="100%" />
            <div class="row1-ein"> <input type="text" value="<?= $Federal_Pin_Number; ?>" /> </div>
            <div class="dollar"> <input type="text" value="<?= $inter10; ?>" /> </div>
            <div class="cent"> <input type="text" value="<?= $decimal10; ?>" /> </div>
            <div class="busniess-name"> <input type="text" value="" /> </div>
            <div class="b-address"> <input type="text" value="" /> </div>
            <div class="city-state-code"> <input type="text" value="" /> </div>
        </div>
        <div class="page-6" id="six">
            <img src="<?= base_url()  ?>asset/images/f942_6.jpg" width="100%" />
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<!-- <script>
    async function downloadPagesAsPDF() {
        const element1 = document.getElementById('one');
        const element2 = document.getElementById('two');
        const element3 = document.getElementById('three');
        const element4 = document.getElementById('four');
        const element5 = document.getElementById('five');
        const element6 = document.getElementById('six');
        if (!element1 || !element2 || !element3 ||!element4 ||!element5 || !element6) {
            alert('One or more elements not found');
            return;
        }
        const canvas1 = await html2canvas(element1, {
            scale: 2
        });
        const canvas2 = await html2canvas(element2, {
            scale: 2
        });
        const canvas3 = await html2canvas(element3, {
            scale: 2
        });
        const canvas4 = await html2canvas(element4, {
            scale: 2
        });
        const canvas5 = await html2canvas(element5, {
            scale: 2
        });
        const canvas6 = await html2canvas(element6, {
            scale: 2
        });
        const imgData1 = canvas1.toDataURL('image/jpeg', 1.0);
        const imgData2 = canvas2.toDataURL('image/jpeg', 1.0);
        const imgData3 = canvas3.toDataURL('image/jpeg', 1.0);
        const imgData4 = canvas4.toDataURL('image/jpeg', 1.0);
        const imgData5 = canvas5.toDataURL('image/jpeg', 1.0);
        const imgData6 = canvas6.toDataURL('image/jpeg', 1.0);
        const pdf = new jspdf.jsPDF({
            orientation: 'p',
            unit: 'px',
            format: [canvas1.width, canvas1.height]
        });
        pdf.addImage(imgData1, 'JPEG', 0, 0, canvas1.width, canvas1.height);
        pdf.addPage([canvas2.width, canvas2.height], 'p');
        pdf.addImage(imgData2, 'JPEG', 0, 0, canvas2.width, canvas2.height);
        pdf.addPage([canvas3.width, canvas3.height], 'p'); // Added page for canvas3
        pdf.addImage(imgData3, 'JPEG', 0, 0, canvas3.width, canvas3.height);
        pdf.save('F941.pdf');
    }
</script> -->
<script>
async function downloadPagesAsPDF() {
    const elements = [
        document.getElementById('one'),
        document.getElementById('two'),
        document.getElementById('three'),
        document.getElementById('four'),
        document.getElementById('five'),
        document.getElementById('six')
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

    pdf.save('F944.pdf');
}
</script>



</html>