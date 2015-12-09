<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convert to Mp3</title>
</head>
<body>
    <script type="text/javascript">

    function getQueryVariable(variable)
    {
           var query = window.location.search.substring(1);
           var vars = query.split("&");
           for (var i=0;i<vars.length;i++) {
                   var pair = vars[i].split("=");
                   if(pair[0] == variable){return pair[1];}
           }
           return(false);
    }

    var short_url = getQueryVariable("url");

    var long_url = short_url.replace('https://youtu.be/', 'https://www.youtube.com/watch?v=')

    window.location = "http://youtubeinmp3.com/fetch/?video=" + long_url;

    </script>
</body>
</html>
