<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Debug</title>

    <!--- Site CSS -->
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/reset.css">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/site.css">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/grid.css">

    <!--- Component CSS -->
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/icon.css">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/input.css">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/button.css">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/divider.css">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/label.css">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/transition.css">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/popup.css">

    <!--- Component JS -->
    <script src="jquery.min.js"></script>
    <script src="iframe-content.js"></script>
    <script type="text/javascript" src="Semantic-UI-CSS-master/components/popup.js"></script>
    <script type="text/javascript" src="Semantic-UI-CSS-master/components/dropdown.js"></script>
    <script type="text/javascript" src="Semantic-UI-CSS-master/components/transition.js"></script>

    <!--- Show Names -->
    <script src="show-examples.js"></script>

    <!--- Example CSS -->
    <style>
        body {
            padding: 1em;
        }

        div {
            /*border: 1px solid #000;*/
        }
        .ui.input + .ui.input {
            margin-left: 1em;
        }
    </style>

    <!--- Example Javascript -->
    <script>
        $(document)
            .ready(function() {
                $('.ui.dropdown')
                    .dropdown({
                        on: 'click'
                    })
                ;
            })
        ;
    </script>
</head>

<body>

<h1>    Corpus Christi Water Calculator</h1>
<div class="ui one column stackable grid">
    <div class="column">

<div id="calulator_container">

    <div id="calc_inputs">



        <div class="calc_input_section">

            <!--Left Side-->
            <div class="event-date">

                <div class="icons">
                    <span class="water-sprite water-calculator-icons faucet" deluminate_imagetype="png"></span>
                </div>


            </div>
            <!--Right Side-->
            <div class="event-desc">
                <a class="iwanttomodal" href="#gallons">
                    <label>Gallons <span style="font-size:11px">(in hundreds)</span></label>
                    <span class="water-sprite water-calculator-icon-info info" deluminate_imagetype="png"></span>
                </a>
                <input  type="number" placeholder="0" max="9999999" min="0" class="calc_input" name="gallon_input" id="gallon_input" onkeyup="myFunction()" onkeypress="return isNumber(event)" style="display: inline-block;">
            </div>

        </div>

        <div class="calc_input_section">
            <!--Left Side-->
            <div class="event-date">
                <div class="icons">
                    <span class="water-sprite water-calculator-icons meter" deluminate_imagetype="png"></span>
                </div>
            </div>
            <!--Right Side-->

            <div class="event-desc">
                <a class="iwanttomodal" href="#metersize">
                    <label>Meter Size</label>
                    <span class="water-sprite water-calculator-icon-info info" deluminate_imagetype="png"></span>
                </a>
                <select id="metersize_dropdown" class="calc_input" onchange="myFunction();">
                    <option value="Select Meter Size">Select Meter Size</option>
                    <option value="5/8 & 3/4">5/8 & 3/4</option>
                    <option value="1">1</option>

                </select>
            </div>

        </div>







        <!--Fancybox for showing how to find the water usage-->
        <div id="gallons" style="display:none; bacgkground-color:grey;">
            <h3>Gallons</h3>
            <p>Enter your water usage in 100 gallons which can be found on your utility invoice.</p>
            <p align="center"><img src="../SiteAssets/img/DWU-Invoice-Gallons.jpg" alt="Help me find my water usage"></p>

        </div>

        <!--Fancybox for showing help me find my meter size-->
        <div id="metersize" style="display:none; bacgkground-color:grey;">
            <h3>Meter Size</h3>
            <p>Select your meter size which can be found on your utility invoice. Your Base Charge is determined by the meter size.</p>
            <p align="center"><img src="../SiteAssets/img/DWU-Invoice.jpg" alt="Help me find my meter size"></p>
        </div>

        <!--Fancybox for showing information about the usage charge -->
        <div id="usagecharge" style="display:none; bacgkground-color:grey;">
            <h3>Usage Charge</h3>
            <p>This volume charge is based on usage and covers variable cost such as chemicals, electric power, facility maintenance, repair of mains and repayment of bonds sold to finance construction of the water system.</p>
        </div>


        <!--Fancybox for showing information about the base charge -->
        <div id="basecharge" style="display:none; bacgkground-color:grey;">
            <h3>Base Charge</h3>
            <p>Base water charges cover fixed cost such as reading and maintaining the meter, account maintenance, mailing bills and processing payments.</p>
        </div>

    </div>



    <div id="calc_results">
        <div id="estimated_total">$0.00</div>
        <div style="font-weight: bold;">MONTHLY CHARGES ESTIMATE</div>
        <br>
        <div id="">*Estimation Details Below</div>
    </div>






    </div>





