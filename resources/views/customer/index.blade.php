<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application</title>
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" />
    
</head>
<body>
    
    <div class="container">
        
        <div id="app">
            
            <data-viewer source="/api/customer" title="Customer Data"/>
            
        </div>
        
        
    </div>
    
</body>

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</html>