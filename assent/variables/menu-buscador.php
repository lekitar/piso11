<div class="container-fluid">
	<div class="row menu-busqueda">
		<div class="col-md-offset-1 col-md-10">
						<div class="row buscador-avanzado">
				
				<div class="col-md-6 col-xs-12 col-sm-12">
					<p> Destino, zona o nombre del hotel</p>
					<form class="form-horizontal">
						<fieldset>
							<!-- Search input-->
							<div class="form-group">
								
								<div class="col-md-12">
									<div class="input-group">
										<input id="search" name="search" class="form-control" placeholder="Search" type="text">
										<span class="input-group-addon"> <a href="#"> <i class="glyphicon glyphicon-search"></i></a> </span>
									</div>

								</div>
							</div>

						</fieldset>
					</form>
				</div> 
				<div class="col-md-6 hidden-xs hidden-sm">
					<div class="col-md-4">
						<p>Entrada </p>
						<form class="form-horizontal">
							<fieldset>

								<!-- Appended Input-->
								<div class="form-group">

									<div class="col-md-12">
										<div class="input-group date" id='datetimepicker6'>
											<input id="Check-in" name="Check-in" class="form-control" placeholder="Check-in" type="text">
											<span class="input-group-addon "><a href="#"><i class="glyphicon glyphicon-calendar"></i></a></span>
										</div>

									</div>
								</div>
							</fieldset>
						</form>

					</div>
					<div class="col-md-4">
						<p>Salida </p>
						<form class="form-horizontal">
							<fieldset>

								<!-- Appended Input-->
								<div class="form-group">
									
									<div class="col-md-12">
										<div class="input-group date" id='datetimepicker7'>
											<input id="Check-out" name="Check-out" class="form-control" placeholder="Check-out" type="text">
											<span class="input-group-addon "><a href="#"><i class="glyphicon glyphicon-calendar"></i></a></span>
										</div>
										
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="col-md-4">
						<p> Noches</p>
						<div class="form-group">
							<div class="col-md-12 no-padding">
								<div class="form-group">

									<select  id="habitaciones" class="form-control" id="sel1">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
									<i class="fa fa-chevron-down"></i>
									<br>
								</div>
							</div>
						</div>
					</div>
						
				</div> 
				<div class="col-md-6 hidden-sm hidden-xs">
					<div class="col-md-6 no-padding">
						<p>Habitaciones</p>
						<!-- Button Drop Down -->
						<div class="form-group">
							<div class="col-md-12 no-padding">
								<div class="form-group">

									<select  id="habitaciones" class="form-control" id="sel1">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
									<i class="fa fa-chevron-down"></i>
									<br>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<p>Adultos</p>
						<div class="form-group">
							<div class="col-md-12 no-padding">
								<div class="form-group">
									<div class="col-md-12 no-padding">
										<div class="form-group">
											<select  id="adultos" class="form-control" id="sel1">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											</select>
											<i class="fa fa-chevron-down"></i>
											<br>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 no-padding">
						<p>Niños</p>
						<div class="form-group">
							<div class="col-md-12 no-padding">
								<div class="form-group">
									<div class="col-md-12 no-padding">
										<div class="form-group">
											<select  id="ninos" class="form-control" id="sel1">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											</select>
											<i class="fa fa-chevron-down"></i>
											<br>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div> 
				<div class="col-md-6 hidden-xs hidden-sm">
					<div class="col-md-4 ">
						<p>Edad de los Niños</p>
						<div class="col-md-6  no-padding-left">
							<form class="form-horizontal">
								<fieldset>
									<div class="col-md-12">
										<div class="form-group">
											<select  id="edad1" class="form-control" id="sel1">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											</select>
											<i class="fa fa-chevron-down"></i>
											<br>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="col-md-6 no-padding-left">
							<form class="form-horizontal">
								<fieldset>
									<div class="col-md-12 ">
										<div class="form-group">
											<select  id="edad2" class="form-control" id="sel1">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											</select>
											<i class="fa fa-chevron-down"></i>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					<div class="col-md-offset-4 col-md-4">
						<div class="col-md-12 text-center">

							<button class="btn btn-paradise-buscador btn-lg" type=""> Buscar</button>
						</div>
						
					</div>
				</div> 

				<!-- movil --> 

				<div class="hidden-md hidden-lg"> 
					<div class="col-sm-6">
						<p>Entrada </p>
						<form class="form-horizontal">
							<fieldset>

								<!-- Appended Input-->
								<div class="form-group">

									<div class="col-md-12">
										<div class="input-group date" id='datetimepicker6-mv'>
											<input id="Check-in-mv" name="Check-in" class="form-control" placeholder="Check-in" type="text">
											<span class="input-group-addon "><a ><i class="glyphicon glyphicon-calendar"></i></a></span>
										</div>

									</div>
								</div>
							</fieldset>
						</form>

					</div>

					<div class="col-sm-6">
						<p>Salida </p>
						<form class="form-horizontal">
							<fieldset>

								<!-- Appended Input-->
								<div class="form-group">
									
									<div class="col-md-12">
										<div class="input-group date" id='datetimepicker7-mv'>
											<input id="Check-out-mv" name="Check-out" class="form-control" placeholder="Check-out" type="text">
											<span class="input-group-addon "><a ><i class="glyphicon glyphicon-calendar"></i></a></span>
										</div>
										
									</div>
								</div>
							</fieldset>
						</form>
					</div>

					<div class="col-md-6 col-sm-4 ">
						<p>Habitaciones</p>
						<!-- Button Drop Down -->
						<div class="form-group">
							<div class="col-md-12 no-padding">
								<div class="form-group">

									<select  id="habitaciones" class="form-control" id="sel1">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
									<i class="fa fa-chevron-down"></i>
									<br>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<p>Adultos</p>
						<div class="form-group">
							<div class="col-md-12 no-padding">
								<div class="form-group">
									<div class="col-md-12 no-padding">
										<div class="form-group">
											<select  id="adultos" class="form-control" id="sel1">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											</select>
											<i class="fa fa-chevron-down"></i>
											<br>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-4">
						<p>Niños</p>
						<div class="form-group">
							<div class="col-md-12 no-padding">
								<div class="form-group">
									<div class="col-md-12 no-padding">
										<div class="form-group">
											<select  id="ninos" class="form-control" id="sel1">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											</select>
											<i class="fa fa-chevron-down"></i>
											<br>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12  col-sm-offset-8 col-sm-4  text-center">

							<button class="btn btn-paradise-buscador " type=""> Buscar</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>