</div>

<!-- ============================================================================================================================================================ -->
<div class="column">
    <h2>     WASTE WATER - RESIDENTIAL      </h2>

<div id="calulator_container">

    <div id="calc_inputs">



        <div class="calc_input_section">

            <!--Left Side-->
            <div class="event-date">

                <div class="icons">
                    <span class="water-sprite water-calculator-icons faucet" deluminate_imagetype="png"></span>
                </div>


            </div>
            <!--Right Side-->
            <div class="event-desc">
                <a class="iwanttomodal" href="#gallons">
                    <label>Gallons <span style="font-size:11px">(in hundreds)</span></label>
                    <span class="water-sprite water-calculator-icon-info info" deluminate_imagetype="png"></span>
                </a>
                <input  type="number" placeholder="0" max="9999999" min="0" class="calc_input" name="waste_water_gallon_input" id="waste_water_gallon_input" onkeyup="myFunction_waste_water_gallon_input()" onkeypress="return isNumber(event)" style="display: inline-block;">
            </div>

        </div>







        <!--Fancybox for showing how to find the water usage-->
        <div id="gallons" style="display:none; bacgkground-color:grey;">
            <h3>Gallons</h3>
            <p>Enter your water usage in 100 gallons which can be found on your utility invoice.</p>
            <p align="center"><img src="../SiteAssets/img/DWU-Invoice-Gallons.jpg" alt="Help me find my water usage"></p>

        </div>

        <!--Fancybox for showing help me find my meter size-->
        <div id="metersize" style="display:none; bacgkground-color:grey;">
            <h3>Meter Size</h3>
            <p>Select your meter size which can be found on your utility invoice. Your Base Charge is determined by the meter size.</p>
            <p align="center"><img src="../SiteAssets/img/DWU-Invoice.jpg" alt="Help me find my meter size"></p>
        </div>

        <!--Fancybox for showing information about the usage charge -->
        <div id="usagecharge" style="display:none; bacgkground-color:grey;">
            <h3>Usage Charge</h3>
            <p>This volume charge is based on usage and covers variable cost such as chemicals, electric power, facility maintenance, repair of mains and repayment of bonds sold to finance construction of the water system.</p>
        </div>


        <!--Fancybox for showing information about the base charge -->
        <div id="basecharge" style="display:none; bacgkground-color:grey;">
            <h3>Base Charge</h3>
            <p>Base water charges cover fixed cost such as reading and maintaining the meter, account maintenance, mailing bills and processing payments.</p>
        </div>

    </div>



    <div id="calc_results">
        <div id="estimated_total_waste_water">$0.00</div>
        <div style="font-weight: bold;">MONTHLY CHARGES ESTIMATE / WASTE WATER - RESIDENTIAL</div>
        <br>
        <div id="">*Estimation Details Below</div>
    </div>






    </div>
    </div>
    <!-- ============================================================================================================================================================ -->



</div>


















</body>
</html>














