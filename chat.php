Skip to content

Search or jump to�

Pull requests
Issues
Marketplace
Explore
 @jcm2582 Sign out
0
1 4 flyg101/simple-chat-ui
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Insights
simple-chat-ui/index.html
fd63dcf  on Jun 11, 2017
@kennyose kennyose fix ui
@kennyose @flyg101

290 lines (251 sloc)  11.3 KB
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Simple-Chat-UI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/chat.css" rel="stylesheet">
</head>

<body>

	<div class="main_section">
		<div class="container">
			<div class="chat_container">
				<div class="col-sm-3 hidden-xs chat_sidebar">
					<div class="row" style="text-align: center">
						Ads..
					</div>
				</div>
				<!--Ads_sidebar-->


				<div class="col-sm-6 message_section">
					<div class="row" style="background-image:url(http://cdn.css-tricks.com/images/forums-bg.png)">
						<div class="new_message_head">
							<div class="pull-left">
								<div class="dropdown">
									<button class="dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-weixin" aria-hidden="true"></i> Conversations <span class="caret"></span></button>
									<ul class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu3">
										<li>
											<div id="custom-search-input">
												<div class="input-group col-md-12">
													<input type="text" class="  search-query form-control" placeholder="Conversation" />
													<button class="btn btn-danger" type="button">
														<span class=" glyphicon glyphicon-search"></span>
													</button>
												</div>
											</div>
										</li>

										<li role="separator" class="divider"></li>

										<li class="left clearfix conversations">
											<div class="chat-body clearfix">
												<div class="header_sec">
													<strong class="primary-font">Yo McMoney</strong>
												</div>
												<div class="contact_sec">
													<span class="badge pull-right">3</span>
												</div>
											</div>
										</li>
										<li class="left clearfix conversations">
											<div class="chat-body clearfix">
												<div class="header_sec">
													<strong class="primary-font">Yo McMoney</strong>
												</div>
												<div class="contact_sec">
													<span class="badge pull-right">3</span>
												</div>
											</div>
										</li>
										<li class="left clearfix conversations">
											<div class="chat-body clearfix">
												<div class="header_sec">
													<strong class="primary-font">Yo McMoney</strong>
												</div>
												<div class="contact_sec">
													<span class="badge pull-right">3</span>
												</div>
											</div>
										</li>
										<li class="left clearfix conversations">
											<div class="chat-body clearfix">
												<div class="header_sec">
													<strong class="primary-font">Yo McMoney</strong>
												</div>
												<div class="contact_sec">
													<span class="badge pull-right">3</span>
												</div>
											</div>
										</li>
										<li class="left clearfix conversations">
											<div class="chat-body clearfix">
												<div class="header_sec">
													<strong class="primary-font">Yo McMoney</strong>
												</div>
												<div class="contact_sec">
													<span class="badge pull-right">3</span>
												</div>
											</div>
										</li>
										<li class="left clearfix conversations">
											<div class="chat-body clearfix">
												<div class="header_sec">
													<strong class="primary-font">Yo McMoney</strong>
												</div>
												<div class="contact_sec">
													<span class="badge pull-right">3</span>
												</div>
											</div>
										</li>
										<li class="left clearfix conversations">
											<div class="chat-body clearfix">
												<div class="header_sec">
													<strong class="primary-font">Yo McMoney</strong>
												</div>
												<div class="contact_sec">
													<span class="badge pull-right">3</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="pull-right">
								<div class="dropdown">
									<button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" aria-hidden="true"></i>  Setting <span class="caret"></span></button>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
										<li><a href="#">Action</a></li>
										<li><a href="#">Profile</a></li>
										<li><a href="#">Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!--new_message_head-->

						<div class="chat_area">
							<ul class="list-unstyled">
								<li class="left clearfix partner_chat">
									<span class="chat-img1 pull-left">
                     <img src="https://lh3.googleusercontent.com/-SEkCoiLsxMk/AAAAAAAAAAI/AAAAAAAAAAA/AAyYBF4DUk-ifOFiwhGXBoOheEF7P0ZW1g/s32-c-mo/photo.jpg" alt="User Avatar" class="img-circle">
                  </span>

									<div class="chat-body1 clearfix">
										<p>
											<span style="color:rgb(107,203,239); display:block">Yo McMoney</span>

											<span style="display:block; padding:5px 0px 5px 0px;">
												Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
												from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
												Virginia.
											</span>

											<span style="font-size:0.85em; color:grey; display:block; float:right;">09:40PM</span>
										</p>
									</div>
								</li>

								<li class="left clearfix partner_chat">
									<span class="chat-img1 pull-left">
                  	<img src="https://lh3.googleusercontent.com/-SEkCoiLsxMk/AAAAAAAAAAI/AAAAAAAAAAA/AAyYBF4DUk-ifOFiwhGXBoOheEF7P0ZW1g/s32-c-mo/photo.jpg" alt="User Avatar" class="img-circle">
                  </span>

									<div class="chat-body1 clearfix">

										<p>
											<span style="display:block; padding:5px 0px 5px 0px;">
												Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
												from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
												Virginia.
											</span>

											<span style="font-size:0.85em; color:grey; display:block; float:right;">09:40PM</span>
										</p>

									</div>
								</li>

								<li class="left clearfix partner_chat">
									<span class="chat-img1 pull-left">
                     <img src="https://lh3.googleusercontent.com/-SEkCoiLsxMk/AAAAAAAAAAI/AAAAAAAAAAA/AAyYBF4DUk-ifOFiwhGXBoOheEF7P0ZW1g/s32-c-mo/photo.jpg" alt="User Avatar" class="img-circle">
                  </span>

									<div class="chat-body1 clearfix">
										<div class="image_chat">
											<span style="color:rgb(107,203,239); display:block">Yo McMoney</span>

											<div class="image_thumb"	style="padding:5px 0px 5px 0px;">
												<img src="./image1.jpg" class="img-responsive" alt="image1">
											</div>

											<span style="font-size:0.85em; color:grey; display:block; float:right;">09:40PM</span>
										</div>
									</div>
								</li>

								<li class="left clearfix admin_chat">
									<span class="chat-img1 pull-right">
                     <img src="https://lh3.googleusercontent.com/-SEkCoiLsxMk/AAAAAAAAAAI/AAAAAAAAAAA/AAyYBF4DUk-ifOFiwhGXBoOheEF7P0ZW1g/s32-c-mo/photo.jpg" alt="User Avatar" class="img-circle">
                  </span>

									<div class="chat-body1 clearfix">
										<div class="image_chat">
											<span style="color:rgb(107,203,239); display:block; text-align:right">Yo McMoney</span>

											<div class="image_thumb"	style="padding:5px 0px 5px 0px; display:block;" >
												<img src="./image1.jpg" class="img-responsive" alt="image1">
											</div>

											<span style="font-size:0.85em; color:grey; display:block; float:right;">09:40PM</span>
										</div>
									</div>
								</li>

								<li class="left clearfix partner_chat">
									<span class="chat-img1 pull-left">
                    <img src="https://lh3.googleusercontent.com/-SEkCoiLsxMk/AAAAAAAAAAI/AAAAAAAAAAA/AAyYBF4DUk-ifOFiwhGXBoOheEF7P0ZW1g/s32-c-mo/photo.jpg" alt="User Avatar" class="img-circle">
                  </span>

									<div class="chat-body1 clearfix">
										<p>
											<span style="display:block; padding:5px 0px 5px 0px;">Contrary to popular belief</span>

											<span style="font-size:0.85em; color:grey; display:block; float:right;">09:40PM</span>
										</p>
									</div>
								</li>

								<li class="left clearfix admin_chat">
									<span class="chat-img1 pull-right">
                    <img src="https://lh3.googleusercontent.com/-SEkCoiLsxMk/AAAAAAAAAAI/AAAAAAAAAAA/AAyYBF4DUk-ifOFiwhGXBoOheEF7P0ZW1g/s32-c-mo/photo.jpg" alt="User Avatar" class="img-circle">
                  </span>

									<div class="chat-body1 clearfix">
										<p>
											<span style="display:block; padding: 5px 0px 5px 0px;">
												Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
												from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
												Virginia.
											</span>

											<span style="font-size:0.85em; color:grey; display:block; float:right;">09:40PM</span>
										</p>
									</div>
								</li>

								<li class="left clearfix admin_chat">
									<span class="chat-img1 pull-right">
                    <img src="https://lh3.googleusercontent.com/-SEkCoiLsxMk/AAAAAAAAAAI/AAAAAAAAAAA/AAyYBF4DUk-ifOFiwhGXBoOheEF7P0ZW1g/s32-c-mo/photo.jpg" alt="User Avatar" class="img-circle">
                  </span>

									<div class="chat-body1 clearfix">
										<p>
											<span style="display:block; padding:5px 0px 5px 0px;">Contrary to popular belief.</span>

											<span style="font-size:0.85em; color:grey; display:block; float:right;">09:40PM</span>
										</p>
									</div>
								</li>
							</ul>
						</div>
						<!--chat_area-->

						<div class="message_write">
							<textarea class="form-control" placeholder="type a message"></textarea>
							<div class="chat_bottom"><a href="#" class="pull-left upload_btn"><i class="fa fa-paperclip fa-2x" aria-hidden="true"></i> Add Files</a>
								<a href="#" class="pull-right btn btn-success">Send</a>
							</div>
						</div>
					</div>
				</div>
				<!--message_section-->

				<div class="col-sm-3 hidden-xs chat_sidebar">
					<div class="row" style="text-align: center">
						Ads..
					</div>
				</div>
				<!--Ads_sidebar-->
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.autosize/3.0.20/autosize.min.js"></script>

	<script>
		autosize(document.querySelector('textarea'));
	</script>
</body>

</html>
� 2018 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
About
Press h to open a hovercard with more details.
