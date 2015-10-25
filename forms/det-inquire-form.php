<!--	Inquire popup form   -->
               <div class="modal  fade in" id="inquire" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <div class="row">
                              <div class="col-md-9">
                                 <h3><?php echo $_GET['itemdata']['title'];?> by <?php echo $_GET['itemdata']['firstName'];?> <?php echo $_GET['itemdata']['lastName'];?></h3>
                              </div>
                              <div class="col-md-3">
                                 <button class="pull-right close " type="button" data-dismiss="modal">X</button>
                              </div>
                           </div>
                        </div>
                        <div class="modal-body">
                           <form class="form-horizontal" action='form.php' name="inquire-form" id="inquire-form" method="post">
                              <input type='hidden' name='formsname' value='inquire-form'> 
                              <div class="form-group">
                                 <div class="col-md-6 input-group pull-left">
                                    <span class="input-group-addon"><span class=" glyphicon glyphicon-user"></span></span> 
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
                                 </div>
                                 <div class="col-md-6 input-group pull-right">
                                    <span class="input-group-addon"><span class=" glyphicon glyphicon-envelope"></span></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required="">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-md-6 input-group pull-left">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span> 
                                    <textarea rows="6" class="form-control" id="comments" name="comments">re: <?php echo $_GET['itemdata']['title'];?> by <?php echo $_GET['itemdata']['firstName'];?> <?php echo $_GET['itemdata']['lastName'];?> (<?php echo $_GET['itemdata']['lastName'];?>) 
                                    </textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-md-10">
                                    <p><small>
                                       If you would like to receive a shipping quote, please provide your shipping address or at least the ZIP code.
                                       </small>
                                    </p>
                                    <input name="request-info" type="checkbox" value="">
                                    <small>
                                    WE SHIP ALMOST EVERY WORK OF ART ON APPROVAL. 
                                    <br>PLEASE CHECK THIS BOX IF YOU WOULD LIKE MORE INFORMATION REGARDING OUR SHIPPING ON APPROVAL AND RETURN AND REFUND POLICY.
                                    </small>
                                 </div>
                                 <div class="col-md-2">
                                    <button type="submit" value="Submit" class="btn btn-primary pull-right" id="inquire_btn">Send</button> 
                                 </div>
                              </div>
                              <input name="title" type="hidden" value="<?php echo $_GET['itemdata']['title'];?>">
                              <input name="artist" type="hidden" value="<?php echo $_GET['itemdata']['firstName'];?> <?php echo $_GET['itemdata']['lastName'];?>">
                              <input name="link" type="hidden" value="<?php echo pageurl(); ?>">
                           </form>
                        </div>
                        <div class="modal-footer">
                           <div id="inquireStatus" class="pull-left text-left"></div>
                        </div>
                     </div>
                     <!-- /model-content  -->
                  </div>
               </div>
               <!--    / inquire popup   -->
   <div class="modal  fade in" id="biography" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <div class="row">
                              <div class="col-md-9">
                                 <h3>Biography Of <?php echo $_GET['itemdata']['firstName'];?> <?php echo $_GET['itemdata']['lastName'];?></h3>
                              </div>
                              <div class="col-md-3">
                                 <button class="pull-right close " type="button" data-dismiss="modal">X</button>
                              </div>
                           </div>
                        </div>
                        <div class="modal-body">
                              <?php echo nl2br($_GET['artistdata']['biography']);?>
                        </div>
                        <div class="modal-footer">
                           <div id="inquireStatus" class="pull-left text-left"></div>
                        </div>
                     </div>
                     <!-- /model-content  -->
                  </div>
               </div>              