<script src="numeral.min.js"></script>
<script>

    var water_under_1=new Array(); //1) regular array. Pass an optional integer argument to control array's size.
         var water_1_meter=new Array(); //1) regular array. Pass an optional integer argument to control array's size.
         var waste_water=new Array(); //1) regular array. Pass an optional integer argument to control array's size.
          
          water_under_1[1]=14.68;      water_1_meter[1]=21.03;       waste_water[1]=32.60;
          water_under_1[2]=14.68;      water_1_meter[2]=21.03;       waste_water[2]=32.60;
          water_under_1[3]=22.03;      water_1_meter[3]=28.38;       waste_water[3]=35.85;
          water_under_1[4]=29.37;      water_1_meter[4]=35.72;       waste_water[4]=39.10;
          water_under_1[5]=36.71;      water_1_meter[5]=43.06;       waste_water[5]=42.35;
          water_under_1[6]=44.05;      water_1_meter[6]=50.40;       waste_water[6]=45.60;
          water_under_1[7]=52.34;      water_1_meter[7]=58.69;       waste_water[7]=50.45;
          water_under_1[8]=60.64;      water_1_meter[8]=66.99;       waste_water[8]=55.30;
          water_under_1[9]=68.93;      water_1_meter[9]=75.28;       waste_water[9]=60.15;
         water_under_1[10]=77.22;     water_1_meter[10]=83.57;      waste_water[10]=65.00;
         water_under_1[11]=85.51;     water_1_meter[11]=91.86;      waste_water[11]=69.85;
         water_under_1[12]=93.80;     water_1_meter[12]=100.15;     waste_water[12]=74.70;
         water_under_1[13]=102.10;    water_1_meter[13]=108.45;     waste_water[13]=79.55;
         water_under_1[14]=110.39;    water_1_meter[14]=116.74;     waste_water[14]=84.40;
         water_under_1[15]=118.68;    water_1_meter[15]=125.03;     waste_water[15]=89.25;
         water_under_1[16]=127.62;    water_1_meter[16]=133.97;     waste_water[16]=96.50;
         water_under_1[17]=136.56;    water_1_meter[17]=142.91;     waste_water[17]=103.75;
         water_under_1[18]=145.51;    water_1_meter[18]=151.86;     waste_water[18]=111.00;
         water_under_1[19]=154.45;    water_1_meter[19]=160.80;     waste_water[19]=118.25;
         water_under_1[20]=163.39;    water_1_meter[20]=169.74;     waste_water[20]=125.50;
         water_under_1[21]=172.33;    water_1_meter[21]=178.68;     waste_water[21]=132.75;
         water_under_1[22]=181.27;    water_1_meter[22]=187.62;     waste_water[22]=140.00;
         water_under_1[23]=190.22;    water_1_meter[23]=196.57;     waste_water[23]=147.25;
         water_under_1[24]=199.16;    water_1_meter[24]=205.51;     waste_water[24]=154.50;
         water_under_1[25]=208.10;    water_1_meter[25]=214.45;     waste_water[25]=161.75;
         water_under_1[26]=217.04;    water_1_meter[26]=223.39;     waste_water[26]=161.75;
         water_under_1[27]=225.98;    water_1_meter[27]=232.33;     waste_water[27]=161.75;
         water_under_1[28]=234.93;    water_1_meter[28]=241.28;     waste_water[28]=161.75;
         water_under_1[29]=243.87;    water_1_meter[29]=250.22;     waste_water[29]=161.75;
         water_under_1[30]=252.81;    water_1_meter[30]=259.16;     waste_water[30]=161.75;
         water_under_1[31]=261.75;    water_1_meter[31]=268.10;     waste_water[31]=161.75;
         water_under_1[32]=270.69;    water_1_meter[32]=277.04;     waste_water[32]=161.75;
         water_under_1[33]=279.64;    water_1_meter[33]=285.99;     waste_water[33]=161.75;
         water_under_1[34]=288.58;    water_1_meter[34]=294.93;     waste_water[34]=161.75;
         water_under_1[35]=297.52;    water_1_meter[35]=303.87;     waste_water[35]=161.75;
         water_under_1[36]=306.46;    water_1_meter[36]=312.81;     waste_water[36]=161.75;
         water_under_1[37]=315.40;    water_1_meter[37]=321.75;     waste_water[37]=161.75;
         water_under_1[38]=324.35;    water_1_meter[38]=330.70;     waste_water[38]=161.75;
         water_under_1[39]=333.29;    water_1_meter[39]=339.64;     waste_water[39]=161.75;
         water_under_1[40]=342.23;    water_1_meter[40]=348.58;     waste_water[40]=161.75;
         water_under_1[41]=351.17;    water_1_meter[41]=357.52;     waste_water[41]=161.75;
         water_under_1[42]=360.11;    water_1_meter[42]=366.46;     waste_water[42]=161.75;
         water_under_1[43]=369.06;    water_1_meter[43]=375.41;     waste_water[43]=161.75;
         water_under_1[44]=378.00;    water_1_meter[44]=384.35;     waste_water[44]=161.75;
         water_under_1[45]=386.94;    water_1_meter[45]=393.29;     waste_water[45]=161.75;
         water_under_1[46]=395.88;    water_1_meter[46]=402.23;     waste_water[46]=161.75;
         water_under_1[47]=404.82;    water_1_meter[47]=411.17;     waste_water[47]=161.75;
         water_under_1[48]=413.77;    water_1_meter[48]=420.12;     waste_water[48]=161.75;
         water_under_1[49]=422.71;    water_1_meter[49]=429.06;     waste_water[49]=161.75;
         water_under_1[50]=431.65;    water_1_meter[50]=438.00;     waste_water[50]=161.75;
         water_under_1[51]=440.59;    water_1_meter[51]=446.94;     waste_water[51]=161.75;
         water_under_1[52]=449.53;    water_1_meter[52]=455.88;     waste_water[52]=161.75;
         water_under_1[53]=458.48;    water_1_meter[53]=464.83;     waste_water[53]=161.75;
         water_under_1[54]=467.42;    water_1_meter[54]=473.77;     waste_water[54]=161.75;
         water_under_1[55]=476.36;    water_1_meter[55]=482.71;     waste_water[55]=161.75;
         water_under_1[56]=485.30;    water_1_meter[56]=491.65;     waste_water[56]=161.75;
         water_under_1[57]=494.24;    water_1_meter[57]=500.59;     waste_water[57]=161.75;
         water_under_1[58]=503.19;    water_1_meter[58]=509.54;     waste_water[58]=161.75;
         water_under_1[59]=512.13;    water_1_meter[59]=518.48;     waste_water[59]=161.75;
         water_under_1[60]=521.07;    water_1_meter[60]=527.42;     waste_water[60]=161.75;
         water_under_1[61]=530.01;    water_1_meter[61]=536.36;     waste_water[61]=161.75;
         water_under_1[62]=538.95;    water_1_meter[62]=545.30;     waste_water[62]=161.75;
         water_under_1[63]=547.90;    water_1_meter[63]=554.25;     waste_water[63]=161.75;
         water_under_1[64]=556.84;    water_1_meter[64]=563.19;     waste_water[64]=161.75;
         water_under_1[65]=565.78;    water_1_meter[65]=572.13;     waste_water[65]=161.75;
         water_under_1[66]=574.72;    water_1_meter[66]=581.07;     waste_water[66]=161.75;
         water_under_1[67]=583.66;    water_1_meter[67]=590.01;     waste_water[67]=161.75;
         water_under_1[68]=592.61;    water_1_meter[68]=598.96;     waste_water[68]=161.75;
         water_under_1[69]=601.55;    water_1_meter[69]=607.90;     waste_water[69]=161.75;
         water_under_1[70]=610.49;    water_1_meter[70]=616.84;     waste_water[70]=161.75;
         water_under_1[71]=619.43;    water_1_meter[71]=625.78;     waste_water[71]=161.75;
         water_under_1[72]=628.37;    water_1_meter[72]=634.72;     waste_water[72]=161.75;
         water_under_1[73]=637.32;    water_1_meter[73]=643.67;     waste_water[73]=161.75;
         water_under_1[74]=646.26;    water_1_meter[74]=652.61;     waste_water[74]=161.75;
         water_under_1[75]=655.20;    water_1_meter[75]=661.55;     waste_water[75]=161.75;
         water_under_1[76]=664.14;    water_1_meter[76]=670.49;     waste_water[76]=161.75;
         water_under_1[77]=673.08;    water_1_meter[77]=679.43;     waste_water[77]=161.75;
         water_under_1[78]=682.03;    water_1_meter[78]=688.38;     waste_water[78]=161.75;
         water_under_1[79]=690.97;    water_1_meter[79]=697.32;     waste_water[79]=161.75;
         water_under_1[80]=699.91;    water_1_meter[80]=706.26;     waste_water[80]=161.75;
         water_under_1[81]=708.85;    water_1_meter[81]=715.20;     waste_water[81]=161.75;
         water_under_1[82]=717.79;    water_1_meter[82]=724.14;     waste_water[82]=161.75;
         water_under_1[83]=726.74;    water_1_meter[83]=733.09;     waste_water[83]=161.75;
         water_under_1[84]=735.68;    water_1_meter[84]=742.03;     waste_water[84]=161.75;
         water_under_1[85]=744.62;    water_1_meter[85]=750.97;     waste_water[85]=161.75;
         water_under_1[86]=753.56;    water_1_meter[86]=759.91;     waste_water[86]=161.75;
         water_under_1[87]=762.50;    water_1_meter[87]=768.85;     waste_water[87]=161.75;
         water_under_1[88]=771.45;    water_1_meter[88]=777.80;     waste_water[88]=161.75;
         water_under_1[89]=780.39;    water_1_meter[89]=786.74;     waste_water[89]=161.75;
         water_under_1[90]=789.33;    water_1_meter[90]=795.68;     waste_water[90]=161.75;
         water_under_1[91]=798.27;    water_1_meter[91]=804.62;     waste_water[91]=161.75;
         water_under_1[92]=807.21;    water_1_meter[92]=813.56;     waste_water[92]=161.75;
         water_under_1[93]=816.16;    water_1_meter[93]=822.51;     waste_water[93]=161.75;
         water_under_1[94]=825.10;    water_1_meter[94]=831.45;     waste_water[94]=161.75;
         water_under_1[95]=834.04;    water_1_meter[95]=840.39;     waste_water[95]=161.75;
         water_under_1[96]=842.98;    water_1_meter[96]=849.33;     waste_water[96]=161.75;
         water_under_1[97]=851.92;    water_1_meter[97]=858.27;     waste_water[97]=161.75;
         water_under_1[98]=860.87;    water_1_meter[98]=867.22;     waste_water[98]=161.75;
         water_under_1[99]=869.81;    water_1_meter[99]=876.16;     waste_water[99]=161.75;
        water_under_1[100]=878.75;   water_1_meter[100]=885.10;    waste_water[100]=161.75;




