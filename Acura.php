<?php
include('includes/header-main.php');
include('includes/navbar-main.php');
?>
	<section class="cstbanner layer-overlay overlay-dark-0 overflow-hidden ">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-sm-12">
					<div class="invisible invisiblex">height</div>
				</div>
				<!--#partimagetrow0-->				
				
				<div class="bannerproduct cstbanner2 "><img alt="Acura" src="images/Acura-Rdx.jpg" alt="" /></div>
				
				<div class="col-md-6 col-sm-12 pagebannerh1in positionbottom">
					
					<h1>USED <span class="text-white fnt-big"> acura </span> OEM PARTS</h1>
					
				</div>
				<!--partimagetrow0#-->
				<div class="col-md-6 col-sm-12 divblk mt-4">
					<div class="form-block">
						<div class="form-title">
							<div class="form-titleh1">Find A Part Now</div>
						</div>
						<form id="" class="form-custom" action='part-request.php' method='post' >
							<div class="form-group row">
								<img src="images/images-arrow.png" class="arrowrequired d-none qap_make" alt="Arrow for Required" />
								<label for="make" class="col-2 col-form-label">Make <span class="text-danger">*</span></label>
								<div class="col-10">
									<select name="qap_make" id="qap_make"  class="form-control">
											<option value="">Select Make</option>
											
												<option value="AMC" >AMC</option>
											
												<option value="Acura" selected>Acura</option>
											
												<option value="Alfa-Romeo" >Alfa-Romeo</option>
											
												<option value="Audi" >Audi</option>
											
												<option value="BMW" >BMW</option>
											
												<option value="British-Leyland" >British-Leyland</option>
											
												<option value="Buick" >Buick</option>
											
												<option value="Cadillac" >Cadillac</option>
											
												<option value="Chevy" >Chevy</option>
											
												<option value="Chrysler" >Chrysler</option>
											
												<option value="Cooper" >Cooper</option>
											
												<option value="Daewoo" >Daewoo</option>
											
												<option value="Daihatsu" >Daihatsu</option>
											
												<option value="Dodge" >Dodge</option>
											
												<option value="Eagle" >Eagle</option>
											
												<option value="Fiat-Lancia" >Fiat-Lancia</option>
											
												<option value="Ford" >Ford</option>
											
												<option value="GM" >GM</option>
											
												<option value="GMC" >GMC</option>
											
												<option value="Honda" >Honda</option>
											
												<option value="Hummer" >Hummer</option>
											
												<option value="Hyundai" >Hyundai</option>
											
												<option value="Infiniti" >Infiniti</option>
											
												<option value="International" >International</option>
											
												<option value="Isuzu" >Isuzu</option>
											
												<option value="Jaguar" >Jaguar</option>
											
												<option value="Jeep" >Jeep</option>
											
												<option value="Land-Rover" >Land-Rover</option>
											
												<option value="Lexus" >Lexus</option>
											
												<option value="Lincoln" >Lincoln</option>
											
												<option value="Mazda" >Mazda</option>
											
												<option value="Mercedes-Benz" >Mercedes-Benz</option>
											
												<option value="Mercury" >Mercury</option>
											
												<option value="Mitsubishi" >Mitsubishi</option>
											
												<option value="Nissan" >Nissan</option>
											
												<option value="Oldsmobile" >Oldsmobile</option>
											
												<option value="Opel" >Opel</option>
											
												<option value="Peugeot" >Peugeot</option>
											
												<option value="Plymouth" >Plymouth</option>
											
												<option value="Pontiac" >Pontiac</option>
											
												<option value="Porsche" >Porsche</option>
											
												<option value="Renault" >Renault</option>
											
												<option value="Rover" >Rover</option>
											
												<option value="Saab" >Saab</option>
											
												<option value="Saturn" >Saturn</option>
											
												<option value="Scion" >Scion</option>
											
												<option value="Subaru" >Subaru</option>
											
												<option value="Suzuki" >Suzuki</option>
											
												<option value="Toyota" >Toyota</option>
											
												<option value="Volkswagen" >Volkswagen</option>
											
												<option value="Volvo" >Volvo</option>
											
												<option value="Yugo" >Yugo</option>
											
										</select>
								</div>
							</div>
							<div class="form-group row">
								<img src="images/images-arrow.png" class="arrowrequired d-block qap_model" alt="Arrow for Required" />
								<label for="modelid" class="col-2 col-form-label">Model <span class="text-danger">*</span></label>
								<div class="col-10">
									<select name="qap_model" id="qap_model" autofocus class="form-control">
									<option value="">Select Model</option>
									
											<option value="Acura_CL" >CL</option>
									
											<option value="Acura_CSX" >CSX</option>
									
											<option value="Acura_EL" >EL</option>
									
											<option value="Acura_ILX" >ILX</option>
									
											<option value="Acura_Integra" >Integra</option>
									
											<option value="Acura_Legend" >Legend</option>
									
											<option value="Acura_MDX" >MDX</option>
									
											<option value="Acura_NSX" >NSX</option>
									
											<option value="Acura_RDX" >RDX</option>
									
											<option value="Acura_RL" >RL</option>
									
											<option value="Acura_RLX" >RLX</option>
									
											<option value="Acura_RSX" >RSX</option>
									
											<option value="Acura_SLX" >SLX</option>
									
											<option value="Acura_TL" >TL</option>
									
											<option value="Acura_TLX" >TLX</option>
									
											<option value="Acura_TSX" >TSX</option>
									
											<option value="Acura_Vigor" >Vigor</option>
									
											<option value="Acura_ZDX" >ZDX</option>
									
										</select>
								</div>
							</div>
							<div class="form-group row">
								<img src="images/images-arrow.png" class="arrowrequired d-none qap_part" alt="Arrow for Required" />
								<label for="partid" class="col-2 col-form-label">Part <span class="text-danger">*</span></label>
								<div class="col-10">
									<select name="qap_part" id="qap_part"  class="form-control">
										<option value="">Select Part</option>

									</select>
								</div>
							</div>
							<div class="form-group row">
								<img src="images/images-arrow.png" class="arrowrequired d-none qap_year" alt="Arrow for Required" />
								<label for="yearid" class="col-2 col-form-label">Year <span class="text-danger">*</span></label>
								<div class="col-10">
									<select name="qap_year" id="qap_year"   class="form-control">
										<option value="">Select Year</option>
									
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-7 offset-md-5 col-sm-12">
									<button type="button"  name='find' id='find' class="btn btn-custom">Find My Part Now</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--#descriptiontrowmain-->
	<section class=" mt-5 mb-5">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12 col-sm-12">
					<div class="reelative"><h2 class="subtitle">Acura Used Parts - Quality Auto Parts - Buy Quality Parts for a Acura</h2></div>
					<div class="makecontent">
						<p><p><strong>Used Acura Parts</strong></p>

