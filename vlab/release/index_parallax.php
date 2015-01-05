<?php
	  ini_set('display_errors',1);
	  include ('../interim/header.php');
?>
<!--<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
-->

<script type="text/javascript" src="/vlab/interim/views/jquery/js/release.js"></script>
<style>


.navigationp {
	position: fixed;
	z-index: 1;
	background: rgba(255, 255, 255, 0.2);
	padding: 30px;
	margin-top: 30px;
	list-style-type: none;

}


.navigationp li {
	width: 15px;
	height: 15px;
	border-radius: 0px;
	margin-top:25px;
	margin-bottom: 37px;
	padding: 5px;
	position: relative;
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
	
}
.navigationp li:hover,.navigationp li.active {
	background-color: #fff !important;
	cursor: pointer;
}
.slide {
	background-attachment: fixed;
	width: 100%;
	height:644px;
	position: relative;
	overflow: hidden;
}
#slide1 {
	
	position: relative;
	overflow:hidden;
	background-image: url(/vlab/images/hum1.jpg);
	background-size: 100% 100%;
		
}
#slide2 {
	position: relative;
	overflow:hidden;
	background-image: url(/vlab/images/tech1.jpg);
	background-size: 100% 100%
	
}
#slide3 {
	position: relative;
	overflow:hidden;
	background-image: url(/vlab/images/slide3.jpg);
	background-size: 100% 100%
}
#slide4 {
	position: relative;
	overflow:hidden;
	background-image: url(/vlab/images/slide4.jpg);
	background-size: 100% 100%
}
.data{
	margin-right: 7%;
	margin-left: 6%;
	padding-top: 2%;
	top:0;
	left:0;
	height: 644px;
	opacity: 1;
	font-weight: bolder;
}

#popup{
	width: 200px;
    padding: 10px;
   
    margin: -18px 0 0 18px;
    background-color: #632a89;
    font-size: 18px;
    color: #fff;
    border-radius: 2px;
	    
}

#popup a{
	color:#fff;
}



</style>

<ul class="navigationp">
<li class='lip' data-slide="1" style="box-shadow: 0 0 10px 10px #632a89;background-color: #632a89;" >

<div id="popup" style="display: none"><b><a href="#slide1"> Overview </a></b> </div>
</li>
<li class='lip' data-slide="2" style="box-shadow: 0 0 10px 10px #57068C;background-color: #57068C;">

<div id="popup" style= "display: none" ><b><a href="#slide2"> Setup </a></b> </div>
</li>
<li class='lip' data-slide="3" style="box-shadow: 0 0 10px 10px #632a89;background-color: #632a89;" >

<div id="popup" style= "display: none" ><b><a href="#slide3"> Gateway </a></b> </div>
</li>
<li class='lip' data-slide="4" style="box-shadow: 0 0 10px 10px #57068C;background-color: #57068C;">

<div id="popup" style= "display: none" ><b><a href="#slide4"> Xen Node </a> </b> </div>
</li>
</ul>

<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.0">
<div class='data'>
<h1>Setup Overview</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at ante at nibh molestie tempor posuere sit amet ante. Vivamus a varius odio, sit amet lobortis tellus. Sed sed nibh leo. Aenean consequat enim ac interdum elementum. Nunc sit amet leo id massa tristique ultricies a nec elit. Morbi a risus aliquam lacus vehicula dignissim nec nec urna. Donec bibendum laoreet lectus. Donec condimentum et velit quis vulputate. Cras dictum, nibh sed tincidunt pulvinar, elit metus dapibus lectus, sit amet aliquam arcu turpis eu dolor. Ut erat dui, tempus sollicitudin neque at, commodo tristique dui. Pellentesque erat diam, gravida non porttitor vitae, lacinia at orci.
</p>
<br>
<br>
<p>
In eu aliquet urna. Quisque quis risus nec ex faucibus egestas. Pellentesque ornare at ligula id venenatis. Fusce felis tellus, laoreet eu turpis sit amet, pulvinar convallis libero. Vivamus egestas et ligula a tristique. Nunc hendrerit elit ac lectus varius tincidunt. Fusce sit amet augue in ipsum congue pharetra. Duis a enim viverra augue euismod commodo. Donec viverra quam vel urna elementum, sed auctor arcu porttitor. Praesent tristique risus et consequat interdum. Nunc dapibus felis id ipsum efficitur, ut ultrices arcu posuere.
</p>
<br>
<p>

