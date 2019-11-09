<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <title> Room Booking API </title>
    
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <style type="text/css">
        h3{
        text-align: center;text-shadow: 1px 1px 2px black;font-weight: bolder;
    }
    hr {
    border-top: 4px double #8c8b8b;
    text-align: center;
}
hr:after {
    
    display: inline-block;
    position: relative;
    top: -15px;
    padding: 0 10px;
    background: #f0f0f0;
    color: #8c8b8b;
    font-size: 18px;
}
hr.sub-hr { 
  height: 30px; 
  border-style: solid; 
  border-color: #8c8b8b; 
  border-width: 1px 0 0 0; 
  border-radius: 20px; 
} 
hr.sub-hr:before { 
  display: block; 
  
  height: 30px; 
  margin-top: -31px; 
  border-style: solid; 
  border-color: #8c8b8b; 
  border-width: 0 0 1px 0; 
  border-radius: 20px; 
}

    </style>
</head>
<body>
    <div id="app">
        <h3 style="">Room Booking API</h3>
        <hr>
        <div class="container">
            <all-rooms></all-rooms>   
        </div>
         
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    
</body>
</html>