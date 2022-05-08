<?
$breadcrumb = 'My Account';
$bodycolor = "body-purple";
include 'header.php';
?>









<div class="doc-wrapper">
<div class="container">
<div id="doc-header" class="doc-header text-center">
<h1 class="doc-title"><i class="icon icon_creditcard"></i> My Account</h1>
<div class="meta"><i class="far fa-clock"></i> Last updated: <? echo date("l jS \of F Y"); ?></div>
</div><!--//doc-header-->
<div class="doc-body row">
<div class="doc-content">
<div class="content-inner">
<? if(!isset($_POST['10month']) AND !isset($_POST['24month'])) { ?>
<section id="ledger" class="doc-section">
<h2 class="section-title">Ledger</h2>
<div class="section-block">

<?
// Students enrolled and calculated tuition

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$tuition = '0';
$sql = "SELECT * FROM bootcamp_enrollments WHERE student_id = '{$_SESSION['student_id']}'";
$result = mysqli_query($conn, $sql);
$coursecount=mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$tuition = $tuition + $row['tuition'];

}
} else {
echo '<tr><td colspan="7">0 students enrolled</td></tr>';
}
?>
<h3>Payments <small>Please allow up to 1 business day for payments to post.</small></h3>
<div class="table-responsive">
<table class="table table-striped table-hover">
<tr>
<th>Transaction ID</th>
<th>Status</th>
<th>First</th>
<th>Last</th>
<th>Email</th>
<th>Payment</th>
<th>Date</th>
</tr>

<?

// Transactions
$tuitionbalance = '';
$sql = "SELECT * FROM bootcamp_transactions WHERE student_id = '{$_SESSION['student_id']}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo '<tr>';
echo '<td>jca10000'.$row['transaction_id'].'</td>';
echo '<td>'.$row['payment_status'].'</td>';
echo '<td>'.$row['first_name'].'</td>';
echo '<td>'.$row['last_name'].'</td>';
echo '<td>'.$row['payer_email'].'</td>';
echo '<td>$'.number_format($row["mc_gross"], 2).'</td>';
echo '<td>'.$row['payment_date'].'</td>';
echo '</tr>';
"<br>";
$paid = $paid + $row['mc_gross'];
}
} else {
echo '<tr><td colspan="7">0 transactions available</td></tr>';
}
$balance = $tuition - $paid;
?>
</table></div>

<!--strong>Enrolled courses:</strong> <?=$coursecount?>  <br-->
<strong>Tuition Total:</strong> $<?=number_format($tuition, 2)?>  <br>
<strong>Tuition Paid:</strong> $<?=number_format($paid, 2)?>  <br>
<span style="border-top:1px lightgray solid;"><strong>Tuition Balance:</strong> $<?=number_format($balance,2)?></span>

</div>







<section id="makeapayment" class="doc-section">
<h2 class="section-title">3 Payment Options - Select Your Payment Plan:</h2>
Paypal accepts credit or debit cards.<br>
</p>
<div class="section-block">

<div class="text-center">
<br><br>
<h3 class="block-title">Option 1: Pay Tuition Up Front</h3>
<p>Total tuition for paying before class starts is <mark>$3,500.00</mark>.<br> $1,000 deposit is required now to reserve your seat. <br> Tuition balance is due before the first day of class. </p>
<p>


<div style="text-align: center; margin: 0 auto;width:500px;">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="8DZHDWX7GKL24">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Jax Code Academy Coding Bootcamp">
<input type="hidden" name="item_number" value="codingbootcamp">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Add special instructions to the seller:">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="https://jaxcode.com/docs/thank-you.php">
<input type="hidden" name="notify_url" value="https://jaxcode.com/docs/handler.php" />
<input type="hidden" name="cancel_return" value="https://jaxcode.com/docs/myaccount.php">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="payer_id" value="<?=$_SESSION['parent_id']?>">
<div class="form-group">
 <div class='input-group date' id='datetimepicker1'>
