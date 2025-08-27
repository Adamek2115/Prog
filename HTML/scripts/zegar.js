<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="a.css">


</head>

<body>
    <div id="zegar"></div>
  
    <script>
        function updateClock() {
        const now = new Date();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const seconds = now.getSeconds();

        
        const timeString = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        document.getElementById('zegar').textContent = timeString;
    
        const hue = (hours / 24) * 360; 
        document.getElementById('zegar').style.backgroundColor = `hsl(${hue}, 50%, 30%)`;

        
        const textHue = (seconds / 60) * 360; 
        document.getElementById('zegar').style.color = `hsl(${textHue}, 100%, 50%)`;
    }

    setInterval(updateClock, 1000);
    updateClock();
    </script>
</body>
</html>





CSS:




    #zegar {
        font-size: 3em;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background-color: #333; 
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: background-color 1s, color 1s;
      }
  






