<body>


		<!-- Header -->
			<section id="header" class="inner" style="height: 300px;">
                
                                           
                    	<div id="log-frm">                    		 
                    		<?php if($this->session->userdata('username')){
				          						foreach ($alumnos->result() as $datos) {
											  ?>
											<div id="frm">
                							<div id='div-logout' class="inner">
                							<?php echo form_open('home'); ?>
											<img id='img-1' width="150" height="150" src="<?php echo base_url(); echo 'uploads/'. $datos->ruta; ?>" class="img-circle">	
											<br>
											<input id="btn_logout" name="btn-logout" type="submit" class="btn btn-primary" value="Logout" >
											<?php echo form_close(); ?>
											</div>
											</div>
										<?php }}else { ?>                    		
                			<div id="frm" >
                				<div id='div-logout' class="inner">                					
				                	 <div id="form_input">
										<?php

										// Form Open
										echo form_open();

										// Name Field
										
										$data_name = array(
										'name' => 'name',
										'class' => 'input_box',
										'placeholder' => 'Please Enter Name',
										'id' => 'name'
										);
										echo form_input($data_name);
										echo "<br>";
										echo "<br>";

										// Password Field
										
										$data_name = array(
										'type' => 'password',
										'name' => 'pwd',
										'class' => 'input_box',
										'placeholder' => '',
										'id' => 'pwd'
										);
										echo form_input($data_name);
										?>
										</div>
										<div id="form_button">
										<?php echo form_submit('submit', 'Login', "class='submit'"); ?>
										<br>
										<?php echo $this->session->flashdata('msg'); ?>
										</div>
										<?php
										// Form Close
										echo form_close(); ?>
										<?php				
										
										?>
										<ul class="actions">
											<li><a href="#reg" class="button scrolly">Register</a></li>
										</ul>
										</div>
										</div>
										<?php } ?>
                    			</div>

                   		
                   		
                    			
                    </div> 
                    <div id='prof'>
                   			<?php if($this->session->userdata('matricula')){

										

							  }
							?>
                   		</div>           
                    
                
   			 </section>
			
			<section id="header">					
					<div class="inner">
						<span class="icon major fa-cloud"></span>
						<?php foreach ($alumnos->result() as $datos_alumno) {
							$nombre = $datos_alumno->nombre." ".$datos_alumno->apellidos; 
						} ?>					
						<div id="div-msg"><h1><?php echo $mensaje; echo $nombre; ?></h1></div>
						<p><?php echo $sub_mensaje; ?></p>
						<ul class="actions">
							<li><a href="#one" class="button scrolly">Discover</a></li>
						</ul>
					</div>				
			</section>

		<section id="test-log" class="main style2 special">
				<div class="container">
					<header>
					



					</header>
				</div>
			</section>
		<!-- One -->
		<?php  if($this->session->userdata('username')){?>
			<section id="one" class="main style1">
				<div class="container">
					<div class="contenedor_json">
                        <table class="table-contenedor_json" id="table-contenedor_json">
                                            
                        </table>
                     </div>
				</div>                                   
			</section>
			<?php } ?>	       
		<!-- Two -->
			<section id="two" class="main style2">
				<div class="container">
					<div class="row 150%">
						<div class="6u 12u$(medium)">
							<ul class="major-icons">
								<li><span class="icon style1 major fa-code"></span></li>
								<li><span class="icon style2 major fa-bolt"></span></li>
								<li><span class="icon style3 major fa-camera-retro"></span></li>
								<li><span class="icon style4 major fa-cog"></span></li>
								<li><span class="icon style5 major fa-desktop"></span></li>
								<li><span class="icon style6 major fa-calendar"></span></li>
							</ul>
						</div>
						<div class="6u$ 12u$(medium)">
							<header class="major">
								<h2>Lorem ipsum dolor adipiscing<br />
								amet dolor consequat</h2>
							</header>
							<p>Adipiscing a commodo ante nunc accumsan interdum mi ante adipiscing. A nunc lobortis non nisl amet vis volutpat aclacus nascetur ac non. Lorem curae eu ante amet sapien in tempus ac. Adipiscing id accumsan adipiscing ipsum.</p>
							<p>Blandit faucibus proin. Ac aliquam integer adipiscing enim non praesent vis commodo nunc phasellus cubilia ac risus accumsan. Accumsan blandit. Lobortis phasellus non lobortis dit varius mi varius accumsan lobortis. Blandit ante aliquam lacinia lorem lobortis semper morbi col faucibus vitae integer placerat accumsan orci eu mi odio tempus adipiscing adipiscing adipiscing curae consequat feugiat etiam dolore.</p>
							<p>Adipiscing a commodo ante nunc accumsan interdum mi ante adipiscing. A nunc lobortis non nisl amet vis volutpat aclacus nascetur ac non. Lorem curae eu ante amet sapien in tempus ac. Adipiscing id accumsan adipiscing ipsum.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="main style1 special">
				<div class="container">
					<header class="major">
						<h2>Adipiscing amet consequat</h2>
					</header>
					<p>Ante nunc accumsan et aclacus nascetur ac ante amet sapien sed.</p>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<span class="image fit"><img id="img1" class="img-circle" src="<?php echo base_url(); ?>plantilla/images/ci.png" alt=""/></span>
							<h3>Magna feugiat lorem</h3>
							<p>Adipiscing a commodo ante nunc magna lorem et interdum mi ante nunc lobortis non amet vis sed volutpat et nascetur.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</div>
						<div class="4u 12u$(medium)">
							<span class="image fit"><img src="<?php echo base_url(); ?>plantilla/images/pic03.jpg" alt="" /></span>
							<h3>Magna feugiat lorem</h3>
							<p>Adipiscing a commodo ante nunc magna lorem et interdum mi ante nunc lobortis non amet vis sed volutpat et nascetur.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<span class="image fit"><img src="<?php echo base_url(); ?>plantilla/images/pic04.jpg" alt="" /></span>
							<h3>Magna feugiat lorem</h3>
							<p>Adipiscing a commodo ante nunc magna lorem et interdum mi ante nunc lobortis non amet vis sed volutpat et nascetur.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

		<!-- Four -->
		<?php  if(!$this->session->userdata('username')){?>
			<section id="reg" class="main style2 special">
				<div class="container">
					<header>
						<?php echo $this->session->flashdata('msg3'); ?>
						<?=form_open_multipart('home/do_upload');?>
							<div class="form-group">
						    
						    <input type="text" class="form-control" id="" name="matricula" placeholder="Matricula:" required>
						  </div>
						  <div class="form-group">
						    
						    <input type="text" class="form-control" id="" name="nombre" placeholder="Nombre" required>
						  </div>
						   <div class="form-group">
						    
						    <input type="text" class="form-control" id="" name="apellidos" placeholder="Apellidos" required>
						  </div>
						   <div class="form-group">
						    
						    <input type="email" class="form-control" id="" name="correo" placeholder="Email" required>
						  </div>
						  <div class="form-group">
						    
						    <input type="password" class="form-control" id="" name="password2" placeholder="Password" required>
						  </div>
							<input type="file" name="userfile" size="20" required />
							<br /><br />
							<input type="submit" value="upload" />
						</form>
					</header>
				</div>
			</section>
			<?php } ?>	
			

		<script type="text/javascript">


  var baseurl = 'http://localhost:8081/proyecto/';

    $(document).ready(function(){

        $.post(baseurl + 'index.php/ajax_post_controller/alumnos', function(data){

            var result = JSON.parse(data);
            $(".table-contenedor_json").append('<tr><td>Matricula</td><td>Nombre</td><td>Apellidos</td><td>Correo</td><td>Foto de Perfil</td></tr>');
            $.each(result, function(i, val){
                
                $(".table-contenedor_json").append('<tr><td>Matricula:</td><td>Nombres:</td><td>Apellidos:</td><td>Correo:</td><td>Foto de Perfil:</td></tr><tr><td>' + val.matricula + '</td>' + '<td>' + val.nombre + '</td>' + '<td>' + val.apellidos + '</td>' + '<td>' + val.email + '</td>' + '<td><img src=http://localhost:8081/proyecto/uploads/' + val.ruta + ' width=50></td></tr>');
                

            });

        });
        $(".cargar_json").show();
        //$(this).hide();

        //$(".contenedor_json").prepend('<input type="button" class="ocultar" value="Ocultar" >');

    });

 


   </script>
