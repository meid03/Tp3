

<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_2AcZU8tWRsKnFo0sBmk7en8w",
  "publishable_key" => "pk_test_FoNMWRsvAWPPpY3uMqKqRXXk"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-amount="5000" data-description="One year's subscription"></script>
</form>

<?php require_once('/path/to/stripe-php/init.php'); ?>