<span class="input-group-addon">
<span class="glyphicon glyphicon-usd"></span>
</span>
<input type="number" min='1' name="amount" class="form-control" value="" placeholder="Enter Payment Amount Here" style="border: lightgray solid 1px;" required /></div></div>
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHosted">
<input type="hidden" name="notify_url" value="https://jaxcode.com/docs/handler.php">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>



<br>
-- or --
<? } ?>
<br><br>
<h3 class="block-title">Option 2: 10 Month Payment Plan</h3>

Total tuition for payment plan is <mark>$5,000.00</mark>.<br>
Payable in 10 consecutive monthly installments of $500. <br>
The first payment is due now to reserve your seat.<br>
By initiating this option you agree to pay the full amount and be bound by the Jax Code Academy, Inc. Promissory Note. <br>
<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Open Your Promissory Note</button>
<? include 'pn.php'; ?>


<? if(isset($_POST['10month'])) { ?>
<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=ATp27VCbm8UJPZTlIOCj8Ljj-qCRmZPv6FlmG_VeCJauqXO_d64Wf6N01Jx7jmlM7G12gC9b0iq62mwW&vault=true" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'subscribe',

      },
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          'plan_id': 'P-99G35545K6202502GL3MS3WA'
        });
      },
      onApprove: function(data, actions) {
        alert(data.subscriptionID);
      }
  }).render('#paypal-button-container');
</script>
<? } else { ?>
<form action="myaccount.php" method="POST">
<input type="submit" name="10month" value="Choose This Plan">
</form>
<? } ?>


<br>
-- or --
<br><br>
<h3 class="block-title">Option 3: 24 Month Payment Plan</h3>

Total tuition for payment plan is <mark>$5,400.00</mark>.<br>
Payable in 24 consecutive monthly installments of $225. <br>
The first payment is due now to reserve your seat.<br>
By initiating this option you agree to pay the full amount and be bound by the Jax Code Academy, Inc. Promissory Note. <br>
<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal24">Open Your Promissory Note</button>
<? include 'pn24.php'; ?>

<? if(isset($_POST['24month'])) { ?>
<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AT1x7aTvjkSUqztIF9Z-N27hJU8Y6hi41jEQ8UKNnYcDab0c2WMVcUTiuZNw0I5mSN8DPTJcBV3njGhO&vault=true" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'subscribe',
          
      },
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          'plan_id': 'P-78Y33393BH979094WL5MMJAQ'
        });
      },
      onApprove: function(data, actions) {
        alert(data.subscriptionID);
      }
  }).render('#paypal-button-container');
</script>
<? } else { ?>
<form action="myaccount.php" method="POST">
<input type="submit" name="24month" value="Choose This Plan">
</form>
<? } ?>

</div>

</div>









<section id="applyfinancialaid" class="doc-section">



</div><!--//section-block-->
</section><!--//doc-section-->







</div><!--//content-inner-->
</div><!--//doc-content-->






<div class="doc-sidebar hidden-xs">
<nav id="doc-nav">
<ul id="doc-menu" class="nav doc-menu" data-spy="affix">
<li><a class="scrollto" href="#ledger">Ledger/Balance</a> </li>
<li><a class="scrollto" href="#makeapayment">Make a Payment</a> </li>
</ul><!--//doc-menu-->
</nav>
</div><!--//doc-sidebar-->




</div><!--//doc-body-->
</div><!--//container-->
</div><!--//doc-wrapper-->

<? include 'footerad.php'; ?>

</div><!--//page-wrapper-->

<footer id="footer" class="footer text-center">
<div class="container">
<!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
<small class="copyright">Copyright &copy; <a href="https://jaxcodeacademy.com/">Jax Code Academy</a></small>

</div><!--//container-->
</footer><!--//footer-->


<!-- Main Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>


</body>
</html>
