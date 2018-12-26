<!DOCTYPE html>
<html>
<head>
    <title>Url Shortener</title>
    <meta charset="utf-8">
    <style>
    	.error-msg{
    		color: pink;
    		font-family: italic;
    		font-weight: bold;
    	}
    	body{
    		background-color: #777;
    		color: #fff;
    	}
    	.wrapper{
    		width: 50%;
    		margin: 0 auto;
    		padding-top: 8em;
    		text-align: center;
    		max-width: 60%;
    	}
    	input[type=text] {
    		width: 100%;
    		border: none;
    		padding: 1em 0.5em;
    		border-radius: 3px;
    	}
    	input[type=submit]{

    	}
    	a{
    		color: #ccc;
    	}
    </style>
</head>
<body>
    <div class="wrapper">
    	@yield('content')
    </div>
</body>
</html>