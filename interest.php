<?php
include_once("mail.php");
$liveurl = "http://".$_SERVER['SERVER_NAME'];
$localurl = "http://localhost:8080/my_place";
$to = "hello@myplacecoworking.com";
//$to = "yatendra00013@gmail.com";
$subject = "MyPlace - Lead";
$thankyou_subject="Thank you for contacting MyPlace" ;





if ($_POST["type"] == "modal") {
    $localurl = "$liveurl";
    $htmlContent = '
    <html>
    <head>
        <title>Lead</title>
    </head>
    <body>
        <h3>' . ucwords($_POST['name']) . ' has shown an interest in the following space:- </h3>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
           <tr>
                <th>Name : </th><td>' . $_POST['name'] . '</td>
            </tr>
            <tr>
            <th>Interested In : </th><td>' . $_POST['email'] . '</td>
             </tr>
            <tr>
                <th>Mobile : </th><td>' . $_POST['mobile_no'] . '</td>
            </tr>
            <tr>
                <th>Interested In : </th><td>' . $_POST['space_name'] . '</td>
            </tr>
            <tr>
                <th>Duration : </th><td>' . $_POST['duration'] . '</td>
            </tr>
        </table>
    </body>
    </html>';
    $ThankContent = '
    <html>
    <head>
        <title>Thanks</title>
    </head>
    <body>
        <h3>Dear ' . ucwords($_POST['name']) . ',</h3>
        <p>Greetings from MyPlace™!</p>
        <p>
 Thank you for your  expression of interest at My Place ™ You can also reach us at toll free  1800 102 2000 or write to us at hello@myplacecoworking.com
        </p>
        
    </body>
    </html>';
    send_mail($_POST['email'], $thankyou_subject, $ThankContent);
} else if ($_POST["type"] == "interst") {
    //$localurl = "http://localhost:8080/my_place/bookinterest.php";
    $localurl = "$liveurl/bookinterest.php";
    $htmlContent = '
    <html>
    <head>
        <title>Lead</title>
    </head>
    <body>
        <h3>' . ucwords($_POST['name'] ). ' has shown an interest in the following space:- </h3>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
           <tr>
                <th>Name : </th><td>' . $_POST['name'] . '</td>
            </tr>
            <tr>
                <th>Mobile : </th><td>' . $_POST['mobile_no'] . '</td>
            </tr>
            <tr>
                <th>Email : </th><td>' . $_POST['email'] . '</td>
            </tr>
            <tr>
                <th>Interested In : </th><td>' . $_POST['space_name'] . '</td>
            </tr>
            <tr>
               <th>Duration : </th><td>' . $_POST['duration'] . '</td>
             </tr>
            <tr>
                <th>Company : </th><td>' . $_POST['company_name'] . '</td>
            </tr>
         
        </table>
    </body>
    </html>';

    $ThankContent = '
    <html>
    <head>
        <title>Thanks</title>
    </head>
    <body>
        <h3>Dear ' . ucwords($_POST['name']) . ',</h3>
        <p>Greetings from MyPlace™!</p>
        <p>
 Thank you for your  expression of interest at My Place ™ You can also reach us at toll free  1800 102 2000 or write to us at hello@myplacecoworking.com
        </p>
        
    </body>
    </html>';
    send_mail($_POST['email'], $thankyou_subject, $ThankContent);
} else if ($_POST["type"] == "contact_us") {
    //$localurl = "http://localhost:8080/my_place/contactus.php";
    $localurl = "$liveurl/bookinterest.php";
    $htmlContent = '
    <html>
    <head>
        <title>Lead</title>
    </head>
    <body>
        <h3>' . ucwords($_POST['name']) . ' has shown an interest in the following space:- </h3>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
           <tr>
                <th>Name : </th><td>' . $_POST['name'] . '</td>
            </tr>
            <tr>
                <th>Mobile : </th><td>' . $_POST['mobile_no'] . '</td>
            </tr>
            <tr>
                <th>Email : </th><td>' . $_POST['email'] . '</td>
            </tr>
            <tr>
                <th>Interested In : </th><td>' . $_POST['space_name'] . '</td>
            </tr>
            <tr>
            <th>Duration : </th><td>' . $_POST['duration'] . '</td>
        </tr>
            <tr>
                <th>Company : </th><td>' . $_POST['company_name'] . '</td>
            </tr>
            <tr>
                <th>Remark : </th><td>' . $_POST['remark'] . '</td>
            </tr>
        </table>
    </body>
    </html>';

    $ThankContent = '
    <html>
    <head>
        <title>Thanks</title>
    </head>
    <body>
        <h3>Dear ' . ucwords( $_POST['name']) . ',</h3>
        <p>Greetings from MyPlace™!</p>
        <p>
 Thank you for your  expression of interest at My Place ™ You can also reach us at toll free  1800 102 2000 or write to us at hello@myplacecoworking.com
        </p>
        
    </body>
    </html>';
    send_mail($_POST['email'], $thankyou_subject, $ThankContent);
}

send_mail($to, $subject, $htmlContent);





header('Location:https://myplacecoworking.com/?sent=1');
