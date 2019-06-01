$(document).ready(function(){
  // side enquiry form
  $('.sideFormOpen').click(function(){
    $('.sideForm form').slideToggle(300);
  });
  // side enquiry form ends

  $('.newSidebar .linksWrap > i').click(function(){
    if ($(this).parent().hasClass('openSideinnerLinks')) {
      $(this).next('.innerSidebarLists').slideUp();
      $(this).parent().removeClass('openSideinnerLinks');
    }
    else{
      $(this).next('.innerSidebarLists').slideDown();
      $(this).parent().addClass('openSideinnerLinks');
    }
  })
  if($('.sideNavActive').hasClass('hasSubNavs')){
    $('.icon-patronPlus').addClass('icon-patronMinus');
  }
  $('.openTeamInfo').click(function(){
    if ($(this).parent().hasClass('activeInfo')) {
      $(this).parent().removeClass('activeInfo');
    }
    else{
      $(this).parent().addClass('activeInfo');
    }
  });
  $('.morePatron').click(function(){
    if ($(this).parents("li").hasClass('hasSubNavs')) {
      $(this).parents("li").removeClass('hasSubNavs ');
      $('.patron + ul').slideUp();
      $('.icon-patronPlus').removeClass('icon-patronMinus');
    }
    else{
      $(this).parents("li").addClass('hasSubNavs');
      $('.icon-patronPlus').addClass('icon-patronMinus');
      $('.patron + ul').slideDown();
    }
    return false
  });

  $('#tourFrm').validate({
    rules: {
      name: {
        required: true,
        validName: true
      },
      emailId: {
        required: true
      },
      contactNo: {
        required: true,
        number: true,
        maxlength : 15
      },
      schoolName: {
        required: true,
      },
      board:{
        required: true
      },
      year:{
        required: true,
        number: true
      },
      groupSize: {
        required:true,
        number:true
      },
      transportMode: {
        required:true,
      },
      visitDate:{
        required:true
      }
    },
    messages: {
      name: {
        required: "Name is required",
        validName: "Only letters are allowed"
      },
      emailId: {
        required: "Email is required",
        email: "Please enter a valid email address."
      },
      contactNo: {
        required: "Phone no. is required",
        number: "Only numbers are allowed",
        maxlength : "Maximum 15 numbers are allowed"
      },
      schoolName: {
        required: "School Name is required"
      },
      board:{
        required: "Board is required"
      },
      year:{
        required: "Year is required",
        number: "Only numbers are allowed"
      },
      groupSize:{
        required:"Group size is required",
        number: "Only numbers are allowed"
      },
      transportMode:{
        required:"Transport mode is required"
      },
      visitDate:{
        required:"Visit Date is required",
      }
    }

  });

  $('#connectSchool').validate({
    rules: {
      fullName: {
        required: true,
        validName: true
      },
      emailId: {
        required: true
      },
      contactNo: {
        required: true,
        number: true,
        maxlength : 15
      },
      schoolName: {
        required: true,
      },
      city:{
        required: true
      },
    },
    messages: {
      fullName: {
        required: "Name is required",
        validName: "Only letters are allowed"
      },
      emailId: {
        required: "Email is required",
        email: "Please enter a valid email address."
      },
      contactNo: {
        required: "Phone no. is required",
        number: "Only numbers are allowed",
        maxlength : "Maximum 15 numbers are allowed"
      },
      schoolName: {
        required: "School Name is required"
      },
      city:{
        required: "Board is required"
      }
    }

  });

  $('#brochureFrm').validate({
    rules: {
      fname: {
        required: true,
        validName: true
      },
      lname: {
        required: true,
        validName: true
      },
      emailId: {
        required: true
      },
      contactNo: {
        required: true,
        number: true,
        maxlength : 15
      },
      country: {
        required: true,
      },
      purpose:{
        required: true
      },
    },
    messages: {
      fname: {
        required: "First Name is required",
        validName: "Only letters are allowed"
      },
      fname: {
        required: "Last Name is required",
        validName: "Only letters are allowed"
      },
      emailId: {
        required: "Email is required",
        email: "Please enter a valid email address."
      },
      contactNo: {
        required: "Phone no. is required",
        number: "Only numbers are allowed",
        maxlength : "Maximum 15 numbers are allowed"
      },
      country: {
        required: "Country Name is required"
      }
    }

  });

  $('.brochureBtn').on('click', function(){
    //$('#brochureFrm').reset();
    var valid = $('#brochureFrm').valid();

    if(valid == true) {
      $('#brochureFrm').hide();
      $('#submitSuccess').text('Your Information is submitted successfully.');
      $('#downloadLinks > a').attr("disabled", false);
    }
  });
});

$.validator.addMethod("validName",
    function (value, element) {
      return /^[a-zA-Z ]*$/.test(value);
    },
    "Sorry, no special characters and numbers are allowed"
);