In eu aliquet urna. Quisque quis risus nec ex faucibus egestas. Pellentesque ornare at ligula id venenatis. Fusce felis tellus, laoreet eu turpis sit amet, pulvinar convallis libero. Vivamus egestas et ligula a tristique. Nunc hendrerit elit ac lectus varius tincidunt. Fusce sit amet augue in ipsum congue pharetra. Duis a enim viverra augue euismod commodo. Donec viverra quam vel urna elementum, sed auctor arcu porttitor. Praesent tristique risus et consequat interdum. Nunc dapibus felis id ipsum efficitur, ut ultrices arcu posuere.
</p>
<br>
<p>
In eu aliquet urna. Quisque quis risus nec ex faucibus egestas. Pellentesque ornare at ligula id venenatis. Fusce felis tellus, laoreet eu turpis sit amet, pulvinar convallis libero. Vivamus egestas et ligula a tristique. Nunc hendrerit elit ac lectus varius tincidunt. Fusce sit amet augue in ipsum congue pharetra. Duis a enim viverra augue euismod commodo. Donec viverra quam vel urna elementum, sed auctor arcu porttitor. Praesent tristique risus et consequat interdum. Nunc dapibus felis id ipsum efficitur, ut ultrices arcu posuere.
</p>


</div>
</div><!--End Slide 1-->
<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.0">
<div class='data'>	
<h1>Setup</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at ante at nibh molestie tempor posuere sit amet ante. Vivamus a varius odio, sit amet lobortis tellus. Sed sed nibh leo. Aenean consequat enim ac interdum elementum. Nunc sit amet leo id massa tristique ultricies a nec elit. Morbi a risus aliquam lacus vehicula dignissim nec nec urna. Donec bibendum laoreet lectus. Donec condimentum et velit quis vulputate. Cras dictum, nibh sed tincidunt pulvinar, elit metus dapibus lectus, sit amet aliquam arcu turpis eu dolor. Ut erat dui, tempus sollicitudin neque at, commodo tristique dui. Pellentesque erat diam, gravida non porttitor vitae, lacinia at orci.
</p>
<br>
<br>
<p>
Donec suscipit ac odio at finibus. Proin vestibulum semper augue, quis faucibus dolor tincidunt at. Ut lobortis diam maximus, sollicitudin ipsum vitae, rhoncus sapien. Sed ultrices varius enim nec varius. Donec placerat augue eget semper molestie. Vivamus nisi erat, pharetra in efficitur sit amet, faucibus eget nulla. Nulla scelerisque aliquet volutpat. Vestibulum mi quam, posuere ac accumsan non, ultrices vel libero. Vestibulum leo nulla, molestie et augue ut, ultricies facilisis sem. Vivamus turpis risus, venenatis ut risus vel, laoreet accumsan lacus. Proin tellus nunc, luctus quis turpis ut, facilisis dictum urna. Maecenas egestas leo sed pharetra tristique. Vestibulum eget elit sit amet mauris mollis tristique a ut turpis.
</p>
<br>
<br>
<p>
Etiam laoreet posuere dolor et cursus. Praesent congue hendrerit fringilla. Nulla consectetur ligula ornare libero pretium tincidunt. In mattis odio tellus, in cursus odio luctus eget. Quisque eget nibh eu odio porta maximus. Etiam egestas viverra semper. Integer congue, est sed ornare hendrerit, urna ex eleifend sapien, a malesuada diam ligula et mauris. Nullam vitae gravida velit. Duis feugiat arcu volutpat arcu facilisis tincidunt. Morbi lobortis felis et quam tempus, non ornare metus scelerisque. Nulla ex sapien, vulputate in dignissim at, scelerisque ac massa. Praesent sit amet ligula suscipit, rhoncus erat vitae, tristique tortor. Integer sit amet auctor mi. Donec ut diam vitae ipsum porttitor sagittis ut eget velit. Nullam ultrices nulla vehicula ipsum imperdiet convallis. Morbi eu ipsum commodo, finibus arcu eu, malesuada odio.
</p>
<br>
<br>
<br>
<br>
<br>
<p>
Curabitur pellentesque ante non velit congue laoreet nec a diam. Morbi non maximus felis, vitae lacinia justo. Morbi tincidunt vulputate lectus, sed dignissim neque vulputate et. Proin id massa vel sapien faucibus iaculis a id sem. Ut non venenatis ligula. Nullam sodales tempus euismod. Fusce pharetra massa at tellus interdum, et vehicula erat tempor.
</p>
<p>
In eu aliquet urna. Quisque quis risus nec ex faucibus egestas. Pellentesque ornare at ligula id venenatis. Fusce felis tellus, laoreet eu turpis sit amet, pulvinar convallis libero. Vivamus egestas et ligula a tristique. Nunc hendrerit elit ac lectus varius tincidunt. Fusce sit amet augue in ipsum congue pharetra. Duis a enim viverra augue euismod commodo. Donec viverra quam vel urna elementum, sed auctor arcu porttitor. Praesent tristique risus et consequat interdum. Nunc dapibus felis id ipsum efficitur, ut ultrices arcu posuere.
</p>



