<? session_start(); ?>




<!-- Modal -->
<div id="myModal24" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Promissory Note</h4>
      </div>
      <div class="modal-body text-left" id="printableArea">
        PROMISSORY NOTE<br><br>


            FOR VALUE RECEIVED, <?=$_SESSION['firstname']?> <?=$_SESSION['lastname']?>, (the "Maker"), hereby promises to pay to the order of Jax Code Academy Inc. ("Payee"), the principal sum of $5,400.00 pursuant to the terms and conditions set forth herein.<br><br>

            PAYMENT OF PRINCIPAL.  The principal amount of this Promissory Note (the "Note") shall be due and payable in 24 monthly installments beginning when the first payment is made by subscription via Paypal.<br><br>

            INTEREST.  This Note shall bear no interest.<br><br>

            PREPAYMENT.  The Maker shall have the right at any time and from time to time to prepay this Note in whole or in part without premium or penalty.<br><br>

            REMEDIES.  No delay or omission on part of the holder of this Note in exercising any right hereunder shall operate as a waiver of any such right or of any other right of such holder, nor shall any delay, omission or waiver on any one occasion be deemed a bar to or waiver of the same or any other right on any future occasion.  The rights and remedies of the Payee shall be cumulative and may be pursued singly, successively, or together, in the sole discretion of the Payee.<br><br>

            EVENTS OF ACCELERATION.  The occurrence of any of the following shall constitute an "Event of Acceleration" by Maker under this Note:<br><br>

            (a)        Maker's failure to pay any part of the principal or interest as and when due under this Note; or<br><br>

            (b)        Maker's becoming insolvent or not paying its debts as they become due.<br><br>

            ACCELERATION.  Upon the occurrence of an Event of Acceleration under this Note, and in addition to any other rights and remedies that Payee may have, Payee shall have the right, at its sole and exclusive option, to declare this Note immediately due and payable. <br><br>

            SUBORDINATION.  The Maker's obligations under this Promissory Note are subordinated to all indebtedness, if any, of Maker, to any unrelated third party lender to the extent such indebtedness is outstanding on the date of this Note and such subordination is required under the loan documents providing for such indebtedness.<br><br>

            WAIVERS BY MAKER.  All parties to this Note including Maker and any sureties, endorsers, and guarantors hereby waive protest, presentment, notice of dishonor, and notice of acceleration of maturity and agree to continue to remain bound for the payment of principal, interest and all other sums due under this Note notwithstanding any change or changes by way of release, surrender, exchange, modification or substitution of any security for this Note or by way of any extension or extensions of time for the payment of principal and interest; and all such parties waive all and every kind of notice of such change or changes and agree that the same may be made without notice or consent of any of them. <br><br>

            EXPENSES.  In the event any payment under this Note is not paid when due, the Maker agrees to pay, in addition to the principal and interest hereunder, reasonable attorneys' fees not exceeding a sum equal to 15% of the then outstanding balance owing on the Note, plus all other reasonable expenses incurred by Payee in exercising any of its rights and remedies upon default.<br><br>

            GOVERNING LAW.  This Note shall be governed by, and construed in accordance with, the laws of the State of Florida.<br><br>

            SUCCESSORS.  All of the foregoing is the promise of Maker and shall bind Maker and Maker's successors, heirs and assigns; provided, however, that Maker may not assign any of its rights or delegate any of its obligations hereunder without the prior written consent of the holder of this Note.<br><br>

            IN WITNESS WHEREOF, Maker has executed this Promissory Note as of the first payment.<br><br>



<?=$_SESSION['firstname']?> <?=$_SESSION['lastname']?> (BORROWER)<br>
Student ID: <?=$_SESSION['student_id']?>
<br><br>
      </div>
      <div class="modal-footer">
      <input type="button" class="btn btn-default" onclick="printDiv('printableArea')" value="Print" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>


<br><br>