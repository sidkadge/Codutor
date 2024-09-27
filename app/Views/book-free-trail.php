<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codutor</title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style>
        /* Optional: To show error message styling */
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Free Trial Class</h1>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="error"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <form id="trialForm" action="<?= base_url('book-free-trail'); ?>" method="post">
 
            <div class="form-group">
                <input id="phone" name="phone" type="tel" placeholder="Enter your mobile number" required>
                <div id="phoneError" class="error"></div> 
            </div>

            <div class="form-group">
                <select id="age_group" name="age_group" required>
                    <option value="" disabled selected>Select age group</option>
                    <option value="5-8">5-8</option>
                    <option value="8-10">8-10</option>
                    <option value="10-12">10-12</option>
                    <option value="12-15">12-15</option>
                </select>
            </div>

            <div class="form-group">
                <input type="date" id="trial_date" name="trial_date" required>
            </div>

            <button id="btn" type="submit">Get Free Trail</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                fetch('https://ipinfo.io?token=your_token_here') 
                    .then(response => response.json())
                    .then(data => callback(data.country))
                    .catch(() => callback('us')); 
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });

        // Validate the phone number
        document.getElementById("trialForm").addEventListener("submit", function(e) {
            const phoneNumber = phoneInput.getNumber(); 
            const countryData = phoneInput.getSelectedCountryData(); 
            
            if (!phoneInput.isValidNumber()) {
                e.preventDefault();
                document.getElementById("phoneError").innerText = "Invalid phone number.";
                return; 
            }

            const phoneLength = phoneNumber.replace(/\D/g, '').length; 

            if (phoneLength < countryData.minLength || phoneLength > countryData.maxLength) {
                e.preventDefault();
                document.getElementById("phoneError").innerText = `Phone number must be ${countryData.minLength} to ${countryData.maxLength} digits long.`;
                return; 
            }

            document.getElementById("phoneError").innerText = "";
        });

        // Set minimum date to tomorrow
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1); // Add one day to today's date
        const minDate = tomorrow.toISOString().split("T")[0];
        document.getElementById("trial_date").setAttribute("min", minDate);
    </script>
</body>
</html>