function  myFunction_waste_water_gallon_input() {
          var w = parseInt(document.getElementById("waste_water_gallon_input").value);
          var div = document.getElementById("estimated_total_waste_water");
           div.textContent = numeral(waste_water[w]).format('$0,0.00');
}


    function myFunction() {
         

        var w = parseInt(document.getElementById("gallon_input").value);
        var metersize_dropdown = document.getElementById("metersize_dropdown");
        var x = metersize_dropdown.options[metersize_dropdown.selectedIndex].value;
        // alert(x);


        if (x == "5/8 & 3/4") {
            // alert(water_under_1[w]);
             var div = document.getElementById("estimated_total");

            div.textContent = numeral(water_under_1[w]).format('$0,0.00');

        } else if (x == "1") {
            // alert(water_1_meter[w]);
         var div = document.getElementById("estimated_total");
            div.textContent = numeral(water_1_meter[w]).format('$0,0.00');

        } else {
                // alert("please select metersize");

        }

    };


</script>

<style>

    body{
        font-family: Arial;
    }

    #calulator_container{
        width:700px;
    }

    #calc_inputs{
        float:left;
        width: 37%;
        margin-right: 2%;
        margin-bottom:20px;
    }

    #calc_inputs label{
        margin-bottom:10px;
        font-size:20px;
    }

    .calc_input_section{
        margin-bottom:20px;
        float: left;
    }

    .calc_input{
        width:100%;
        font-size:16px;
        border:none;
        border-bottom: solid 1px rgb(0,64,128);
        padding: 10px 0;
        border-radius:0px;
    }

    #calc_results{
        float:right;
        width:53%;
        background-color: white;
        color: rgb(0,64,128);
        text-align: center;
        border-radius: 6px;
        padding: 30px 0px;
    }

    #calc_details{
        clear:both;
        margin-top:20px;
        display:block;
    }

    /*
      #calc_details table{
       width: 100%;
      }
      */

    #estimated_total{
        font-size: 45px;
        color:#60b609;
        padding-bottom: 10px;
    }

    #estimated_total_waste_water{
        font-size: 45px;
        color:#60b609;
        padding-bottom: 10px;
    }

    #gallon_input{

    }



</style>


    <script>
        $(document).ready(function () {

            $(".iwanttomodal").fancybox({
                'titlePosition'   : 'inside',
                'transitionIn'    : 'none',
                'transitionOut'   : 'none'
            });

            $(".swagit").fancybox({
                'titlePosition'   : 'inside',
                'transitionIn'    : 'none',
                'transitionOut'   : 'none',
                'type'      : 'iframe',
                'width'     : 570,
                'height'    : 480,
                'scrolling'       : 'no'
            });

        });

    </script>


    <style>
        #deptBanner img{
            width: 1024px;
            height: 240px;
        }
    </style>
</div>


