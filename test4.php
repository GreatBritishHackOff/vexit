




<!DOCTYPE html>
<html>
    
    
    
    <head>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>HTML source of <?php echo $url; ?></title>
  </head>
    
<body>
<script>$(document).ready(function(){
  $.ajax({
    url: "https://www.theyworkforyou.com/api/getMP?postcode=IG3+8PY&output=js&key=BkHPEZAtrgNGBMmPzJGZgMqa",
    dataType: 'json',
    success: function(data) {
     /* alert("hi my name is: " + data.full_name); */
        
        document.write("Your Local MP is" + data.full_name + "and his party is" + data.party);

        document.write("<img src=\"https://www.theyworkforyou.com/images/");
        document.write(data.image);
        
        document.write("\" alt=\"Smiley face\" height=\"42\" width=\"42\">");
    },
    error: function() {
      alert("error");
    }
  });        
});
    
    </script>


</body>
</html>