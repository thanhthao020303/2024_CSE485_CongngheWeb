<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>

    <link href="https://db.onlinewebfonts.com/c/a2a94cf6532d40147bda5a290f47801a?family=FFX+LCD" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body onload="generate()">
    <div class="container">

        <?php 
        // make input field
    function getInputField($title, $inputElement){
        return "
            <div class='input-field'>
                <label class='input-title'>$title:</label>
                <div class='input-field-element w-full'>
                $inputElement
                </div>
            </div>
        ";
    }
    // default input element
    function getInputTextElement( $name, $value="", $type="text", $placeholder = ""){
        return "<input type='$type' name='$name' class='form-input  w-full' placeholder = '$placeholder' value='$value' />";
    }
    // form create
    function createForm($title, $inputFields){
        $result = "
            <div class='form-item'>
                <h3 class='form-title'>$title</h3>";
        foreach($inputFields as $title => $inputElement){
                    $result .= getInputField($title, $inputElement);
                }
        echo $result."
            </div>
        ";
    }
    // genders
    $genderChild = "
            <div class='input-field-radio'>
    ";
    $genders = [
        "Male",
        "Female",
        "XXX",
        "YYY",
    ];
    foreach($genders as $item){
        $genderChild .= "<p class='input-field-radio-item'><input type='radio' name='gender' value='$item'/>$item </p><br/>";
    }
    $genderChild .= "</div>";
    // admins
    $admins = [
        "default","annie","minne","cindy","buddy"
    ];
    $adminElement = "<select name='admin' class='form-input>";
    foreach($admins as $item) {
        $adminElement .= "<option value='$item'>$item</option>";
    }
    $adminElement .= "</select>";
    $basicInfo = [
        "Employee ID" => "<p>9</p>",
        "Last Name"=> "Daniel",
        "First Name" => "<input type='text' name='firstName' class='form-input  w-full' value='Annie' />",
        "Gender" => $genderChild,
        "Title"=>"<input type='text' name='title' class='form-input  w-full' value='Fullstack Dev' />",
        "Suffix"=>getInputTextElement("suffix", "Mrs."),
        "Birth Date"=>getInputTextElement("birthDate", "2003-03-02", "date"),
        "Hire date"=>getInputTextElement("hireDate", "2021-01-02", "date"),
        "SSN # (if applicable)"=>getInputTextElement("ssn"),
        "Reports To"=>$adminElement
    ];
    // countries
    $countries = array (
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
    Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
    );
    $countryElement = "<select name='country' class='form-input>";
    foreach($countries as $item) {
        $countryElement .= "<option value='$item'>$item</option>";
    }
    $countryElement .= "</select>";
    $contactInfo = [
        "Email"=>getInputTextElement("email", "", "text", "name@example.com"),
        "Address"=>getInputTextElement("address", "Thanh Xuân"),
        "City"=>getInputTextElement("city", "Hà Nội"),
        "Region"=>getInputTextElement("region"),
        "Postal Code"=>getInputTextElement("postalCode"),
        "Country"=>$countryElement,
        "US Home Phone"=>getInputTextElement("homePhone","","tel","123-456-7890"),
        "Photo"=>getInputTextElement("photo",""),
    ];
    // optional
    // preferred shifts
    $preferredElem = "
            <div class='input-field-radio'>
    ";
    $prefers = [
        "Regular",
        "Gravy Card",
    ];
    foreach($prefers as $item){
        $preferredElem .= "<p class='input-field-radio-item'><input type='radio' name='role' value='$item'/>$item </p><br/>";
    }
    $preferredElem .= "</div>";
    $optionalInfo = [
        "Notes"=>"<div id='editor'></div>",
        "Preferred Shifts"=>$preferredElem,
        "Active"=>"<p class='input-field-radio-item'><input type='radio' name='active'/> </p>",
        "Are you human?"=>"<div class='captcha-box'>
			<div
				id='image'
				class='select-none'
				selectable='False'
			></div>
			<div
				class='change-btn select-none'
				onclick='generate()'
			>
				Click to change
			</div>
		</div>
		<div
			id='user-input'
			class='inline'
		>
			<input
				type='text'
				id='submit'
				class='form-input w-full'
				placeholder='Captcha code'
			/>
		</div>"
    ];
    $elements = [
        "Basic Info"=>$basicInfo,
        "Contact Info"=>$contactInfo,
        "Optional Info"=>$optionalInfo
    ];
    foreach ($elements as $key=>$value) {
        createForm($key, $value);
    }
    ?>
        <div class="footer">
            <div class="arrows">
                <div class="footer-btn-actions"><i class="fa-solid fa-angle-left"></i></div>
                <div class="footer-btn-actions"><i class="fa-solid fa-angle-right"></i></div>
            </div>
            <div class="actions">
                <div class="footer-btn-actions"><i class="fa-solid fa-floppy-disk"></i>
                    <p>Submit</p>
                </div>
                <div class="footer-btn-actions"><i class="fa-solid fa-x"></i>
                    <p>Cancel</p>
                </div>
            </div>
        </div>
        <b style="margin-top:8px;">* required</b>
    </div>
    <script src="captcha.js"></script>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    </script>

</body>

</html>