<html style="width: 100%; height: 100%; border: 0; margin: 0">
	<body style="width: 100%; height: 100%; border: 0; margin: 0">
		<table style="width: 100%; height: 100%; border-spacing: 0; border: 3px none blue; background-color: #3F1111; color: silver;">
			<tr>
			  <td style="width: 10%; border: 2px none orange; height: 10%; background-color: #2a0000; color: #C0C0C0; font-size: 0px;">&nbsp;</td>
			  <td colspan="2" style="width: 45%; border: 2px none orange; height: 80px; background-color: #2a0000; color: #C0C0C0; font-size: 60px;">New Search</td>
		  </tr>
			<tr>																			<!-- header ---->	
				<!--<td colspan="3" style="width: 100$; border: 2px dashed orange; height:10%;">-->
				<td valign="top"><br>
				  <a href="index.html" style="text-decoration : none; color : silver;">Home</a><br>
                  <a><u>New Search</u></a><br>
																							<!-- /leftSidebar-->
				<td style="width: 45%; border: 2px none orange; height: 100%; background-color: #3F0000; color: #C0C0C0;">			<!-- bodyLeft ----->

					<b>Search Fields</b><br></br>
					<form action="display_data_php.php" method="get">
						<b>Start Time</b>
						<input type="date" name="start" min="2012-01-01" max="2012-06-30"><br></br>
						<b>Hour</b>
						<select name="hour_start">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
						</select>
						<!-- end hour_start -->
						<b>Minute</b>
						<select name="minute_start">
						  <option value="0">0</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="10">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						  <option value="13">13</option>
						  <option value="14">14</option>
						  <option value="15">15</option>
						  <option value="16">16</option>
						  <option value="17">17</option>
						  <option value="18">18</option>
						  <option value="19">19</option>
						  <option value="20">20</option>
						  <option value="21">21</option>
						  <option value="22">22</option>
						  <option value="23">23</option>
						  <option value="24">24</option>
						  <option value="25">25</option>
						  <option value="26">26</option>
						  <option value="27">27</option>
						  <option value="28">28</option>
						  <option value="29">29</option>
						  <option value="30">30</option>
						  <option value="31">31</option>
						  <option value="32">32</option>
						  <option value="33">33</option>
						  <option value="34">34</option>
						  <option value="35">35</option>
						  <option value="36">36</option>
						  <option value="37">37</option>
						  <option value="38">38</option>
						  <option value="39">39</option>
						  <option value="40">40</option>
						  <option value="41">41</option>
						  <option value="42">42</option>
						  <option value="43">43</option>
						  <option value="44">44</option>
						  <option value="45">45</option>
						  <option value="46">46</option>
						  <option value="47">47</option>
						  <option value="48">48</option>
						  <option value="49">49</option>
						  <option value="50">50</option>
						  <option value="51">51</option>
						  <option value="52">52</option>
						  <option value="53">53</option>
						  <option value="54">54</option>
						  <option value="55">55</option>
						  <option value="56">56</option>
						  <option value="57">57</option>
						  <option value="58">58</option>
						  <option value="59">59</option>
						</select>
						<!-- end minute_start -->
						<br></br><br></br>
						<b>End Time</b>
						<input type="date" name="end" min="2012-01-01" max="2012-06-30"><br></br>
						<b>Hour</b>
						<select name="hour_end">
						  <option value="0">0</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="10">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						  <option value="13">13</option>
						  <option value="14">14</option>
						  <option value="15">15</option>
						  <option value="16">16</option>
						  <option value="17">17</option>
						  <option value="18">18</option>
						  <option value="19">19</option>
						  <option value="20">20</option>
						  <option value="21">21</option>
						  <option value="22">22</option>
						  <option value="23">23</option>
						</select>
						<!-- end hour_end -->
						<b>Minute</b>
						<select name="minute_end">
						  <option value="0">0</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="10">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						  <option value="13">13</option>
						  <option value="14">14</option>
						  <option value="15">15</option>
						  <option value="16">16</option>
						  <option value="17">17</option>
						  <option value="18">18</option>
						  <option value="19">19</option>
						  <option value="20">20</option>
						  <option value="21">21</option>
						  <option value="22">22</option>
						  <option value="23">23</option>
						  <option value="24">24</option>
						  <option value="25">25</option>
						  <option value="26">26</option>
						  <option value="27">27</option>
						  <option value="28">28</option>
						  <option value="29">29</option>
						  <option value="30">30</option>
						  <option value="31">31</option>
						  <option value="32">32</option>
						  <option value="33">33</option>
						  <option value="34">34</option>
						  <option value="35">35</option>
						  <option value="36">36</option>
						  <option value="37">37</option>
						  <option value="38">38</option>
						  <option value="39">39</option>
						  <option value="40">40</option>
						  <option value="41">41</option>
						  <option value="42">42</option>
						  <option value="43">43</option>
						  <option value="44">44</option>
						  <option value="45">45</option>
						  <option value="46">46</option>
						  <option value="47">47</option>
						  <option value="48">48</option>
						  <option value="49">49</option>
						  <option value="50">50</option>
						  <option value="51">51</option>
						  <option value="52">52</option>
						  <option value="53">53</option>
						  <option value="54">54</option>
						  <option value="55">55</option>
						  <option value="56">56</option>
						  <option value="57">57</option>
						  <option value="58">58</option>
						  <option value="59">59</option>
						</select>
						<!-- end minute_end -->
						
							<br><br> <br><b>Channel Number</b><br>
							<input type="radio" name="channel" value="131" checked="checked">Channel 131<br>
							<input type="radio" name="channel" value="193">Channel 193<br>
							<br></br>
						
				</td>																		
																									<!-- /bodyLeft ---->
						<td style="width: 45%; border: 2px none orange; height: 100%; color: #C0C0C0; background-color: #3f0000;">			<p>
						<!-- bodyRight ----->

							<b>Shown Events</b><br>
							<input type="checkbox" name="event_ar" value="ar">Active Region<br>
							<input type="checkbox" name="event_ch" value="ch">Coronal Hole<br>
							<input type="checkbox" name="event_fi" value="fi">Filament<br>
							<input type="checkbox" name="event_fl" value="fl">Flare<br>
							<input type="checkbox" name="event_sg" value="sg">Sigmoid<br>
							<input type="checkbox" name="event_ss" value="ss">Sunspot<br>

							<br>
											  
							<b>Measurement Type</b><br>
							<input type="radio" name="measurement" value="Entropy">Entropy<br>
							<input type="radio" name="measurement" value="Mean">Mean<br>
							<input type="radio" name="measurement" value="StandardDeviation">Std. Deviation<br>
							<input type="radio" name="measurement" value="FractalDimension">Fractal Dim.<br>
							<input type="radio" name="measurement" value="Skewness">Skewness<br>
							<input type="radio" name="measurement" value="Kurtosis">Kurtosis<br>
							<input type="radio" name="measurement" value="Uniformity">Uniformity<br>
							<input type="radio" name="measurement" value="RelativeSmoothness">Rel. Smoothness<br>
							<input type="radio" name="measurement" value="TContrast">T. Contrast<br>
							<input type="radio" name="measurement" value="TDirectionality">T. Directionality<br>
							<input type="radio" name="measurement" value="Raw">Raw data<br>
							<input type="radio" name="measurement" value="None" checked="checked">None<br>
							<br></br>
							
							<input type="submit">
						  
						
						</script>
					</form>
                  
				  <input type="hidden" name="error_message" value="error">
				  </p>
				</td>																							
			</tr>																			<!-- /bodyRight ---->																
			<!---------------------------------------------------------------------------------------------->
			<tr>																			<!-- footer --->
				<td colspan="3" style="border: 2px none brown; color: #C0C0C0; background-color: #2a0000;">
					Brendan Burns, David Bell, David Miller, Joshua Leger <br> Solar Sailors
				</td>
			</tr>																			
																							<!-- /footer -->																									
			<!---------------------------------------------------------------------------------------------->		
			
		</table>
	</body>
</html>
