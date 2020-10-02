$(document).ready(function() {
    $(".role-tabs li").click(function() {
        $(".role-tabs li").removeClass("active")
        $(this).addClass('active')

        if ($(this).text() == 'Candidate') {
            $(".company_name").hide();

        } else if ($(this).text() == 'Employer') {
            $(".company_name").show();

        }
    })
})