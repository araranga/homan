<!--	Inquire popup form   -->
               <div class="modal  fade in" id="email-to-friend" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <div class="row">
                              <div class="col-md-9">
                                 <h3>Share <?php echo $_GET['itemdata']['title'];?> by <?php echo $_GET['itemdata']['firstName'];?> <?php echo $_GET['itemdata']['lastName'];?>  </h3>
                              </div>
                              <div class="col-md-3">
                                 <button class="pull-right close " type="button" data-dismiss="modal">X</button>
                              </div>
                           </div>
                        </div>
                        <div class="modal-body">
                           <form class="form-horizontal" action='form.php' name="email-to-friend-form" id="email-to-friend-form" method="post">
                              <input type='hidden' name='formsname' value='emailfriend'> 
                              <div class="form-group">
                                 <div class="col-md-6 input-group pull-left">
                                    <span class="input-group-addon"><span class=" glyphicon glyphicon-user"></span></span> 
                                    <input type="text" class="form-control" id="name-friend" name="name-friend" placeholder="Friend Name" required="" autofocus="">
                                 </div>
                                 <div class="col-md-6 input-group pull-right">
                                    <span class="input-group-addon"><span class=" glyphicon glyphicon-envelope"></span></span>
                                    <input type="email" class="form-control" id="email-friend" name="email-friend" placeholder="Friend Email" required="">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-md-6 input-group pull-left">
                                    <span class="input-group-addon"><span class=" glyphicon glyphicon-user"></span></span> 
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="">
                                 </div>
                                 <div class="col-md-6 input-group pull-right">
                                    <span class="input-group-addon"><span class=" glyphicon glyphicon-envelope"></span></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-md-6 input-group pull-left">
                                    <span class="input-group-addon"><span class=" glyphicon glyphicon-comment"></span></span> 
                                    <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Message..."></textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-md-12">
                                    <button type="submit" value="Submit" class="btn btn-primary pull-right" id="emailToFriend_btn">Send</button>                                
                                 </div>
                              </div>
                              <input name="title" type="hidden" value="<?php echo $_GET['itemdata']['title'];?>">
                              <input name="artist" type="hidden" value="<?php echo $_GET['itemdata']['firstName'];?> <?php echo $_GET['itemdata']['lastName'];?>">
                              <input name="link" type="hidden" value="<?php echo pageurl(); ?>">                              
                           </form>
                        </div>
                        <div class="modal-footer">
                           <div id="emailToFriendStatus" class="pull-left"></div>
                           <!--<a class="btn btn-default pull-right" data-dismiss="modal">Close</a> -->   
                        </div>
                     </div>
                     <!-- /model-content  -->
                  </div>
               </div>
               <!--    / popup   -->