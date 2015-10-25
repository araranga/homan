         <div class="modal  fade in" id="info-contact" role="dialog">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h3>Contact Us
                        <button class="pull-right close" type="button" data-dismiss="modal">×</button>
                     </h3>
                  </div>
                  <div class="modal-body">
                     <form class="form-horizontal" action="form.php" name="info-contact-formx" id="info-contact-formx" method="post">
                        <input type='hidden' name='formsname' value='info-contact-form'> 
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
                           <div class="col-md-12 input-group pull-left">
                              <span class="input-group-addon"><span class=" glyphicon glyphicon-comment"></span></span> 
                              <textarea class="form-control" name="comments" id="comments" placeholder="Message..." rows="4" required=""></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-6 pull-right">
                              <button type="submit" value="Submit" class="btn btn-primary pull-right" id="infoContact_btnxxx">Send</button>                                
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="modal-footer">
                     <div id="infoContactStatus" class="pull-left text-left"></div>
                  </div>
               </div>
               <!-- /model-content  -->
            </div>
         </div>