<p>Acura: Taking over the global automobile market</p>

<p>Acura is the most luxurious automobile marque of the Japanese vehicle producer Honda. Acura was launched in America and Canada in the year 1986, marketing performance, and luxury and high-performance vehicles. In the year 1991 it was introduced in Hong Kong, in 2004 in Mexico, in the year 2006 it was introduced in China then Russia in the year 2014 and is also sold in Ukraine. The plan of Honda to present Acura to the Japanese market was delayed in 2008 because of economic causes and later withheld as the outcomes 2008 financial crises.</p>

<p>What can you do to keep your Acura as good as new?</p>

<p>It is no coincidence that the Acura receives high ratings for safety on the highway. Not only will Acura get your family to their destination with comfort and speed, it will also offer peace of mind knowing that it has all the safety features that protects the riders if anything unexpected was to take place.</p>

<p>It is not unheard of to maintain Acura as even the fastest engineered machines need regular maintenance. You will want to ensure that your halogen fog lamps work for those riders in the tough weather and low light. The discounted <strong>used Acura parts </strong>like brake pads and water pumps and also the shocks are good to have on hand in the emergency kit. Regular inspection of the suspension components like the tie-rod ends and struts will keep your vehicle in great condition for thousands of miles and you will be confident in its road-hugging performance and handling in all kinds of conditions, whether it is city streets, backcountry roads or the freeway.</p>

<p>Cease the opportunity to<strong> buy used Acura</strong> parts from QAP</p>

