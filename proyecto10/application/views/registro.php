<section>
            <div class="container">
                <div class="registro">
                    <img class="img-responsive logoregistro" src="<?php echo base_url();?>access/img/bxl.jpg" alt="" width="500" height="400">
                </div>
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" required="">
                                <!--<small id="NombreHelp" class="form-text text-muted"></small>-->                   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Apellido">Apellido</label>
                                <input name="apellido" type="texto" class="form-control" id="apellido" placeholder="Ingrese su apellido" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="Pais">País</label>
                            <input name="pais" type="text" class="form-control" placeholder="País de residencia" required="">
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Departamento">Departamento</label> 
                                <select name="Departamento" class="custom-select mr-sm-2" id="Departamento">
                                  <!--Hacer con array-->
                                  <option selected>Seleccione su departamento de residencia</option>
                                  <option value="Amazonas">Amazonas</option>
                                  <option value="Antioquia">Antioquia</option>
                                  <option value="Arauca">Arauca</option>
                                  <option value="Atlántico">Atlántico</option>
                                  <option value="Bolívar">Bolívar</option>
                                  <option value="Boyacá">Boyacá</option>
                                  <option value="Caldas">Caldas</option>
                                  <option value="Caquetá">Caquetá</option>
                                  <option value="Casanare">Casanare</option>
                                  <option value="Cauca">Cauca</option>
                                  <option value="Cesar">Cesar</option>
                                  <option value="Chocó">Chocó</option>
                                  <option value="Córdoba">Córdoba</option>
                                  <option value="Cundinamarca">Cundinamarca</option>
                                </select>
                            </div>
                        </div>                       
                        <div class="col">
                            <div class="form-group">
                                <label for="Ciudad">Ciudad</label> 
                                <select name="Ciudad" class="custom-select mr-sm-2" id="Ciudad" required="">
                                  <option selected>Seleccione su ciudad de residencia</option>
                                  <option value="Medellín">Medellín</option>
                                  <option value="Cali">Cali</option>
                                  <option value="Bogotá">Bogotá</option>
                                  <option value="Baranquilla">Baranquilla</option>
                                  <option value="Manizales">Manizales</option>
                                  <option value="Cartagena">Cartagena</option>
                                  <option value="Santa Marta">Santa Marta</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="Telefono">Teléfono</label>
                                    <input name="telefono" type="texto" class="form-control" id="telefono" placeholder="Ingrese su teléfono" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input name="correo" type="Email" class="form-control" id="correo" placeholder="Ingrese su correo" required="">
                                </div>
                            </div>
                        </div>

                    <br>
                    <div class="form-group form-check">
                        <input name="terminos" type="checkbox" class="form-check-input" id="terminos" required="">
                      <label class="form-check-label" for="terminos">Acepta los términos y Condiciones</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-enviar">Completar Registro</button>
                  </form>
            </div>
        </section>

