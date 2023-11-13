
	<section class="ftco-section" id="about">
<div class="container">
			
			<div class="row">
				<div class="col-md-9">
					<img src="<?php echo base_url('uploads/homepage/').$homepage->homepage_banner_image;?>" class="img-fluid" alt="">
				</div>

<div class="col-md-3 heading-section ftco-animate fadeInUp ftco-animated">
					<h2 class="mb-4"><?php echo $homepage->homepage_right_banner_heading;?></h2>
					<p><?php echo $homepage->homepage_right_banner_text;?></p>
				</div>
				<div class="col-md-12">
					<div class="services-2">
						<div class="text">
							<h3 class="text-center"><?php echo $homepage->homepage_section_one_heading;?></h3>
							<?php if(!empty($assets)):?>
							<ul class="p-0">
								<?php foreach($assets as $assets_name_row):?>
								<li><?php echo $assets_name_row['assets_name'];?></li>
								<?php endforeach;?>
							</ul>	
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img" id="section-counter">
		<div class="container">
			<div class="row no-gutters d-flex">
				<div class="col-md-6 d-flex">
					<div class="img d-flex align-self-stretch" style="background-image:url(<?php echo base_url('uploads/homepage/').$homepage->homepage_section_two_column_one_image;?>);"></div>
				</div>
				<div class="col-md-6 p-3 pl-md-5 py-5 bg-primary">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section heading-section-white ftco-animate">
							<h2 class="mb-4"><?php echo $homepage->homepage_section_two_column_two_heading;?></h2>
							<p><?php echo $homepage->homepage_section_two_column_two_text;?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
							<div class="block-18 mb-4">
								<div class="text">
									<strong class="number" data-number="<?php echo $homepage->homepage_section_two_column_two_left_number_one;?>"><?php echo $homepage->homepage_section_two_column_two_left_number_one;?></strong>
									<span><?php echo $homepage->homepage_section_two_column_two_left_text_one;?></span>
								</div>
							</div>
						</div>
						<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
							<div class="block-18 mb-4">
								<div class="text">
									<strong class="number" data-number="<?php echo $homepage->homepage_section_two_column_two_left_number_two;?>"><?php echo $homepage->homepage_section_two_column_two_left_number_two;?></strong>
									<span><?php echo $homepage->homepage_section_two_column_two_left_text_two;?></span>
								</div>
							</div>
						</div>
						<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
							<div class="block-18 mb-4">
								<div class="text">
									<strong class="number" data-number="<?php echo $homepage->homepage_section_two_column_two_left_number_three;?>"><?php echo $homepage->homepage_section_two_column_two_left_number_three;?></strong>
									<span><?php echo $homepage->homepage_section_two_column_two_left_text_three;?></span>
								</div>
							</div>
						</div>
						<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
							<div class="block-18 mb-4">
								<div class="text">
									<strong class="number" data-number="<?php echo $homepage->homepage_section_two_column_two_left_number_four;?>"><?php echo $homepage->homepage_section_two_column_two_left_number_four;?></strong>
									<span><?php echo $homepage->homepage_section_two_column_two_left_text_four;?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section services-section" id="platforms">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-6 heading-section text-center ftco-animate">
					<h2 class="mb-4"><?php echo $homepage->homepage_section_three_heading;?></h2>
				</div>
			</div>
			<?php if(!empty($solution)):?>
			<div class="row d-flex no-gutters">
				<?php foreach($solution as $solution_row):?>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="line"></div>
						<div class="icon"><img width="62"  class="mb-2" src="<?php echo base_url('uploads/solution/').$solution_row['solution_icon'];?>"></div>
						<div class="media-body">
							<h3 class="heading mb-3"><?php echo $solution_row['solution_heading'];?></h3>
							<p><?php echo $solution_row['solution_text'];?></p>
						</div>
					</div>      
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4"><?php echo $homepage->homepage_section_four_heading;?></h2>
				</div>
			</div>
			<?php if(!empty($solution)):?>
			<div class="row">
				<?php foreach($work as $work_row):?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<div class="img">
							<img src="<?php echo base_url('uploads/work/').$work_row['work_image'];?>" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text text-center">
							<span><?php echo $work_row['work_small_heading'];?></span>
							<h3><a href="project.html"><?php echo $work_row['work_text'];?></a></h3>
						</div>
						<a href="<?php echo base_url('uploads/work/').$work_row['work_image'];?>" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
				<?php endforeach;?>
			</div>			
			<?php endif;?>
		</div>
	</section>

	<section class="ftco-section bg-light ftco-faqs" id="faqs">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 order-md-last">
					<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(<?php echo base_url('uploads/homepage/').$homepage->homepage_section_five_image;?>);">
					</div>
				</div>

				<div class="col-lg-6">
					<div class="heading-section mb-5 mt-5 mt-lg-0">
						<h2 class="mb-3"><?php echo $homepage->homepage_section_five_heading;?></h2>
					</div>

					<?php if(!empty($faq)):?>
					<div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
						<?php $i = 0;foreach($faq as $faq_row):?>
						<div class="card">
							<div class="card-header p-0" id="heading<?php echo $i;?>" role="tab">
								<h2 class="mb-0">
									<button href="#collapse<?php echo $i;?>" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapse<?php echo $i;?>">
										<p class="mb-0"><?php echo $faq_row['faq_question'];?></p>
										<i class="fa" aria-hidden="true"></i>
									</button>
								</h2>
							</div>
							<div class="collapse" id="collapse<?php echo $i;?>" role="tabpanel" aria-labelledby="heading<?php echo $i;?>">
								<div class="card-body py-3 px-0">
									<?php echo $faq_row['faq_answer'];?>
								</div>
							</div>
						</div>
						<?php $i++;endforeach;?>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>
	</section>
	

	<!--section class="ftco-section ftco-no-pb testimony-section" style="background-image: url(<?php echo FRONT_ASSETS;?>images/bg_3.jpg);" id="customers">
		<div class="overlay-1"></div>
		<div class="container-fluid">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<h2 class="mb-4">Our Happy Clients</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12 testimonial">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap d-flex align-items-stretch" style="background-image: url(<?php echo FRONT_ASSETS;?>images/testimony-1.jpg);">
								<div class="overlay"></div>
								<div class="text">
									<div class="line"></div>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Donna Scott</p>
									<span class="position">Marketing Manager</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex align-items-stretch" style="background-image: url(<?php echo FRONT_ASSETS;?>images/testimony-2.jpg);">
								<div class="overlay"></div>
								<div class="text">
									<div class="line"></div>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">Interface Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex align-items-stretch" style="background-image: url(<?php echo FRONT_ASSETS;?>images/testimony-3.jpg);">
								<div class="overlay"></div>
								<div class="text">
									<div class="line"></div>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">UI Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex align-items-stretch" style="background-image: url(<?php echo FRONT_ASSETS;?>images/testimony-4.jpg);">
								<div class="overlay"></div>
								<div class="text">
									<div class="line"></div>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">Web Developer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex align-items-stretch" style="background-image: url(<?php echo FRONT_ASSETS;?>images/testimony-5.jpg);">
								<div class="overlay"></div>
								<div class="text">
									<div class="line"></div>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">System Analyst</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section-->

	<!--section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2>Read our latest blog</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20" style="background-image: url('<?php echo FRONT_ASSETS;?>images/image_1.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center pt-2 mb-4 topp">
								<div class="one">
									<span class="day">29</span>
								</div>
								<div class="two pl-1">
									<span class="yr">2020</span>
									<span class="mos">June</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20" style="background-image: url('<?php echo FRONT_ASSETS;?>images/image_2.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center pt-2 mb-4 topp">
								<div class="one">
									<span class="day">29</span>
								</div>
								<div class="two pl-1">
									<span class="yr">2020</span>
									<span class="mos">June</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('<?php echo FRONT_ASSETS;?>images/image_3.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center pt-2 mb-4 topp">
								<div class="one">
									<span class="day">29</span>
								</div>
								<div class="two pl-1">
									<span class="yr">2020</span>
									<span class="mos">June</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section-->	
	<section class="ftco-section img" id="getstarted">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 half ftco-animate">
					<h2 class="mb-4"><?php echo $homepage->homepage_section_six_left_heading; ?></h2>
					<form action="<?php echo base_url();?>" class="appointment" method="POST">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" data-validation="required" placeholder="First Name" name="demo_request_first_name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" data-validation="required" placeholder="Last Name" name="demo_request_last_name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" data-validation="required email" placeholder="Business Email" name="demo_request_business_email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" data-validation="required" placeholder="Phone Number" name="demo_request_phone_number">
								</div>
							</div>	
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" data-validation="required" placeholder="Organization Name" name="demo_request_organization_name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="demo_request_job_title" id="" class="form-control" data-validation="required">
												<option value="">Job Tittle</option>
												<option value="">CIO</option>
                                                <option>CISO</option>
                                                <option>CEO</option>
                                                <option>CTO</option>
                                                <option>C-Level</option>
                                                <option>Architect</option>
                                                <option>Developer/Engineer</option>
                                                <option>IT Manager</option>
                                                <option>Cyber Security</option>
                                                <option>DevOps</option>
                                                <option>System Administrator</option>
                                                <option>Vice President</option>
                                                <option>Director</option>
                                            </select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="demo_request_industry" id="" class="form-control" data-validation="required">
												<option value="">Industry</option>
                                                <option value="Accounting	">Accounting	</option>
                                                <option value="Airlines/Aviation	">Airlines/Aviation	</option>
                                                <option value="Alternative Dispute Resolution	">Alternative Dispute Resolution	</option>
                                                <option value="Alternative Medicine	">Alternative Medicine	</option>
                                                <option value="Animation	">Animation	</option>
                                                <option value="Apparel/Fashion	">Apparel/Fashion	</option>
                                                <option value="Architecture/Planning	">Architecture/Planning	</option>
                                                <option value="Arts/Crafts	">Arts/Crafts	</option>
                                                <option value="Automotive	">Automotive	</option>
                                                <option value="Aviation/Aerospace	">Aviation/Aerospace	</option>
                                                <option value="Banking/Mortgage	">Banking/Mortgage	</option>
                                                <option value="Biotechnology/Greentech	">Biotechnology/Greentech	</option>
                                                <option value="Broadcast Media	">Broadcast Media	</option>
                                                <option value="Building Materials	">Building Materials	</option>
                                                <option value="Business Supplies/Equipment	">Business Supplies/Equipment	</option>
                                                <option value="Capital Markets/Hedge Fund/Private Equity	">Capital Markets/Hedge Fund/Private Equity	</option>
                                                <option value="Chemicals	">Chemicals	</option>
                                                <option value="Civic/Social Organization	">Civic/Social Organization	</option>
                                                <option value="Civil Engineering	">Civil Engineering	</option>
                                                <option value="Commercial Real Estate	">Commercial Real Estate	</option>
                                                <option value="Computer Games	">Computer Games	</option>
                                                <option value="Computer Hardware	">Computer Hardware	</option>
                                                <option value="Computer Networking	">Computer Networking	</option>
                                                <option value="Computer Software/Engineering	">Computer Software/Engineering	</option>
                                                <option value="Computer/Network Security	">Computer/Network Security	</option>
                                                <option value="Construction	">Construction	</option>
                                                <option value="Consumer Electronics	">Consumer Electronics	</option>
                                                <option value="Consumer Goods	">Consumer Goods	</option>
                                                <option value="Consumer Services	">Consumer Services	</option>
                                                <option value="Cosmetics	">Cosmetics	</option>
                                                <option value="Dairy	">Dairy	</option>
                                                <option value="Defense/Space	">Defense/Space	</option>
                                                <option value="Design	">Design	</option>
                                                <option value="E-Learning	">E-Learning	</option>
                                                <option value="Education Management	">Education Management	</option>
                                                <option value="Electrical/Electronic Manufacturing	">Electrical/Electronic Manufacturing	</option>
                                                <option value="Entertainment/Movie Production	">Entertainment/Movie Production	</option>
                                                <option value="Environmental Services	">Environmental Services	</option>
                                                <option value="Events Services	">Events Services	</option>
                                                <option value="Executive Office	">Executive Office	</option>
                                                <option value="Facilities Services	">Facilities Services	</option>
                                                <option value="Farming	">Farming	</option>
                                                <option value="Financial Services	">Financial Services	</option>
                                                <option value="Fine Art	">Fine Art	</option>
                                                <option value="Fishery	">Fishery	</option>
                                                <option value="Food Production	">Food Production	</option>
                                                <option value="Food/Beverages	">Food/Beverages	</option>
                                                <option value="Fundraising	">Fundraising	</option>
                                                <option value="Furniture	">Furniture	</option>
                                                <option value="Gambling/Casinos	">Gambling/Casinos	</option>
                                                <option value="Glass/Ceramics/Concrete	">Glass/Ceramics/Concrete	</option>
                                                <option value="Government Administration	">Government Administration	</option>
                                                <option value="Government Relations	">Government Relations	</option>
                                                <option value="Graphic Design/Web Design	">Graphic Design/Web Design	</option>
                                                <option value="Health/Fitness	">Health/Fitness	</option>
                                                <option value="Higher Education/Acadamia	">Higher Education/Acadamia	</option>
                                                <option value="Hospital/Health Care	">Hospital/Health Care	</option>
                                                <option value="Hospitality	">Hospitality	</option>
                                                <option value="Human Resources/HR	">Human Resources/HR	</option>
                                                <option value="Import/Export	">Import/Export	</option>
                                                <option value="Individual/Family Services	">Individual/Family Services	</option>
                                                <option value="Industrial Automation	">Industrial Automation	</option>
                                                <option value="Information Services	">Information Services	</option>
                                                <option value="Information Technology/IT	">Information Technology/IT	</option>
                                                <option value="Insurance	">Insurance	</option>
                                                <option value="International Affairs	">International Affairs	</option>
                                                <option value="International Trade/Development	">International Trade/Development	</option>
                                                <option value="Internet	">Internet	</option>
                                                <option value="Investment Banking/Venture	">Investment Banking/Venture	</option>
                                                <option value="Investment Management/Hedge Fund/Private Equity	">Investment Management/Hedge Fund/Private Equity	</option>
                                                <option value="Judiciary	">Judiciary	</option>
                                                <option value="Law Enforcement	">Law Enforcement	</option>
                                                <option value="Law Practice/Law Firms	">Law Practice/Law Firms	</option>
                                                <option value="Legal Services	">Legal Services	</option>
                                                <option value="Legislative Office	">Legislative Office	</option>
                                                <option value="Leisure/Travel	">Leisure/Travel	</option>
                                                <option value="Library	">Library	</option>
                                                <option value="Logistics/Procurement	">Logistics/Procurement	</option>
                                                <option value="Luxury Goods/Jewelry	">Luxury Goods/Jewelry	</option>
                                                <option value="Machinery	">Machinery	</option>
                                                <option value="Management Consulting	">Management Consulting	</option>
                                                <option value="Maritime	">Maritime	</option>
                                                <option value="Market Research	">Market Research	</option>
                                                <option value="Marketing/Advertising/Sales	">Marketing/Advertising/Sales	</option>
                                                <option value="Mechanical or Industrial Engineering	">Mechanical or Industrial Engineering	</option>
                                                <option value="Media Production	">Media Production	</option>
                                                <option value="Medical Equipment	">Medical Equipment	</option>
                                                <option value="Medical Practice	">Medical Practice	</option>
                                                <option value="Mental Health Care	">Mental Health Care	</option>
                                                <option value="Military Industry	">Military Industry	</option>
                                                <option value="Mining/Metals	">Mining/Metals	</option>
                                                <option value="Motion Pictures/Film	">Motion Pictures/Film	</option>
                                                <option value="Museums/Institutions	">Museums/Institutions	</option>
                                                <option value="Music	">Music	</option>
                                                <option value="Nanotechnology	">Nanotechnology	</option>
                                                <option value="Newspapers/Journalism	">Newspapers/Journalism	</option>
                                                <option value="Non-Profit/Volunteering	">Non-Profit/Volunteering	</option>
                                                <option value="Oil/Energy/Solar/Greentech	">Oil/Energy/Solar/Greentech	</option>
                                                <option value="Online Publishing	">Online Publishing	</option>
                                                <option value="Other Industry	">Other Industry	</option>
                                                <option value="Outsourcing/Offshoring	">Outsourcing/Offshoring	</option>
                                                <option value="Package/Freight Delivery	">Package/Freight Delivery	</option>
                                                <option value="Packaging/Containers	">Packaging/Containers	</option>
                                                <option value="Paper/Forest Products	">Paper/Forest Products	</option>
                                                <option value="Performing Arts	">Performing Arts	</option>
                                                <option value="Pharmaceuticals	">Pharmaceuticals	</option>
                                                <option value="Philanthropy	">Philanthropy	</option>
                                                <option value="Photography	">Photography	</option>
                                                <option value="Plastics	">Plastics	</option>
                                                <option value="Political Organization	">Political Organization	</option>
                                                <option value="Primary/Secondary Education	">Primary/Secondary Education	</option>
                                                <option value="Printing	">Printing	</option>
                                                <option value="Professional Training	">Professional Training	</option>
                                                <option value="Program Development	">Program Development	</option>
                                                <option value="Public Relations/PR	">Public Relations/PR	</option>
                                                <option value="Public Safety	">Public Safety	</option>
                                                <option value="Publishing Industry	">Publishing Industry	</option>
                                                <option value="Railroad Manufacture	">Railroad Manufacture	</option>
                                                <option value="Ranching	">Ranching	</option>
                                                <option value="Real Estate/Mortgage	">Real Estate/Mortgage	</option>
                                                <option value="Recreational Facilities/Services	">Recreational Facilities/Services	</option>
                                                <option value="Religious Institutions	">Religious Institutions	</option>
                                                <option value="Renewables/Environment	">Renewables/Environment	</option>
                                                <option value="Research Industry	">Research Industry	</option>
                                                <option value="Restaurants	">Restaurants	</option>
                                                <option value="Retail Industry	">Retail Industry	</option>
                                                <option value="Security/Investigations	">Security/Investigations	</option>
                                                <option value="Semiconductors	">Semiconductors	</option>
                                                <option value="Shipbuilding	">Shipbuilding	</option>
                                                <option value="Sporting Goods	">Sporting Goods	</option>
                                                <option value="Sports	">Sports	</option>
                                                <option value="Staffing/Recruiting	">Staffing/Recruiting	</option>
                                                <option value="Supermarkets	">Supermarkets	</option>
                                                <option value="Telecommunications	">Telecommunications	</option>
                                                <option value="Textiles	">Textiles	</option>
                                                <option value="Think Tanks	">Think Tanks	</option>
                                                <option value="Tobacco	">Tobacco	</option>
                                                <option value="Translation/Localization	">Translation/Localization	</option>
                                                <option value="Transportation	">Transportation	</option>
                                                <option value="Utilities	">Utilities	</option>
                                                <option value="Venture Capital/VC	">Venture Capital/VC	</option>
                                                <option value="Veterinary	">Veterinary	</option>
                                                <option value="Warehousing	">Warehousing	</option>
                                                <option value="Wholesale	">Wholesale	</option>
                                                <option value="Wine/Spirits	">Wine/Spirits	</option>
                                                <option value="Wireless	">Wireless	</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="demo_request_size_of_organization" id="" class="form-control" data-validation="required">
												<option value="">Size of Organization</option>
                                                <option>1-20 Employees</option>
                                                <option>20-50</option>
                                                <option>50-100</option>
                                                <option>100-500</option>
                                                <option>500-1000</option>
                                                <option>1000+</option>
                                            </select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="demo_request_country" id="" class="form-control" data-validation="required">
												<option value="">Country</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Antigua & Deps">Antigua & Deps</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina">Burkina</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Central African Rep">Central African Rep</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo {Democratic Rep}">Congo {Democratic Rep}</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland {Republic}">Ireland {Republic}</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Ivory Coast">Ivory Coast</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea North">Korea North</option>
                                                <option value="Korea South">Korea South</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">Micronesia</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar, {Burma}">Myanmar, {Burma}</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="St Kitts & Nevis">St Kitts & Nevis</option>
                                                <option value="St Lucia">St Lucia</option>
                                                <option value="Saint Vincent & the Grenadines">Saint Vincent & the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City">Vatican City</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Request a demo" class="btn btn-primary py-3 px-4">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6 heading-section ftco-animate">
					<h2 class="mb-0"><?php echo $homepage->homepage_section_six_heading; ?></h2>
					<?php echo $homepage->homepage_section_six_text; ?>
				</div>
			</div>
		</div>
	</section>
