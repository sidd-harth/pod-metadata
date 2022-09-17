<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         *{
         box-sizing:border-box;
         margin:0;
         padding:0;
         }

         html,
         body{
         height:100%;
         }
         body{
         display:grid;
         place-items:center;
         background:hsl(250 100% 2%);
         }

    
         h1 {
         text-align: center;
         font-family: Bahnschrift SemiBold;
         }
         table, td, th {
         border: 2px solid black;
         height: 50px;
         }
         table {
         border-collapse: collapse;
         width: 50%;
         }
         .center {
         display: block;
         margin-left: auto;
         margin-right: auto;
         width: 50%;
         }
         td {
         text-align: center;
         height: 50px;
         vertical-align: center;
         font-family: Bahnschrift SemiBold;
         }
         tr {
         text-align: center;
         height: 50px;
         vertical-align: center;
         font-family: Bahnschrift SemiBold;
         }
      </style>
   </head>
   <body>
      <?php
	  
	  $podLabels   = file_get_contents("/etc/pod/labels/labels");
echo '<div class="container">
      
         </div>';


echo "<table style='border:1px solid black;margin-left:auto;margin-right:auto;'>
                  <tr>
                      <th style='background-color:#D49FE7'><h3>Pod Name</h3></th>
                      <th style='background-color:#E7D49F'><h3>" . getenv("MY_POD_NAME") . "</h3></th>
                  </tr>
                  <tr>
                      <th style='background-color:#E2D2E8'><h3>Pod IP</h3></th>
                      <th style='background-color:#E8E4DA'><h3>" . getenv("MY_POD_IP") . "</h3></th>
                  </tr>
                  <tr>
                      <th style='background-color:#D49FE7'><h3>Pod UID</h3></th>
                      <th style='background-color:#E7D49F'><h3>" . getenv("MY_POD_UID") . "</h3></th>
                  </tr>
                  <tr>
                      <td style='background-color:#E2D2E8'><h3>Pod Namespace</h3></td>
                      <td style='background-color:#E8E4DA'><h3>" . getenv("MY_POD_NAMESPACE") . "</h3></td>
                  </tr>
                          <tr>
                      <td style='background-color:#D49FE7'><h3>Pod Service Account</h3></td>
                      <td style='background-color:#E7D49F'><h3>" . getenv("MY_POD_SERVICE_ACCOUNT") . "</h3></td>
                  </tr>
                  <tr>
                      <th style='background-color:#E2D2E8'><h3>Pod Labels</h3></th>
                      <th style='background-color:#E8E4DA'><h3>". $podLabels ."</h3></th>
                  </tr>
                  <tr>
                      <td style='background-color:#D49FE7'><h3>Pod CPU Limit</h3></td>
                      <td style='background-color:#E7D49F'><h3>" . getenv("MY_CPU_LIMIT") . "</h3></td>
                  </tr>
                          <tr>
                      <td style='background-color:#E2D2E8'><h3>Pod Memory Limit</h3></td>
                      <td style='background-color:#E8E4DA'><h3>" . getenv("MY_MEM_LIMIT") . "</h3></td>
                  </tr>
				   <tr>
                      <th style='background-color:#D49FE7'><h3>Node Name</h3></th>
                      <th style='background-color:#E7D49F'><h3>" . getenv("MY_NODE_NAME") . "</h3></th>
                  </tr>
                  <tr>
                      <th style='background-color:#E2D2E8'><h3>Node IP</h3></th>
                      <th style='background-color:#E8E4DA'><h3>" . getenv("MY_NODE_IP") . "</h3></th>
                  </tr>";
echo "</table>";


echo "<body style='background-color:#000000'>";

echo '<h1
                 style="color:white;">
                     Pod Details via Downward API
               </h1>';

?>
  </body>
</html>