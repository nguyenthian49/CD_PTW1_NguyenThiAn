<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1500">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <label for="fname" class="folly">
                    Firts name&nbsp;<abbr class="required" title="required">*</abbr><br>
                    <span class="title">
                        <input type="text" id="fname" name="fname"><br>
                    </span>
                </label>
            </div>
            <div class="col-md-6">
                <label for="lname" class="folly">
                    Last name&nbsp;<abbr class="required" title="required">*</abbr><br>
                    <span class="title">
                        <input type="text" id="lname" name="lname"><br><br>
                    </span>
                </label>
            </div>
        </div><br>
        <div class="product-content">

            <form action="/action_page.php">
                <label for="company">COMPANY NAME (OPTIONAL)</label>
                <input type="text" id="company" name="company">

                <label for="country">COUNTRY / REGION <abbr class="required" title="required">*</abbr></label><br>
                <select id="country" name="country">
                    <option value="vietnam">Viet Nam</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    <option value="australia">Australia</option>
                    <option value="lao">Lao</option>
                    <option value="china">China</option>
                    <option value="korea">Korea</option>
                    <option value="peru">Peru</option>
                    <option value="combodia">Combodia</option>
                </select>

                <label for="lstreet"> STREET ADDRESS<abbr class="required" title="required">*</abbr></label>
                <input type="text" id="lstreet" name="street" placeholder="House number and street name">

                <label for="fpostcode">POSTCODE / ZIP (OPTIONAL)</label>
                <input type="text" id="fpostcode" name="postcode">

                <label for="ftown"> TOWN / CITY <abbr class="required" title="required">*</abbr></label>
                <input type="text" id="ftown" name="town">

                <label for="fphone"> PHONE<abbr class="required" title="required">*</abbr></label>
                <input type="text" id="fphone" name="phone">

                <label for="lemail"> Email Address<abbr class="required" title="required">*</abbr></label>
                <input type="text" id="lemail" name="email">
            </form>
        </div>
        <div class="checkbox">
            <form action="/action_page.php" class="blos">
                <input type="checkbox" id="myCheck" onclick="myFunction()" value="Ship" class="aaa">
                <i class="fa fa-truck" aria-hidden="true"></i> SHIP TO A DIFFERENT
                ADDRESS?<br>

            </form><br>
            <div class="container" id="text" style="display:none">
                <div class="row">
                    <div class="col-md-6">
                        <label for="tname" class="folly">
                            Firts name&nbsp;<abbr class="required" title="required">*</abbr><br>
                            <span class="title">
                                <input type="text" id="tname" name="tname"><br>
                            </span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label for="hname" class="folly">
                            Last name&nbsp;<abbr class="required" title="required">*</abbr><br>
                            <span class="title">
                                <input type="text" id="hname" name="hname"><br><br>
                            </span>
                        </label>
                    </div>
                    <form action="/action_page.php">
                        <label for="companyname">COMPANY NAME (OPTIONAL)</label>
                        <input type="text" id="companyname" name="company">

                        <label for="country1">COUNTRY / REGION <abbr class="required"
                                title="required">*</abbr></label><br>
                        <select id="country1" name="country">
                            <option value="vietnam">Viet Nam</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                            <option value="australia">Australia</option>
                            <option value="lao">Lao</option>
                            <option value="china">China</option>
                            <option value="korea">Korea</option>
                            <option value="peru">Peru</option>
                            <option value="combodia">Combodia</option>
                        </select>

                        <label for="laddress"> STREET ADDRESS<abbr class="required" title="required">*</abbr></label>
                        <input type="text" id="laddress" name="lastname" placeholder="House number and street name">

                        <label for="fzip">POSTCODE / ZIP (OPTIONAL)</label>
                        <input type="text" id="fzip" name="firstname">

                        <label for="lcity"> TOWN / CITY <abbr class="required" title="required">*</abbr></label>
                        <input type="text" id="lcity" name="lastname">

                        <label for="lname1"> PHONE<abbr class="required" title="required">*</abbr></label>
                        <input type="text" id="lname1" name="lastname">

                        <label for="lnameemail"> Email Address<abbr class="required" title="required">*</abbr></label>
                        <input type="text" id="lnameemail" name="lastname">
                    </form>
                </div>
            </div>
            <div class="textaria">
                <form action="/action_page.php">
                    ORDER NOTES (OPTIONAL)<br><br>
                    <textarea name="order_comments" class="input-text " id="order_comments"
                        placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"
                        style="margin: 0px; width: 800px; height: 92px;"></textarea>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true) {
        text.style.display ="block";
    } else {
        text.style.display ="none";
    }
}
</script>