</div>
</div>
<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
	<div class='data'>
<h1>Gateway</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at ante at nibh molestie tempor posuere sit amet ante. Vivamus a varius odio, sit amet lobortis tellus. Sed sed nibh leo. Aenean consequat enim ac interdum elementum. Nunc sit amet leo id massa tristique ultricies a nec elit. Morbi a risus aliquam lacus vehicula dignissim nec nec urna. Donec bibendum laoreet lectus. Donec condimentum et velit quis vulputate. Cras dictum, nibh sed tincidunt pulvinar, elit metus dapibus lectus, sit amet aliquam arcu turpis eu dolor. Ut erat dui, tempus sollicitudin neque at, commodo tristique dui. Pellentesque erat diam, gravida non porttitor vitae, lacinia at orci.
</p>
<br>
<br>
<p>
Donec suscipit ac odio at finibus. Proin vestibulum semper augue, quis faucibus dolor tincidunt at. Ut lobortis diam maximus, sollicitudin ipsum vitae, rhoncus sapien. Sed ultrices varius enim nec varius. Donec placerat augue eget semper molestie. Vivamus nisi erat, pharetra in efficitur sit amet, faucibus eget nulla. Nulla scelerisque aliquet volutpat. Vestibulum mi quam, posuere ac accumsan non, ultrices vel libero. Vestibulum leo nulla, molestie et augue ut, ultricies facilisis sem. Vivamus turpis risus, venenatis ut risus vel, laoreet accumsan lacus. Proin tellus nunc, luctus quis turpis ut, facilisis dictum urna. Maecenas egestas leo sed pharetra tristique. Vestibulum eget elit sit amet mauris mollis tristique a ut turpis.
</p>
<br>
<br>
<p>
Etiam laoreet posuere dolor et cursus. Praesent congue hendrerit fringilla. Nulla consectetur ligula ornare libero pretium tincidunt. In mattis odio tellus, in cursus odio luctus eget. Quisque eget nibh eu odio porta maximus. Etiam egestas viverra semper. Integer congue, est sed ornare hendrerit, urna ex eleifend sapien, a malesuada diam ligula et mauris. Nullam vitae gravida velit. Duis feugiat arcu volutpat arcu facilisis tincidunt. Morbi lobortis felis et quam tempus, non ornare metus scelerisque. Nulla ex sapien, vulputate in dignissim at, scelerisque ac massa. Praesent sit amet ligula suscipit, rhoncus erat vitae, tristique tortor. Integer sit amet auctor mi. Donec ut diam vitae ipsum porttitor sagittis ut eget velit. Nullam ultrices nulla vehicula ipsum imperdiet convallis. Morbi eu ipsum commodo, finibus arcu eu, malesuada odio.
</p>
<br>
<br>
<br>
<br>
<br>
<p>
Curabitur pellentesque ante non velit congue laoreet nec a diam. Morbi non maximus felis, vitae lacinia justo. Morbi tincidunt vulputate lectus, sed dignissim neque vulputate et. Proin id massa vel sapien faucibus iaculis a id sem. Ut non venenatis ligula. Nullam sodales tempus euismod. Fusce pharetra massa at tellus interdum, et vehicula erat tempor.
</p>
<p>
In eu aliquet urna. Quisque quis risus nec ex faucibus egestas. Pellentesque ornare at ligula id venenatis. Fusce felis tellus, laoreet eu turpis sit amet, pulvinar convallis libero. Vivamus egestas et ligula a tristique. Nunc hendrerit elit ac lectus varius tincidunt. Fusce sit amet augue in ipsum congue pharetra. Duis a enim viverra augue euismod commodo. Donec viverra quam vel urna elementum, sed auctor arcu porttitor. Praesent tristique risus et consequat interdum. Nunc dapibus felis id ipsum efficitur, ut ultrices arcu posuere.
</p>



