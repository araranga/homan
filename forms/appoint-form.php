         <div class="modal  fade in" id="appointment" role="dialog">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <div class="row">
                        <div class="col-md-9">
                           <h3>Make An Appointment</h3>
                        </div>
                        <div class="col-md-3">
                           <button class="pull-right close " type="button" data-dismiss="modal">×</button>
                        </div>
                     </div>
                  </div>
                  <div class="modal-body">
                     <p>
                        Please allow us to prepare for your visit. Our senior art consultants and principals are often out on location and we would like to arrange to be there when you visit.
                        <br> If you would like to see a specific item or works by your favorite artist, an appointment allows us to prepare for your visit, pull items from warehouse, and make sure that you get undivided attention and to make the most of your time.
                     </p>
                     <p>
                        No appointment is necessary if you would just like to see our exhibitions and don’t need any specific information.
                     </p>
                     <hr>
                     <form class="form-horizontal" action="form.php" name="appointment-form" id="appointment-formx" method="post">
                        <input type='hidden' name='formsname' value='appointment-form'> 
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
                              <span class="input-group-addon"><span class=" glyphicon glyphicon-comment"></span></span> 
                              <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Appointment Request" required=""></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12">
                              <button type="submit" value="Submit" class="btn btn-primary pull-right" id="appointment_btn">Send</button>                                
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="modal-footer">
                     <div id="appointmentStatus" class="pull-left text-left"></div>
                     <!--<a class="btn btn-default pull-right" data-dismiss="modal">Close</a> -->   
                  </div>
               </div>
               <!-- /model-content  -->
            </div>
         </div>