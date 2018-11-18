<div class="container-fluid">
	<div class="row detalles-hospedaje">
		<div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
			<div class="row detalles-completos">
				<div class="col-md-2 col-xs-12 col-sm-2"><img src="https://s-ec.bstatic.com/images/hotel/max1024x768/113/113847395.jpg"  class="img-thumbnail" alt=""></div>
				<div class="col-md-7  col-xs-12  col-sm-7 titulo border-bottom"><h3>Semana santa Romantica en puntacana </h3> <p class="reputacion">
					<i id="cali-1" class="fas fa-star"></i>
					<i id="cali-2" class="fas fa-star"></i>
					<i id="cali-3" class="fas fa-star"></i>
					<i id="cali-4" class="fas fa-star"></i>
					<i id="cali-5" class="fas fa-star"></i>
				</p>
				<p> HDC Hoteles</p></div>
				<div class="col-md-3 col-xs-12 col-sm-3 text-center entrada-salida"> <p>Entrada <span> 04/05/2018 (Viernes)</span></p> <p>Salida <span> 04/05/2018 (Domingo)</span></p></div>
			</div>
			
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row blanco">
		<div class="col-md-offset-1 col-md-10">
			<div class="row descripcion-hospedaje">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#Inmueble" aria-controls="Inmueble" role="tab" data-toggle="tab">Inmueble</a></li>
					<li role="presentation"><a href="#caracteristicas" aria-controls="caracteristicas" role="tab" data-toggle="tab">Caracteristicas</a></li>
					<li role="presentation"><a href="#ubicacion" aria-controls="ubicacion" role="tab" data-toggle="tab">Ubicación</a></li>
					<li role="presentation"><a href="#multimedia" aria-controls="multimedia" role="tab" data-toggle="tab">Multimedia</a></li>
					
				</ul>
				<!-- <div class="col-md-12 text-center pago-advertencia"> El pago total de esta reserva esta aún pendiente. Caduca en 24 HS. <span id="horas-cadu"> 30/04/2018 23:59</span></div> -->

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="Inmueble">
						<div class="row" style="display: block;">
							<div class="col-md-12  titulo rojo-texto"> 
								<h2>Inmueble</h2>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label" for="id_estado_inmueble">Estado del Inmueble<span class="req"> *</span></label>
									<div class="controls">

										<select id="id_estado_inmueble" class="form-control" data-role="select" required="required" name="id_estado_inmueble" data-parsley-errors-container="#errId2">
											<option value="">Seleccione una opción...</option>
											<option value="Option 1">Option 1</option>
											<option value="Option 2">Option 2</option>
											<option value="Option 3">Option 3</option>
											<option value="Option 4">Option 4</option>
										</select>
										<i class="fa fa-chevron-down"></i>
										<span id="errId2" class="error"></span>
									</div>

								</div>
							</div>
							<div class="col-md-4">

								<div class="form-group">
									<label class="control-label" for="id_propiedad">Propiedad<span class="req"> *</span></label>
									<div class="controls">

										<select id="id_propiedad" class="form-control" data-role="select" required="required" name="id_propiedad" data-parsley-errors-container="#errId3">
											<option value="">Seleccione una opción...</option>
											<option value="Option 1">Option 1</option>
											<option value="Option 2">Option 2</option>
											<option value="Option 3">Option 3</option>
											<option value="Option 4">Option 4</option>
										</select>
										<i class="fa fa-chevron-down"></i>
										<span id="errId3" class="error"></span>
									</div>

								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label" for="id_sub_propiedad">Tipo de Propiedad<span class="req"> *</span></label>
									<div class="controls">

										<select id="id_sub_propiedad" class="form-control" data-role="select" required="required" name="id_sub_propiedad" data-parsley-errors-container="#errId4">
											<option value="">Seleccione una opción...</option>
											<option value="Option 1">Option 1</option>
											<option value="Option 2">Option 2</option>
											<option value="Option 3">Option 3</option>
											<option value="Option 4">Option 4</option>
										</select>
										<i class="fa fa-chevron-down"></i>
										<span id="errId4" class="error"></span>
									</div>

								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group brdbot">
									<div class=" titulo rojo-texto"> 
										<h2>Tipo de Transacción y Precio</h2>
									</div>
									<div class="controls col-sm-9">

										<p id="field75" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId5" class="error"></span>
									</div>

								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="id_negocio">Transacción<span class="req"> *</span></label>
											<div class="controls">

												<select id="id_negocio" class="form-control" data-role="select" required="required" name="id_negocio" data-parsley-errors-container="#errId6">
													<option value="">Seleccione una opción...</option>
													<option value="Option 1">Option 1</option>
													<option value="Option 2">Option 2</option>
													<option value="Option 3">Option 3</option>
													<option value="Option 4">Option 4</option>
												</select>
												<i class="fa fa-chevron-down"></i>
												<span id="errId6" class="error"></span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="monto">Monto<span class="req"> *</span></label>
											<div class="controls">

												<div id="field104" class="input-group">
													<input type="text" class="form-control" data-role="lookup" id="monto" required="required" placeholder="Ejm: 1.000.,00" name="monto" data-parsley-errors-container="#errId7">
													<span class="input-group-addon">
														<i class="fas fa-dollar-sign"></i>
													</span>

												</div>
												<span id="errId7" class="error"></span>
											</div>

										</div>
									</div>
								</div>
								<div class="row" style="display: block;">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="condominio">Aplica Condominio?<span class="req"> *</span></label>
											<div class="controls">

												<select id="condominio" class="form-control" data-role="select" selected="selected" name="condominio" required="required" data-parsley-errors-container="#errId8">

													<option value="">Seleccione una opción</option>
													<option value="1">Si</option>
													<option value="0">No</option>
												</select>
												<i class="fa fa-chevron-down"></i>
												<span id="errId8" class="error"></span>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="condominio_monto">Monto Condominio</label>
											<div class="controls">

												<div id="field155" class="input-group">
													<input type="text" class="form-control" data-role="lookup" id="condominio_monto" name="condominio_monto" data-parsley-errors-container="#errId9">
													<span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
												</div>
												<span id="errId9" class="error"></span>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="display: block;">
							<div class="col-md-12">
								<div class="form-group" style="display: block;">
									<label class="control-label">Seleccione el Tipo de Precio<span class="req"> *</span></label>
									<div class="controls">

										<label class="radio col-md-6" for="id_precio">
											<input type="radio" value="1" id="id_precio" name="field165" required="required" data-parsley-errors-container="#errId10">Precio Fijo</label>
											<label class="radio col-md-6" for="id_precio">
												<input type="radio" value="2" id="id_precio" name="field165" required="required" data-parsley-errors-container="#errId10">Precio Negociable</label>
												<span id="errId10" class="error"></span>
											</div>

										</div>
									</div>
								</div>

								<div class="row  ">
									<div class="col-md-12 cancelar-reservar">
										<div class="row">
											<div class="col-md-6"></div>
											<div class="col-md-6">
												<div class="row">

													<div class="col-md-6 col-sm-6  col-xs-12 separador-top-movil"><button class="btn btn-default col-md-10 col-xs-12">Cancelar</button></div>
													<div class="col-md-6  col-sm-6  col-xs-12 separador-top-movil"><button class="btn btn-paradise-registro col-md-10 col-xs-12">Aceptar y Continuar</button></div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane" id="caracteristicas">
								<div class="row">
									<div class="col-md-6 titulo rojo-texto"> 
										<h2> Característica</h2> 
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label" for="titulo">Título del Inmueble<span class="req"> *</span></label>
											<div class="controls">

												<input id="titulo" type="text" class="form-control k-textbox" data-role="text" placeholder="Ejm: Se vende casa" name="titulo" data-parsley-minlength="10" data-parsley-maxlength="50" required="required" data-parsley-errors-container="#errId12"><span id="errId12" class="error"></span>
											</div>

										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group" style="display: block;">
													<label class="control-label" for="descripcion">Descripción<span class="req"> *</span></label>
													<div class="controls">

														<textarea id="descripcion" rows="3" class="form-control k-textbox" data-role="textarea" required="required" data-minlength="10" data-maxlength="100" name="descripcion" data-parsley-errors-container="#errId13"></textarea><span id="errId13" class="error"></span>
													</div>

												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label" for="a?o">Año de Construcción<span class="req"> *</span></label>
													<div class="controls">

														<div id="field185" class="input-group">
															<input type="text" class="form-control" data-role="lookup" id="anio" name="anio" placeholder="Ejm: 1995" required="required" data-parsley-errors-container="#errId14">
															<span class="input-group-addon"><i class="far fa-clock"></i></span>
														</div><span id="errId14" class="error"></span>
													</div>

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label" for="construccion">Mts. de la Construcción<span class="req"> *</span></label>
													<div class="controls">

														<div id="field186" class="input-group">
															<input type="text" class="form-control" data-role="lookup" id="construccion" placeholder="Ejm: 1000" required="required" name="construccion" data-parsley-errors-container="#errId15">
															<span class="input-group-addon"><i class="fas fa-university"></i></span>
														</div>
														<span id="errId15" class="error"></span>
													</div>

												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group" rel="popover" data-trigger="hover" data-content="Si no posee Habitaciones, coloque el n?mero &quot;0&quot;" data-original-title="">
													<label class="control-label" for="habitacion">Habitaciones<span class="req"> *</span></label>
													<div class="controls">

														<div id="field187" class="input-group">
															<input type="text" class="form-control" data-role="lookup" id="habitacion" placeholder="Ejm: 2" required="required" name="habitacion" data-parsley-errors-container="#errId16">
															<span class="input-group-addon"><i class="fas fa-home"></i></span>
														</div><span id="errId16" class="error"></span>
													</div>

												</div>
											</div>
											<div class="col-md-6"><div class="form-group" rel="popover" data-trigger="hover" data-content="Si no posee Líneas Telefénicas, coloque el numero &quot;0&quot;" data-original-title="">
												<label class="control-label" for="linea_tlfn">Línea Telefónica<span class="req"> *</span></label>
												<div class="controls">

													<div id="field188" class="input-group">
														<input type="text" class="form-control" data-role="lookup" id="linea_tlfn" name="linea_tlfn" required="required" placeholder="Ejm: 1" data-parsley-errors-container="#errId17">
														<span class="input-group-addon"><i class="fas fa-phone-volume"></i></span>
													</div>
													<span id="errId17" class="error"></span>
												</div>

											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group" rel="popover" data-trigger="hover" data-content="Si no posee Garages, coloque el n?mero &quot;0&quot;" data-original-title="">
												<label class="control-label" for="garaje">Garajes<span class="req"> *</span></label>
												<div class="controls">

													<div id="field189" class="input-group">
														<input type="text" class="form-control" data-role="lookup" id="garaje" placeholder="Ejm: 3" name="garaje" required="required" data-parsley-errors-container="#errId18">
														<span class="input-group-addon"><i class="fas fa-warehouse"></i></span>
													</div><span id="errId18" class="error"></span></div>

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group" rel="popover" data-trigger="hover" data-content="Si no posee Baños, coloque el número &quot;0&quot;" data-original-title="">
													<label class="control-label" for="Ba?os">Baños<span class="req"> *</span></label>
													<div class="controls">

														<div id="field190" class="input-group">
															<input type="text" class="form-control" data-role="lookup" id="Banos" required="required" placeholder="Ejm: 10" name="bano" data-parsley-errors-container="#errId19">
															<span class="input-group-addon"><i class="fas fa-female"></i> <i class="fas fa-female"></i></span>
														</div>
														<span id="errId19" class="error"></span>
													</div>

												</div>
											</div>
										</div>
										<div class="row observaciones">
											<div class="col-md-3 col-sm-6 col-xs-12">
												<h3> Servicios</h3>
												<ul>
													<li><div class="checkbox">
														<label>
															<input type="checkbox" value="">
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
															Lavanderia
														</label>
													</div></li>
													<li><div class="checkbox">
														<label>
															<input type="checkbox" value="">
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
															Gimnasio
														</label>
													</div></li>
													<li><div class="checkbox">
														<label>
															<input type="checkbox" value="">
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
															Internet
														</label>
													</div></li>
												</ul>
											</div>
											<div class="col-md-3 col-sm-6 col-xs-12">
												<h3> Interiores</h3>
												<ul>
													<li><div class="checkbox">
														<label>
															<input type="checkbox" value="">
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
															Aire Acondicionado
														</label>
													</div></li>
													<li><div class="checkbox">
														<label>
															<input type="checkbox" value="">
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
															Estudio
														</label>
													</div></li>
													<li><div class="checkbox">
														<label>
															<input type="checkbox" value="">
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
															Cuarto de Servicio
														</label>
													</div></li>
												</ul>
											</div>
											<div class="col-md-3 col-sm-6 col-xs-12">
												<h3> Cercanías</h3>
												<ul>
													<li><div class="checkbox">
														<label>
															<input type="checkbox" value="">
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
															Colegios
														</label>
													</div></li>
													<li><div class="checkbox">
														<label>
															<input type="checkbox" value="">
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
															Hospitales
														</label>
													</div></li>
													<li><div class="checkbox">
														<label>
															<input type="checkbox" value="">
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
															Clinicas
														</label>
													</div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12 cancelar-reservar">
										<div class="row">
											<div class="col-md-6">

											</div>
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-6 col-sm-6  col-xs-12 separador-top-movil"><button class="btn btn-default col-md-10 col-xs-12">Cancelar</button></div>
													<div class="col-md-6  col-sm-6  col-xs-12 separador-top-movil"><button class="btn btn-paradise-registro col-md-10 col-xs-12">Aceptar y Continuar</button>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="ubicacion">

								<div class="row">
									<div class="col-md-6 col-sm-12 titulo rojo-texto"> 
										<h2> Confirmación de Reserva</h2>
									</div>

								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="id_provincia">Provincia<span class="req"> *</span></label>
											<div class="controls">

												<select id="id_provincia" class="form-control" data-role="select" name="id_provincia" required="required" selected="selected" data-parsley-errors-container="#errId26">





													<option value="Selecione una opci?n...">Selecione una opción...</option>
												</select><span id="errId26" class="error">
													
												</span>
											</div>

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="id_canton">Ciudad<span class="req"> *</span></label>
											<div class="controls">

												<select id="id_canton" class="form-control" data-role="select" selected="selected" required="required" name="id_canton" data-parsley-errors-container="#errId27">


													<option value="Selecione una opci?n...">Selecione una opción...</option>
												</select>
												<span id="errId27" class="error"></span>
											</div>

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="id_parroquia">Zona<span class="req"> *</span></label>
											<div class="controls">

												<select id="id_parroquia" class="form-control" data-role="select" selected="selected" required="required" name="id_parroquia" data-parsley-errors-container="#errId28">


													<option value="Selecione una opción...">Selecione una opción...</option>
												</select>
												<span id="errId28" class="error">

												</span>
											</div>

										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label" for="direccion">Dirección donde se encuentra el inmueble...<span class="req"> *</span></label>
											<div class="controls">

												<textarea id="direccion" rows="3" class="form-control k-textbox" data-role="textarea" required="required" name="direccion" data-minlength="10" data-maxlength="100" data-parsley-errors-container="#errId29"></textarea><span id="errId29" class="error"></span>
											</div>

										</div>
									</div>
								</div>
								<div class="row ">
									<div class="col-md-12 cancelar-reservar">
										<div class="row">
											<div class="col-md-6">

											</div>
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-6 col-sm-6  col-xs-12 separador-top-movil"><button class="btn btn-default col-md-10 col-xs-12">Cancelar</button></div>
													<div class="col-md-6  col-sm-6  col-xs-12 separador-top-movil"><button class="btn btn-paradise-registro col-md-10 col-xs-12">Aceptar y Continuar</button>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>

							<div role="tabpanel" class="tab-pane" id="multimedia">

								<div class="row">
									<div class="col-md-6 col-sm-12 titulo rojo-texto"> 
										<h2> Confirmación de Reserva</h2>
									</div>

								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="id_provincia">Provincia<span class="req"> *</span></label>
											<div class="controls">

												<select id="id_provincia" class="form-control" data-role="select" name="id_provincia" required="required" selected="selected" data-parsley-errors-container="#errId26">





													<option value="Selecione una opci?n...">Selecione una opción...</option>
												</select><span id="errId26" class="error">
													
												</span>
											</div>

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="id_canton">Ciudad<span class="req"> *</span></label>
											<div class="controls">

												<select id="id_canton" class="form-control" data-role="select" selected="selected" required="required" name="id_canton" data-parsley-errors-container="#errId27">


													<option value="Selecione una opci?n...">Selecione una opción...</option>
												</select>
												<span id="errId27" class="error"></span>
											</div>

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="id_parroquia">Zona<span class="req"> *</span></label>
											<div class="controls">

												<select id="id_parroquia" class="form-control" data-role="select" selected="selected" required="required" name="id_parroquia" data-parsley-errors-container="#errId28">


													<option value="Selecione una opción...">Selecione una opción...</option>
												</select>
												<span id="errId28" class="error">

												</span>
											</div>

										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label" for="direccion">Dirección donde se encuentra el inmueble...<span class="req"> *</span></label>
											<div class="controls">

												<textarea id="direccion" rows="3" class="form-control k-textbox" data-role="textarea" required="required" name="direccion" data-minlength="10" data-maxlength="100" data-parsley-errors-container="#errId29"></textarea><span id="errId29" class="error"></span>
											</div>

										</div>
									</div>
								</div>
								<div class="row ">
									<div class="col-md-12 cancelar-reservar">
										<div class="row">
											<div class="col-md-6">

											</div>
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-6 col-sm-6  col-xs-12 separador-top-movil"><button class="btn btn-default col-md-10 col-xs-12">Cancelar</button></div>
													<div class="col-md-6  col-sm-6  col-xs-12 separador-top-movil"><button class="btn btn-paradise-registro col-md-10 col-xs-12">Aceptar y Continuar</button>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>