</div></div><!--End Slide 3-->
<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
	<div class='data'>
<h1>Xen Node</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at ante at nibh molestie tempor posuere sit amet ante. Vivamus a varius odio, sit amet lobortis tellus. Sed sed nibh leo. Aenean consequat enim ac interdum elementum. Nunc sit amet leo id massa tristique ultricies a nec elit. Morbi a risus aliquam lacus vehicula dignissim nec nec urna. Donec bibendum laoreet lectus. Donec condimentum et velit quis vulputate. Cras dictum, nibh sed tincidunt pulvinar, elit metus dapibus lectus, sit amet aliquam arcu turpis eu dolor. Ut erat dui, tempus sollicitudin neque at, commodo tristique dui. Pellentesque erat diam, gravida non porttitor vitae, lacinia at orci.
</p>
<br>
<br>
<p>
Donec suscipit ac odio at finibus. Proin vestibulum semper augue, quis faucibus dolor tincidunt at. Ut lobortis diam maximus, sollicitudin ipsum vitae, rhoncus sapien. Sed ultrices varius enim nec varius. Donec placerat augue eget semper molestie. Vivamus nisi erat, pharetra in efficitur sit amet, faucibus eget nulla. Nulla scelerisque aliquet volutpat. Vestibulum mi quam, posuere ac accumsan non, ultrices vel libero. Vestibulum leo nulla, molestie et augue ut, ultricies facilisis sem. Vivamus turpis risus, venenatis ut risus vel, laoreet accumsan lacus. Proin tellus nunc, luctus quis turpis ut, facilisis dictum urna. Maecenas egestas leo sed pharetra tristique. Vestibulum eget elit sit amet mauris mollis tristique a ut turpis.
</p>
<br>
<br>
<p>
Etiam laoreet posuere dolor et cursus. Praesent congue hendrerit fringilla. Nulla consectetur ligula ornare libero pretium tincidunt. In mattis odio tellus, in cursus odio luctus eget. Quisque eget nibh eu odio porta maximus. Etiam egestas viverra semper. Integer congue, est sed ornare hendrerit, urna ex eleifend sapien, a malesuada diam ligula et mauris. Nullam vitae gravida velit. Duis feugiat arcu volutpat arcu facilisis tincidunt. Morbi lobortis felis et quam tempus, non ornare metus scelerisque. Nulla ex sapien, vulputate in dignissim at, scelerisque ac massa. Praesent sit amet ligula suscipit, rhoncus erat vitae, tristique tortor. Integer sit amet auctor mi. Donec ut diam vitae ipsum porttitor sagittis ut eget velit. Nullam ultrices nulla vehicula ipsum imperdiet convallis. Morbi eu ipsum commodo, finibus arcu eu, malesuada odio.
</p>
<br>
<br>
<br>
<br>
<br>
<p>
Curabitur pellentesque ante non velit congue laoreet nec a diam. Morbi non maximus felis, vitae lacinia justo. Morbi tincidunt vulputate lectus, sed dignissim neque vulputate et. Proin id massa vel sapien faucibus iaculis a id sem. Ut non venenatis ligula. Nullam sodales tempus euismod. Fusce pharetra massa at tellus interdum, et vehicula erat tempor.
</p>
<p>
In eu aliquet urna. Quisque quis risus nec ex faucibus egestas. Pellentesque ornare at ligula id venenatis. Fusce felis tellus, laoreet eu turpis sit amet, pulvinar convallis libero. Vivamus egestas et ligula a tristique. Nunc hendrerit elit ac lectus varius tincidunt. Fusce sit amet augue in ipsum congue pharetra. Duis a enim viverra augue euismod commodo. Donec viverra quam vel urna elementum, sed auctor arcu porttitor. Praesent tristique risus et consequat interdum. Nunc dapibus felis id ipsum efficitur, ut ultrices arcu posuere.
</p>







</div>
</div>		
<?php
	  //ini_set('display_errors',1);
	  include ('../interim/footer.php');
	  ?>







