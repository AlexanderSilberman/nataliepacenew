
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Games</title>
<link rel="stylesheet" type="text/css" href="../stylesheet.css" />

         <?php
		 
		 	include '../includes/quizgamesql.php';
		 	include "../includes/navbar.php";
			
		 ?>

</head>

<body id = "game">


<div id = "outercontainer">
	

<br style = "clear:both;"/>
<aside id = "sidebar">
<div id="companyresearch"> 
    
    	<p> <h2>Company Research </h2></p>
    <p id="sidebartext"> Search Any Company's Stock Quote!</p>
    	<input type= "text" placeholder="e.g. AAPL" />
    	<input type="submit" value="Research" class="submitbutton" />
    
    	<br />
    	
   		</div>
    
    <br style ="clear:both;"/>
    <br />
    <span id="asknatalie">Ask Natalie:</span>
	<div id="twitter"> 
    
    	<a class="twitter-timeline" href="https://twitter.com/NataliePace" data-widget-id="442425881982533632">Tweets by @NataliePace</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


        
    </div>  
</aside>


<div id="main">

    <div id="thrivebudgettitle"> Thrive Budget Game</div>
    <div id="billionairetitle"> Leader Boards</div>
    
    <div style ="clear:both;"/> </div>
    
	<div id="thrivebudget"> 
    <a href="/BillionaireBootcamp/billionairesite/games/thrivebudget.php"><img src="thrivebudget.PNG" class="gameplaceholderimage" /></a>
    </div>
	
    <div style="clear:both" /> </div>

    <table id="thriveleaderboard"> 
    	<tr>
              <th>Rank</th>
              <th>Last Name</th> 
              <th>Points</th>
              <th>Date</th>
		</tr>
        
    	<tr>
        	<td class="tablerank">1</td>
            <td>jsmith</td>
            <td>100 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">2</td>
            <td>jsmith</td>
            <td>97 pts</td>
			<td>3/10/14</td>
        </tr>
        
        	<tr>
        	<td class="tablerank">3</td>
            <td>jsmith</td>
            <td>95 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">4</td>
            <td>jsmith</td>
            <td>90 pts</td>
			<td>3/10/14</td>
        </tr>
        
          <tr>
        	<td class="tablerank">5</td>
            <td>jsmith</td>
            <td>85 pts</td>
			<td>3/10/14</td>
        </tr>
        
          <tr>
        	<td class="tablerank">6</td>
            <td>jsmith</td>
            <td>80 pts</td>
			<td>3/10/14</td>
        </tr>
        
           <tr>
        	<td class="tablerank">7</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">8</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">9</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">10</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
    </table>
	
    <br />
    
    <div id="popularcontenttitle"> Billionaire Trivia</div>
    <div id="billionairetitle"> Leader Boards</div>
    <div style="clear:both" /> </div>
    
    <div id="thrivebudget"> 
   <a href="/BillionaireBootcamp/billionairesite/games/billionairetrivia.php">	<img src="billionairetrivia.jpeg" class="gameplaceholderimage" /></a>

    </div>
    
	<div id = "trivialeaderboard">
	<?php
	
	
	$i = 0;
	$count = 1;
	$colors = array('scorerow1','scorerow1 green');
	
	echo "<strong><div class = 'scorerow1 white'><div class = 'count1'>Rank</div><div class = 'nickname1'> Name </div><div class = 'score1'>Score</div><div class = 'timestamp1'>Date</div></div></strong><br/>";
	
	while ($row = mysql_fetch_array($results)){
		echo "<div class = '" . $colors[$i++ % 2] . "'><div class = 'count1'>". $count++ . ".</div><div class = 'nickname1'> ". $row["user_name"] .  "</div><div class = 'score1'>" . $row["score"] . "</div><div class = 'timestamp1'>" . date('m/j/y ',strtotime($row["score_time"])) . "</div></div><br/>";
		
	}
	
	
	
	
	?>
	
	</div>
   <!-- <table id="trivialeaderboard"> 
	<tr>
              <th>Rank</th>
              <th>Last Name</th> 
              <th>Points</th>
              <th>Date</th>
		</tr>
        
    	<tr>
        	<td class="tablerank">1</td>
            <td>jsmith</td>
            <td>100 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">2</td>
            <td>jsmith</td>
            <td>97 pts</td>
			<td>3/10/14</td>
        </tr>
        
        	<tr>
        	<td class="tablerank">3</td>
            <td>jsmith</td>
            <td>95 pts</td>
			<td>3/10/14</td>
        </tr>
        
        <tr>
        	<td class="tablerank">4</td>
            <td>jsmith</td>
            <td>90 pts</td>
			<td>3/10/14</td>
        </tr>
        
          <tr>
        	<td class="tablerank">5</td>
            <td>jsmith</td>
            <td>85 pts</td>
			<td>3/10/14</td>
        </tr>
        
          <tr>
        	<td class="tablerank">6</td>
            <td>jsmith</td>
            <td>80 pts</td>
			<td>3/10/14</td>
        </tr>
        
           <tr>
        	<td class="tablerank">7</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
         <tr>
        	<td class="tablerank">8</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
         <tr>
        	<td class="tablerank">9</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
        
         <tr>
        	<td class="tablerank">10</td>
            <td>jsmith</td>
            <td>75 pts</td>
			<td>3/10/14</td>
        </tr>
    </table> ---->

</div>

</div>
    <div style="clear:both" /> </div>

<div id="footer">

    <div id="bottom">
    	<a href="http://www.nataliepace.com" id="footerlefttext">NataliePace.com</a>
        <span id="footerrightttext">© Billionaire Bootcamp</span>
    </div>
    
</div>




</body>
</html>
