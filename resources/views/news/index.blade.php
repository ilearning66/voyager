<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="news/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
    <link href="news/css/business-frontpage.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js 讓 IE8 支援 HTML5 元素與媒體查詢 -->
    <!-- 警告：Respond.js 無法在 file:// 協定下運作 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		.main{
			padding:50px 0;
			min-height:500px;
		}
		footer {
			background-color:#1976a3;
			margin-bottom:0px;
		}
		footer span {
			color:#FFF;
			padding-bottom:10px;
			font-size:22px;
			border-bottom:1px solid #ffb730;
		}
		footer ul {
			list-style-type :none;
			padding:0px;
			margin-top:35px;
			color:#afabab;
		}
		footer .row {
			margin-bottom:20px;
		}
		footer .icon-section  ul {
			margin-top:25px;
		}
		footer  .icon-section  li{
			float:left;
		}

	</style>

</head>
<body>
     <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	 <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline"></h1>
                </div>
            </div>
        </div>
    </header>
	
	<div class="main">
		 <div class="container">
            <div class="row">
                <div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th width="20%">
								時間
								</th>
								<th width="80%">
								標題
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach( $news as $new )
							<tr>
								<td>{{ $new->created_at}}</td>
								<td><a href="new/{{$new->id}}">{{ $new->title}}</a></td>
							</tr>
							@endforeach
	
						</tbody>
					</table>
				</div>
            </div>
        </div>
	</div>
	
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1><span>Contact Us</span></h1>
					<ul>
						<li>Phone : 02-12345345</li>
						<li>Eamil : ilearning2016@gmail.com</li>
					</ul>
				</div>
				<div class="col-md-4 icon-section">
					<h1><span>Follow Us</span></h1>
					<ul>
						<li><a href="#" > <img src="news/images\icon\IG.png"  alt="ig" style=""></a></li>
						<li><a href="#" > <img src="news/images\icon\FB.png"  alt="fb" style=""></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					Copyright © ilearning 2017. All Rights Reserved
				</div>

			</div>
		</div>
	</footer>
	
    <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
    <script src="news/js/bootstrap.min.js"></script>
  </body>
</html>