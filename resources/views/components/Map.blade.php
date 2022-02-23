<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


    <style type="text/css">
        #mymap {
            border:1px solid gray;
            width:100%;
            height: 300px;
        }
    </style>


</head>
<body>




<div id="mymap"></div>


<script type="text/javascript">




    var mymap = new GMaps({
        el: '#mymap',
        lat: 33.515540,
        lng:  36.297970,
        zoom:18
    });
    mymap.addMarker({
         lat: 33.515540,
            lng: 36.297970,
            title: 'al-attar',
          click: function(e) {
                alert('Please contact us at +963 0968451924');
            }
        });

</script>


</body>
</html>
