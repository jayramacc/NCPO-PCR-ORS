<?php

include '../class/MySqlLeaf.php';

@ $privateKey = $_GET["id"];

if (isset($privateKey)){    

    // SQL Query: Get the data in the private key
    $sql = "SELECT * FROM `applicants` WHERE `id`='$privateKey' AND `activated`='true'LIMIT 1";
    
    // Prepare Query
    $query = mysqli_query(MySqlLeaf::getCon(), $sql);

    // Count Rows
    $numRow = mysqli_num_rows($query);

    // Put the MYSQL Result in the user Info
    if ($numRow > 0){
        $userInfo = mysqli_fetch_array($query);
        $renew_request = true;
    }else{
        $renew_request = false;
    }
    
}else{
    $userInfo = array();
    $renew_request = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
    var tD = new Date();
    var datestr = tD.getDate() + "/" + (tD.getMonth()+ 1) + "/" + tD.getFullYear();
    function popDate(eN) {
    document.forms[0].elements[eN].value = datestr;
    }
    </script>
</head>	 
<body>

<form>
        <!-- ini ang puon kng sa iframe -->	
        <section id="main" class="column">


        <img src="..\assets\img\pnp.png" style="width:100px;height:120px;border:3;left:310px;top:15px;position: absolute;">

        <img src="..\assets\img\NCPO Logo.png" style="width:150px;height:138px;border:3;left:929px;top:13px;position: absolute;">

       <h4 style="position: absolute; top:-141px; left:54px;top:39px;"> FILE NO:     </h4>
        <input type="number" id="file_num_admin" style="border: none; border-bottom: 1px solid black; position: absolute; top:-141px; left:131px;top:56px;">
     


        <center> 
        <div>    
        <p style="margin-left:288px;">Republic of the Philippines <BR> National Police Commission <br>
        PHILIPPINE NATIONAL POLICE <h4 style="margin-left:288px;"> NAGA CITY POLICE OFFICE <br> Naga City</h4> <br>
        
        </p>
        </div>
        

        <!-- The title of the page-->
        <h1 style="margin-left:288px;"> <U>POLICE CLEARANCE </U> </h1>
        </center>
                                        
        <div class="boxed" style = "border:1px solid black; height:200px; width:200px;position:absolute;left:56px; ">
        <center>
        Right Thumbmark
        </center>
        </div>

<!-- start of the context -->   
<div class="container" style="margin-left:320px;">

    <p> 
        <font size= "3"> TO WHOM IT MAY CONCERN
    </p> 
    <p style="text-indent:50px;"> This is to certify that 
        <input type="text" value="<?php echo @$userInfo['lname'] .", ". @$userInfo['fname'] .' ' .@$userInfo['suffix'] .' ' .@$userInfo['mname'] ; ?>" style="border: none; border-bottom: 1px solid black; width: 410px; "/>
        age 
        <input type="number" value="<?php echo @$userInfo['age']; ?>" style="border: none; border-bottom: 1px solid black; width: 80px;"/>
    </p>
 
    <p>
        ______________,  born on 
        <input type="text" value="<?php echo @$userInfo['bdate']; ?>"  style="border: none; border-bottom: 1px solid black; width: 395px; "/> 
        , presently residing at 
    </p>     
        <input type="text" value="<?php echo @$userInfo['complete_address']; ?>" style="border: none; border-bottom: 1px solid black; width: 710px; "/>
    <p>and &ensp;&ensp;whose &ensp;&ensp;picture, &ensp;&ensp;right thumb mark, &ensp;&ensp;and &ensp;&ensp;signature appear &ensp;&ensp;hereon&ensp;&ensp; has&ensp;&ensp;  undergone 
    </p>
    <p>
        POLICE&ensp; RECORD&ensp;CHECK &ensp;from this office and the result is/are indicated below:
    </p>
    <p style="margin-left:50px;">
        FINDINGS:<input type="text" style="border: none; border-bottom: 1px solid black; width: 577px; "  /><br>
        PURPOSE:<input type="text" value="<?php echo @$userInfo['purpose']; ?>" style="border: none; border-bottom: 1px solid black; width: 580px; " />
    </p>

        <b style="position: absolute; top: 570px; left: 400px;"> RECORD CHECKED BY</b>
        <b style="position: absolute; top: 570px; right: 290px;"> NOTED BY</b>
        <b style="position: absolute; top: 620px; left: 365px;"> SPO2 JOSE LUIS A. CAPARROSO</b>
        <b style="position: absolute; top: 640px; left: 400px;"> INVESTIGATION PNCO</b>
        <b style="position: absolute; top: 620px; right: 220px;"> JONATHAN O. PANGANIBAN</b>
        <b style="position: absolute; top: 640px; right: 190px;"> POLICE SENIOR SUPERINTENDENT</b>

</div>
    <br>

    <right>
        <p style="text-indent:43px"> CTC NO.
        <input type="text" value="" id="ctc_no" style="margin-left: 36px;border: none; border-bottom: 1px solid black;">  </p>
        <p style="text-indent:43px"> ISSUED AT.&ensp;
        <input type="text" id="ctc_no" style="margin-left: 7px;border: none; border-bottom: 1px solid black; " /><br>
        </p>

    </right>
    <right>
        <p style="text-indent:43px"> ISSUED ON.
        <input type="text" value="" id="ctc_no" style="margin-left: 9px;border: none; border-bottom: 1px solid black;"></p>
    </right>

    <right>
        <p style="text-indent:43px"> OR NO.
        <input type="text" value="" id="ctc_no" style="margin-left: 42px;border: none; border-bottom: 1px solid black;"><Br>
    </div>


    <BR>
    <center style=text-indent:43px><B > NOTE: VALID FOR SIX(6) MONTHS FROM DATE OF ISSUE. FALSIFICATION IS PUNISHABLE UNDER ARTICLE 12 RPC</B></center> <br><br><br>
    
    <div>
    
    
    <font color="red">-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;-&ensp;</font> 
    <!-- 2nd form -->
    <center>
        <H1  >
            <u>POLICE CLEARANCE APPLICATION</u>
        </H1>  
    </center>
    <div class="container" >
    <p style="text-indent:43px"> <sup>(PLEASE PRINT) </sup>
    <left style="left:150px; top:837px; margin-left:478px;" >DATE  
    <input type="text" style="border: none; border-bottom: 1px solid black; width: 230px; "/>
    </p>
    
    <p style="text-indent:43px"> FILE NO:
    <input type="text" style="border: none; border-bottom: 1px solid black; width: 230px; "/>
    <left style="left:150px; top:837px; margin-left:277px;" >OR NO: 
    <input type="text" style="border: none; border-bottom: 1px solid black; width: 218px; "/>
    </p>
 
    <p style="text-indent:43px">NAME:
    <input type="text" value="<?php echo @$userInfo['lname'] .", ". @$userInfo['fname'] .' ' .@$userInfo['suffix'] .' ' .@$userInfo['mname'] ; ?>"  style="border: none; border-bottom: 1px solid black; width: 924px; "/>
            
    </p>

    <p style="text-indent:43px">ADDRESS:
    <input type="text"  value="<?php echo @$userInfo['complete_address']; ?>" style="border: none; border-bottom: 1px solid black; width: 898px; "/>
    <p>
    <p style="text-indent:43px">SEX:
    <input type="checkbox" name="sex" value="male">M
    <input type="checkbox" name="sex" value="female">F 
            <left style="left:150px; top:837px; margin-left:277px;">
             CIVIL STATUS: 
             <input type="checkbox" name="civilstatus" >SINGLE
             <input type="checkbox" name="civilstatus" >MARRIED
             <input type="checkbox" name="civilstatus" >WIDOWER
             <input type="checkbox" name="civilstatus" >SEPARATED
            </left>   
    </p>
    <p style="text-indent:43px" >DATE OF BIRTH:<input type="date" value="<?php echo @$userInfo['bdate']; ?>" style="border: none; border-bottom: 1px solid black; width: 125px; ">
        PLACE OF BIRTH:<input type="text"  value="<?php echo @$userInfo['birth_place']; ?>" style="border: none; border-bottom: 1px solid black; width: 284px; "/>
        RELIGION:<input type="text"  value="<?php echo @$userInfo['religion']; ?>" style="border: none; border-bottom: 1px solid black; width: 230px; "/>
    </p>
    <p style="text-indent:43px">NATIONALITY: <input type="text"  style="border: none; border-bottom: 1px solid black; width: 338px; "/>
        HEIGHT:<input type="text"  value="<?php echo @$userInfo['height']; ?>" style="border: none; border-bottom: 1px solid black; width: 181px; "/>
        WEIGHT:<input type="text"  value="<?php echo @$userInfo['weight']; ?>" style="border: none; border-bottom: 1px solid black; width: 205px; "/>
        
    </p>
    <p style="text-indent:43px">COMM. TAX CERT. NO:<input type="text"  value="<?php echo @$userInfo['cedula_no']; ?>" style="border: none; border-bottom: 1px solid black; width: 285px; "/>
        ISSUED AT:<input type="text" style="border: none; border-bottom: 1px solid black; width: 162px; "/>
        ISSUED ON:<input type="text" style="border: none; border-bottom: 1px solid black; width: 181px; "/>
        
    </p>

    <p style="text-indent:43px">PURPOSE IN SECURING POLICE CLEARANCE
    <input type="text" value="<?php echo @$userInfo['purpose']; ?>" style="border: none; border-bottom: 1px solid black; width: 637px; "/>
    </p>

</div>
    <BR>
    <input type="text" style="border: none; border-bottom: 1px solid black; width: 230px;left:793px;top:1246px;position: absolute; " />
    
    <p style="left:858px;top:1267px;position: absolute;">SIGNATURE </p>
        </section>

</form>        
</body>
</html>