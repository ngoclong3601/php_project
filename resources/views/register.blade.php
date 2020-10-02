<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{('asset/css/home.css')}}"/>
    
</head>
<body>
    <form action="/register" method="POST" name="registerForm" class="register-form">
        @csrf
        <div id="apus_register_form" class="tab-pane fade in active">
        <div class="box-employer box-account">
            <div class="register-form-wrapper">
            <div class="container-form">
                <h3 class="title">Create an Account</h3>
                <div class="text-center ">
                <ul class="role-tabs flex-middle">
                    <li class="active"><input id="cadidate" type="radio" name="role" value="wp_job_board_candidate" checked="checked"><label for="cadidate">Candidate</label></li>
                    <li class=""><input type="radio" id="employer" name="role" value="wp_job_board_employer"><label for="employer">Employer</label></li>
                </ul>
                </div>
                <div class="inner-register">
                <div class="form-group">
                    <label class="hidden">Username *</label>
                    <input type="text" class="form-control" name="username" id="register-username" placeholder="Username *">
                </div>
                <div class="form-group">
                    <label class="hidden">Email *</label>
                    <input type="text" class="form-control" name="email" id="register-email" placeholder="Email *">
                </div>
                <div class="form-group">
                    <label class="hidden">Password *</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password *">
                </div>
                <div class="form-group">
                    <label class="hidden">Confirm Password *</label>
                    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password *">
                </div>
                <div class="form-group wp_job_board_employer_show" style="display: none;">
                    <label class="hidden">Company Name</label>
                    <input type="text" class="form-control" name="company_name" id="register-company-name" placeholder="Company Name">
                </div>
                <div class="form-group">
                    <label class="hidden">Phone</label>
                    <input type="text" class="form-control" name="phone" id="register-phone" placeholder="Phone">
                </div>
                <div class="form-group space-25 wp_job_board_candidate_show select2-wrapper">
                    <select id="register-candidate-category" class="register-category" name="candidate_category">
                    <option value="">Select Category</option>
                    <option class="118">Accounting / Finance</option>
                    <option class="119">Automotive Jobs</option>
                    <option class="120">Education Training</option>
                    </select>
                </div>
                <div class="form-group space-25 wp_job_board_employer_show select2-wrapper " style="display: none;">
                    <select id="register-employer-category" class="register-category" name="employer_category">
                    <option value="">Select Category</option>
                    <option class="110">Accounting / Finance</option>
                    <option class="111">Automotive Jobs</option>
                    <option class="112">Education Training</option>
                    </select>
                </div>
                <input type="hidden" id="security_register" name="security_register" value="05128bc18f"><input type="hidden" name="_wp_http_referer" value="/workio/home-4/">
                <div class="form-group">
                    <label for="register-terms-and-conditions">
                    <input type="checkbox" name="terms_and_conditions" value="on" id="register-terms-and-conditions">
                    You accept our <a href="https://www.demoapus-wp1.com/workio/privacy-policy/">Terms and Conditions and Privacy Policy</a>							</label>
                </div>
                <div class="form-group space-20">
                    <button type="submit" class="btn btn-theme btn-block" name="submitRegister">
                    Register now						</button>
                </div>
                <div class="create-account text-center">
                    Already Have an Account? <a href="https://www.demoapus-wp1.com/workio/login-register/" class="create">Sign In</a>					
                </div>
                </div>
    
                </div>
            </div>
            </div>
        </div>
    </form>

</body>
</html>