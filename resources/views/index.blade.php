@include('layouts.header')
@include('layouts.sidebar')


		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>BUY DOLLAR</h4>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>SELL DOLLAR</h4>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>EXCHANGE</h4>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<div class="row">
			<div class="table-agile-info">
			<div class="panel panel-default">
    <div class="panel-heading">
     Transaction History of last 7 Days
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">SL</th>
            <th>Date</th>
            <th>Transection Type</th>
            <th data-breakpoints="xs">Buy Method</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Receive Method</th>
            <th>Amonut</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            <td>1</td>
            <td>12/10/2018</td>
            <td>Buy</td>
            <td>BKash</td>
            <td>Skrill</td>
            <td>$13</td>
            <td>Sent</td>
          </tr>
          <tr data-expanded="true">
            <td>1</td>
            <td>12/10/2018</td>
            <td>Buy</td>
            <td>BKash</td>
            <td>Skrill</td>
            <td>$13</td>
            <td>Sent</td>
          </tr>
          <tr data-expanded="true">
            <td>1</td>
            <td>12/10/2018</td>
            <td>Buy</td>
            <td>BKash</td>
            <td>Skrill</td>
            <td>$13</td>
            <td>Sent</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div></div>
		</div>

		<div class="row">
			<div class="table-agile-info">
			<div class="panel panel-default">
    <div class="panel-heading">
     Your Referral Link 
    </div>
    <div>
    	<table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead><center><a href="#">http://tdbsewallet.com/home/signup?user=hasib2486@gmail.com</a></center></thead>
      
  </table>
    </div>
  </div></div></div>
@include('layouts.footer')