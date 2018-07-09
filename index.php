<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Leo");?>
    <div id="menu">
	 <ul>
	  <li><a href="#m1"><p><img src="<?=SITE_TEMPLATE_PATH?>/img/mp1.png"></p><p>Responsive Websites</p></a></li>
	  <li><a href="#m2"><p><img src="<?=SITE_TEMPLATE_PATH?>/img/mp2.png"></p><p>e Commerce Websites</p></a></li>
	  <li><a href="#m3"><p><img src="<?=SITE_TEMPLATE_PATH?>/img/mp3.png"></p><p>Daily blog Websites</p></a></li>
	  <li><a href="#m4"><p><img src="<?=SITE_TEMPLATE_PATH?>/img/mp4.png"></p><p>Search based Websites</p></a></li>
	 </ul>
	 <div id="m1">
	  <p>Содержимое первой вкладки</p>
	 </div>
	 <div id="m2">
	  <p>Содержимое второй вкладки</p>
	 </div>
	 <div id="m3">
	  <p>Содержимое третей вкладки</p>
	 </div>
	 <div id="m4">
	  <p>Содержимое четвертой вкладки</p>
	 </div>
	</div>
	<table>
	 <tr>
	  <td><img src="<?=SITE_TEMPLATE_PATH?>/img/img.png"></td>
	  <td>
	   <ul id="description">
	    <li>Lorem Ipsum is simply dummy text of the printing and typesetting</li>
		<li>Lorem Ipsum has been the industry's standard dummy text ever</li>
		<li>When an unknown printer took a galley of type and scrambled</li>
		<li>It has survived not only five centuries, but also the leap into electronic</li>
		<li>It was popularised in the 1960s with the release of Letraset sheets containing</li>
		<li>More recently with desktop publishing software like Aldus PageMaker</li>
	   </ul>	  
	  </td>
	 </tr>
	 <tr>
	  <td>
	   <form id="Member_Login">
	    <p>Member Login</p>
		<input type="text"placeholder="User name">
		<input type="text"placeholder="Password">
		<input id ="LogMeIn" type="submit" value="Log me in">
	   </form>
	  </td>
	  <td>
	   <form id="Subscribe">
	    <p>Subscribe to our weekly newsletter</p>
		<input type="text"placeholder="email address">
		<input id ="SubscribeButton" type="submit" value="Subscribe">
	   </form>
	  </td>
	 </tr>
	</table>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