<p>At Quality Auto Parts we have proven to be the best alternative to buying <strong>used Acura parts</strong> than the <strong>junkyards</strong> because of our commitment to ensuring that our customers only get to buy the best-<strong>used car parts</strong>.</p>

<p>Our <strong>online Acura parts</strong> catalogue is always accessible. Dissimilar to our competitors, we supply only the quality tested and assured <strong>Acura used parts online</strong>. Reach out to us right now if any of the <strong>auto parts</strong> of your prized possession, Acura is giving you any kind of trouble.</p>
</p> 
					</div>
				</div>
				<div class="col-md-12 col-sm-12">
					<div class="reelative"><div class="subtitle">Popular Acura Used Parts - Quality Auto Parts - Buy Quality Parts for a Acura Model</div></div>
				

					<div class="make-listpart">
						<ul>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/CL" title="CL">Acura CL</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/CSX" title="CSX">Acura CSX</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/EL" title="EL">Acura EL</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/ILX" title="ILX">Acura ILX</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Integra" title="Integra">Acura Integra</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Legend" title="Legend">Acura Legend</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/MDX" title="MDX">Acura MDX</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/NSX" title="NSX">Acura NSX</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/RDX" title="RDX">Acura RDX</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/RL" title="RL">Acura RL</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/RLX" title="RLX">Acura RLX</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/RSX" title="RSX">Acura RSX</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/SLX" title="SLX">Acura SLX</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/TL" title="TL">Acura TL</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/TLX" title="TLX">Acura TLX</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/TSX" title="TSX">Acura TSX</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Vigor" title="Vigor">Acura Vigor</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/ZDX" title="ZDX">Acura ZDX</a></li>
							
						</ul>
					</div>
				</div>
				<!--#partshidetrow-->
				<div class="col-md-12 col-sm-12">
					<div class="reelative"><div class="subtitle">Popular Acura Used Parts - Quality Auto Parts</div></div>
					<div class="make-listpart">
						<ul>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/ABS-System" title="ABS System (Anti-Lock)">Acura ABS System (Anti-Lock)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/AC-Compressor-Clutch" title="AC Compressor Clutch">Acura AC Compressor Clutch</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/AC-Evaporator" title="AC Evaporator">Acura AC Evaporator</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/AC-Selector" title="AC Selector">Acura AC Selector</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Air-Cleaner-Box" title="Air Cleaner Box">Acura Air Cleaner Box</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Air-Injection-Pump" title="Air Injection Pump">Acura Air Injection Pump</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Alternator" title="Alternator">Acura Alternator</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Automatic-Headlamp-Dimmer" title="Automatic Headlamp Dimmer">Acura Automatic Headlamp Dimmer</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Axle" title="Axle - Rear">Acura Axle - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Axle-Housing" title="Axle Housing">Acura Axle Housing</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Axle-Shaft" title="Axle Shaft">Acura Axle Shaft</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Backup-Lamp" title="Backup Lamp">Acura Backup Lamp</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Bell-Housing" title="Bell Housing">Acura Bell Housing</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Body-Control-Module" title="Body Control Module">Acura Body Control Module</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Computer" title="Brain Box (Not Engine)">Acura Brain Box (Not Engine)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Brake-Prop-Vlv" title="Brake Proportioning Valve">Acura Brake Proportioning Valve</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Bumper" title="Bumper - Rear">Acura Bumper - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/F-Bumper-Renf" title="Bumper Reinforcement - Front">Acura Bumper Reinforcement - Front</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Camera-Projector" title="Camera/Projector">Acura Camera/Projector</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Car-Window-Lifter" title="Car Window Lifter">Acura Car Window Lifter</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Carburetor" title="Carburetor">Acura Carburetor</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Carrier-Case" title="Carrier Case">Acura Carrier Case</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Clock-Spring" title="Clock Spring">Acura Clock Spring</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/MasterCylinder" title="Clutch Master Cylinder">Acura Clutch Master Cylinder</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Engine-Coil" title="Coil - Engine">Acura Coil - Engine</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Column-Shifter" title="Column Shift Lever">Acura Column Shift Lever</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Column-Switch" title="Column Switch">Acura Column Switch</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Ecu" title="Computer (Engine)">Acura Computer (Engine)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Radiator-Fan" title="Condenser Fan">Acura Condenser Fan</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Lower-Control-Arm" title="Control Arm - Lower (Front)">Acura Control Arm - Lower (Front)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Upper-Control-Arm" title="Control Arm - Upper (Front)">Acura Control Arm - Upper (Front)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Convertible-Top-Lift" title="Convertible Top Lift">Acura Convertible Top Lift</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Cooling-Fan" title="Cooling Fan">Acura Cooling Fan</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Crankshaft" title="Crankshaft">Acura Crankshaft</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Cruise-Control-Switch" title="Cruise Switch">Acura Cruise Switch</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Cylinder-Head" title="Cylinder Head">Acura Cylinder Head</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Dash-Panel" title="Dash Panel">Acura Dash Panel</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Trunk-Lid" title="Decklid">Acura Decklid</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Differential-Assembly" title="Differential Assembly">Acura Differential Assembly</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Differential-Flange" title="Differential Flange">Acura Differential Flange</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Differential-Side-Gears" title="Differential Side Gears">Acura Differential Side Gears</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Engine-Coil" title="Distributor Coil">Acura Distributor Coil</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Door-Asm" title="Door Assembly - Rear">Acura Door Assembly - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Door-Glass" title="Door Glass - Front (Side)">Acura Door Glass - Front (Side)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Door-Lock-Control-Module" title="Door Lock Control Module">Acura Door Lock Control Module</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-VentGlass" title="Door Vent Glass - Rear (Side)">Acura Door Vent Glass - Rear (Side)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Power-Window-Motor" title="Door Window Motor">Acura Door Window Motor</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Win-Reg" title="Door Window Regulator - Rear">Acura Door Window Regulator - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Drive-Shaft" title="Drive Shaft - Rear">Acura Drive Shaft - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Computer" title="ECM/ECU (Not Engine)">Acura ECM/ECU (Not Engine)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/EGR-Maintenance-Reminder" title="EGR Maintenance Reminder">Acura EGR Maintenance Reminder</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Door-Switch" title="Electrical Switch (Door)">Acura Electrical Switch (Door)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Computer" title="Electronic Control Module (Not Engine)">Acura Electronic Control Module (Not Engine)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Engine" title="Engine Assembly">Acura Engine Assembly</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Engine-Computer" title="Engine Computer">Acura Engine Computer</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Engine-Oil-Cooler" title="Engine Oil Cooler">Acura Engine Oil Cooler</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Exhaust-Manifold" title="Exhaust Manifold">Acura Exhaust Manifold</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Fan-Clutch" title="Fan Clutch">Acura Fan Clutch</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Filter-Water-Separator" title="Filter/Water Separator">Acura Filter/Water Separator</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Floor-Shift-Assembly" title="Floor Shift Assembly">Acura Floor Shift Assembly</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Fog-Light-Lever" title="Fog Light Stalk">Acura Fog Light Stalk</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Axle-I-Beam" title="Front Axle I-Beam (2WD)">Acura Front Axle I-Beam (2WD)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Bumper" title="Front Bumper">Acura Front Bumper</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Clip" title="Front Clip">Acura Front Clip</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Door-Glass" title="Front Door Glass (Side)">Acura Front Door Glass (Side)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Frnt-Vent-Glass" title="Front Door Vent Glass (Side)">Acura Front Door Vent Glass (Side)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Fender" title="Front Fender">Acura Front Fender</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Spoiler" title="Front Spoiler">Acura Front Spoiler</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Window-Lifter" title="Front Window Lifter">Acura Front Window Lifter</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Fuel-Filler-Neck" title="Fuel Filler Neck">Acura Fuel Filler Neck</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Fuel-Injection-Parts" title="Fuel Injection Parts">Acura Fuel Injection Parts</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Fuel-Pump-Control-Module" title="Fuel Pump Control Module">Acura Fuel Pump Control Module</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Fuel-Vapor-Canister" title="Fuel Vapor Canister">Acura Fuel Vapor Canister</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Glove-Box" title="Glove Box">Acura Glove Box</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Grille" title="Grille">Acura Grille</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Head-Light" title="Head Light Assembly">Acura Head Light Assembly</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Head-Light-Motor" title="Head Light Motor">Acura Head Light Motor</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Head-Light-Wiper-Motor" title="Head Light Wiper Motor">Acura Head Light Wiper Motor</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Headlamp-Washer-Motor" title="Headlamp Washer Motor">Acura Headlamp Washer Motor</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Heater-Core" title="Heater Core">Acura Heater Core</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Heater-or-Air-Conditioner-Parts-Misc" title="Heater or Air Conditioner Parts - Misc.">Acura Heater or Air Conditioner Parts - Misc.</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Hood" title="Hood">Acura Hood</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Hub-Brakes" title="Hub Brakes">Acura Hub Brakes</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Idler-Arm" title="Idler Arm">Acura Idler Arm</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Instrument-Cluster" title="Instrument Cluster">Acura Instrument Cluster</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Intercooler" title="Intercooler">Acura Intercooler</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Suspension-Crossmember" title="K-Frame">Acura K-Frame</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Knuckle-Support" title="Knuckle Support">Acura Knuckle Support</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Leaf-Spring" title="Leaf Spring - Rear">Acura Leaf Spring - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Locking-Hubs" title="Locking Hubs">Acura Locking Hubs</a></li>
							
                               <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Lower-Control-Arm" title="Lower Control Arm - Rear">Acura Lower Control Arm - Rear</a>
                             </li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Sun-Roof" title="Moon Roof">Acura Moon Roof</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Oil-Pan" title="Oil Pan">Acura Oil Pan</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Overdrive-Unit-Transmission" title="Overdrive Unit Transmission">Acura Overdrive Unit Transmission</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Pitman-Arm" title="Pitman Arm">Acura Pitman Arm</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Power-Steering-Assembly" title="Power Steering Assembly">Acura Power Steering Assembly</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Power-Steering-Pump" title="Power Steering Pump">Acura Power Steering Pump</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Power-Supply-Control-Module" title="Power Supply Control Module">Acura Power Supply Control Module</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Pressure-Plate" title="Pressure Plate">Acura Pressure Plate</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Quarter-Glass" title="Quarter Glass">Acura Quarter Glass</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Quarter-Window-Regulator-Rear" title="Quarter Window Regulator - Rear">Acura Quarter Window Regulator - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Radiator-Cooling-Fan" title="Radiator Cooling Fan">Acura Radiator Cooling Fan</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Radiator-Fan" title="Radiator Fan">Acura Radiator Fan</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Radio-Audio-Cowl" title="Radio/Audio Cowl">Acura Radio/Audio Cowl</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Axle" title="Rear Axle">Acura Rear Axle</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Bumper" title="Rear Bumper">Acura Rear Bumper</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Clip" title="Rear Clip Assembly">Acura Rear Clip Assembly</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Dr-Glass" title="Rear Door Glass (Side)">Acura Rear Door Glass (Side)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Fender" title="Rear Fender">Acura Rear Fender</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Lower-Control-Arm" title="Rear Lower Control Arm">Acura Rear Lower Control Arm</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Side-Lamp" title="Rear Side Lamp">Acura Rear Side Lamp</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-View-Mirror" title="Rear View Mirror">Acura Rear View Mirror</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Wiper-Motor" title="Rear Wiper Motor">Acura Rear Wiper Motor</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rocker-Arm" title="Rocker Arm">Acura Rocker Arm</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Sun-Roof" title="Roof Glass">Acura Roof Glass</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Turn-Signal-Control-Module" title="SAM Control Module">Acura SAM Control Module</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Seat-Control-Module" title="Seat Control Module">Acura Seat Control Module</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Seat-Track-" title="Seat Track - Front">Acura Seat Track - Front</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Shock-Absorber" title="Shock Absorber">Acura Shock Absorber</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Side-Lamp" title="Side Lamp (Rear)">Acura Side Lamp (Rear)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Speedometer-Cluster" title="Speedometer Cluster">Acura Speedometer Cluster</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Spoiler" title="Spoiler - Front">Acura Spoiler - Front</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Spring-Hanger" title="Spring Hanger">Acura Spring Hanger</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Starter-Motor" title="Starter Motor">Acura Starter Motor</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Steering-Column" title="Steering Column">Acura Steering Column</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Steering-or-Suspension-Parts-Misc" title="Steering or Suspension Parts - Misc.">Acura Steering or Suspension Parts - Misc.</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Steering-Wheel" title="Steering Wheel">Acura Steering Wheel</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Stub-Axle" title="Stub Axle - Rear">Acura Stub Axle - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Sunroof-Motor" title="Sunroof Motor">Acura Sunroof Motor</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Turbocharger" title="Supercharger">Acura Supercharger</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Suspension-Control-Module" title="Suspension Control Module">Acura Suspension Control Module</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Suspension-Trailing-Arm" title="Suspension Trailing Arm">Acura Suspension Trailing Arm</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Tachometer" title="Tachometer">Acura Tachometer</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Tail-Gate-Hinge" title="Tail Gate Hinge">Acura Tail Gate Hinge</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Tail-Gate-Window-Regulator" title="Tail Gate Windor Regulator">Acura Tail Gate Windor Regulator</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Tail-Panel" title="Tail Panel">Acura Tail Panel</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Temperature-Control-Module" title="Temperature Control Module">Acura Temperature Control Module</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Tie-Rod" title="Tie Rod">Acura Tie Rod</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Timing-Cover" title="Timing Cover">Acura Timing Cover</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Torque-Converter" title="Torque Converter">Acura Torque Converter</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Trailer-Hitch" title="Trailer Hitch">Acura Trailer Hitch</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Transfer-Case-Adapter" title="Transfer Case Adapter">Acura Transfer Case Adapter</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Transmission" title="Transmission">Acura Transmission</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Transmission-Crossmember" title="Transmission Crossmember">Acura Transmission Crossmember</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Trans-Pan" title="Transmission Pan">Acura Transmission Pan</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Trunk-Lid-Molding" title="Trunk Lid Molding">Acura Trunk Lid Molding</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Turbocharger" title="Turbocharger">Acura Turbocharger</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/GPS-Screen" title="TV Info Screen">Acura TV Info Screen</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Upper-Control-Arm" title="Upper Control Arm - Front">Acura Upper Control Arm - Front</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Vacuum-Pump" title="Vacuum Pump">Acura Vacuum Pump</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Valance" title="Valance - Rear">Acura Valance - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Voltage-Regulator" title="Voltage Regulator">Acura Voltage Regulator</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Wheel" title="Wheel">Acura Wheel</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Window-Lifter" title="Window Lifter">Acura Window Lifter</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Window-Regulator" title="Window Regulator">Acura Window Regulator</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Tail-Gate-Window-Regulator" title="Window Regulator (Tail Gate)">Acura Window Regulator (Tail Gate)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Win-Reg" title="Window Regulator - Rear">Acura Window Regulator - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Windshield-Washer-Motor" title="Windshield Washer Motor">Acura Windshield Washer Motor</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Windshield-Wiper-Arm" title="Windshield Wiper Arm">Acura Windshield Wiper Arm</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Front-Wiper-Motor" title="Wiper Motor (Windshield)">Acura Wiper Motor (Windshield)</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/Rear-Wiper-Motor" title="Wiper Motor - Rear">Acura Wiper Motor - Rear</a></li>
							
							   <li class="popularpdtamc" ><img src="images/images-pointblue.png" alt=""><a href="Acura/" title="">Acura </a></li>
							
						</ul>
					</div>
				</div>
				<!--partshidetrow#-->
			</div>
		</div>
	</section>
	<!--descriptiontrowmain#-->
		<section class="bgblue contactdivft">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12">
					<div class="ctnumb">
						<div class="ctnumbh1">FIND YOUR ORDERS?</div>
						<h2><a href="tel:1-888-418-3631">1-866-293-3731</a></h2>
					</div>
				</div>
				<div class="col-md-3 col-sm-9">
				<a class="btn btn-custom mt-4 d-none " href='partrequest.php' >Find My Part Now</a>
				<a href='https://www.findjunkyard.com' class=' d-none'></a>
				</div>
			</div>
		</div>
    </section>

	<script>
				var year = 1900;
var till = 2020;
var options = "";
for(var y=year; y<=till; y++){
  options += "<option>"+ y +"</option>";
}
</script>
	<?php
include('includes/footer-main.php');
?>
