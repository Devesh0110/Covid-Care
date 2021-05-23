<?php
$data=file_get_contents("https://api.rootnet.in/covid19-in/hospitals/medical-colleges");
$coronadata=json_decode($data); //decoding array or object to a string
echo "<pre>";
print_r($coronadata);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body onload="fetch()">
    <div class="table-responsive">
        <table class="table-striped text-center" id="tbval">
            <tr>
                <th>Country</th>
                <th>TotalConfirmed</th>
                <th>TotalRecovered</th>
                <th>Deaths</th>
                <th>NewRecovered</th>
                <th>NewDeaths</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <script>
        function fetch(){
            $.get("https://api.rootnet.in/covid19-in/hospitals/medical-colleges",
                function (data){
                    // console.log(data['Countries'].length)
                    var tbval=document.getElementById('tbval');
                    for(var i=1;i<20;i++){
                        var x=tbval.insertRow();
                        x.insertCell(0);
                        tbval.rows[i].cells[0].innerHTML= data['data']['medicalColleges'].data[i-1];

                        // x.insertCell(1);
                        // tbval.rows[i].cells[1].innerHTML= data['regional'][i-1]['ruralHospitals'];

                        // x.insertCell(2);
                        // tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['Recovered'];

                    }
                })
        }
    </script>
</body>
</html>