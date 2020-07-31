<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileCommander</title>
</head>
<body>
<h4><?php echo 'Loged as: '.$_SESSION['userName'];?></h4>

<a href='/logout'>logout</a>

<div id='root'>
  
   <file-list></file-list>

</div>


<script src="https://unpkg.com/vue@2.6.11/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="/js/main.js"></script>

    
</body>
</html>