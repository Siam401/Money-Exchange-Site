@include('layouts.header')
@include('layouts.sidebar')
<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Buy Order
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <div class="alert alert-info" role="alert">
                                                    <strong> Tdbs</strong> এর সম্মানিত সদস্যগন <strong>Skrill / Neteller</strong> ক্রয় করার ক্ষেত্রে <strong>30 $ </strong>বা তার বেশি দ্রুত দেওয়া হয় । কিন্তু 30 $ এর নিচে ক্রয় করলে ট্রানজেকশন ফি<strong>1 $</strong>  কেটে রাখা হবে এবং <strong>11$</strong> এর নিচে কেও অডার করবেন না ।
                                                </div>
                                <form action="">
                                 <!--- <div class="form-group">
                                    <label for="usr">Send Method</label>
                                    <select class="form-control" name="mySelect1" onchange="myFunction1()">
                                        <option value="Bkash">Bkash</option>
                                        <option value="Skill">Skill</option>
                                        <option value="Neteller">Neteller</option>
                                        <option value="rocket">Rocket</option>
										
                                      </select>
                                  </div> -->
								  
								  
							          <div class="form-group">
										<label class="lbl"> Send Method</label>
										<select class="form-control market_place" name="market_place" required="required">
											<option value="">--Select Method--</option>
											<option value="rocket">Rocket</option>
											<option  value="bkash">Bkash</option>
											<option  value="nexus">Nexus</option>
										
										</select>
									</div> 
								  	
									<div class="col-md-3 exchange_info" style="display: none;">

										<label class="lbl">Exchange Category & Model*</label>
										<input type="text" class="form-control" name="exchange_info" value="{{old('exchange_info')}}" placeholder="Please write exchage category and model"  >
									</div>
								  
								  
								  <div class="col-md-3 exchange_info" style="display: none;">

										<label class="lbl">Rocket Category & Model*</label>
										<input type="text" class="form-control" name="rocket_info" value="{{old('rocket_info')}}" placeholder="Please write exchage category and model"  >
									</div>
								  
								  
                                  <div class="form-group">
                                    <label for="usr">Receive Method</label>
                                    <select class="form-control recive_method" name="recive_method" required="required">
                                        <option value="">--Select Method--</option>
                                        <option value="skill">Skill</option>
                                        <option value="Neteller">Neteller</option>

                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="usr">Send Amount(৳)</label>
                                    <input type="number" readonly min="0" class="form-control" id="" value="0.00"  name="send_amount">
                                  </div>
                                  <div class="form-group">
                                    <label for="usr">Receive Amount($)</label>
                                    <input type="number" min="0" class="form-control" id="" value="0" name="receive_amount">
                                  </div>
								  
								  <div class="form-group auction_date" style="display: none;">
										<label id="lebel1"><!-- Bkash Number* --></label>
										<div id="sandbox-container">
											<input type="text" name="bkash_number" value="" class="form-control" placeholder="Pick a date" />
										</div>
									</div>
									<div class="form-group auction_date" style="display: none;">
										<label class="lebel2"><!-- BKash TRX ID* --></label>
										<div id="sandbox-container">
											<input type="text" name="bkash_trxid" value="" class="form-control" placeholder="Pick a date" />
										</div>
                                    </div>
                                    <div class="form-group skrill_email" style="display: none;">
                                        <label class="lbl-recv-name">Skrill Email </label>
                                        <div id="sandbox-container">
                                            <input type="text" name="bkash_trxid" value="" class="form-control" placeholder="Pick a date" />
                                        </div>
                                    </div>
				                <div class="row agent-info-div" ng-hide="active">
                                    <div class="col-8 text-center" id="agents_info" style="display: none">
                                        <p>নিচের <span class="ng-binding-name">BKash</span> নাম্বারে টাকা পাঠানোর পর Submit Button-এ ক্লিক করুন ।<br>
                                            <b class="ng-binding">Cash Out From : </b>
                                            <b class="ng-binding-number"> 01785790915 </b>&nbsp; 
                                            <b ng-hide="active1" class="ng-binding">(Agent Number)</b>
                                        </p>
                                    </div>
                                </div>						
				                    
										
			</div>
								  
                                    <center><button type="submit" class="btn btn-primary">Submit</button>
                                  <button type="submit" class="btn btn-primary">Cancel</button></center>
                                </form>
                            </div>

                        </div>
                    </section>
                    </div></div></div>
<script type="text/javascript">
    //buy page form manepulution
    //send methods
        $('.market_place').change(function(){
            var type = $('.market_place').val();
            if(type == 'bkash'){
                $('.auction_date').show();
                $('#lebel1').text("Bkash Number*");
                $('.lebel2').text("BKash TRX ID*");
                $('.ng-binding-number').text("01785790915");
                $('.ng-binding-name').text("BKash");
                $('#agents_info').show();
            }else if(type == 'rocket'){
                $('.auction_date').show();
                $('#lebel1').text("Rocket Number*");
                $('.lebel2').text("Rocket TRX ID*");
                $('.ng-binding-number').text("01854652133");
                $('.ng-binding-name').text("Rocket");
                $('#agents_info').show();
            }else if(type == 'nexus'){
                $('.auction_date').show();
                $('#lebel1').text("Nexus Card Number*");
                $('.lebel2').text("Nexus TRX ID*");
                $('#agents_info').hide();
            }else{
                $('.auction_date').hide();
                $('#agents_info').hide();

            }
        });
		
        //recived method
		
		 $('.recive_method').change(function(){
            var type = $('.recive_method').val();
            if(type == 'skill'){
                $('.skrill_email').show();
                $('.lbl-recv-name').text("Skrill Email");
            }else if(type == 'Neteller'){
                $('.skrill_email').show();
                $('.lbl-recv-name').text("Neteller Email");
            }else{
                $('.skrill_email').hide();
            }
        });
		
		
        $('.market_place').change(function(){
            var type = $('.market_place').val();
            if(type == 'exchange_market'){
                $('.exchange_info').show();
            }else{
                $('.exchange_info').hide();
            }
        });
		
		
		 $('.mySelect1').change(function(){
            var type = $('.mySelect1').val();
            if(type == 'rocket'){
                $('.rocket_info').show();
            }else{
                $('.rocket_info').hide();
            }
        });
		

</script>
@include('layouts.footer')


