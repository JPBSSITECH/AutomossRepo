function add_line(taker,filler) {
    var ppp = "pp_"+Math.floor(100000 + Math.random() * 900000);
    var ttt=  $("#"+taker).html();


    
    var $div = $('<div>').html(ttt);    
    $div.find('.slim').parent().html(`<div style="width:300px; height:300px;"><input type="file" 
                        name="thumb_in[]" id="myCropper_`+ppp+`"/></div>`);
    $div.find('.slim').remove();
    var ttt_out = $div.html();






    var m =`
            <div class="row" id="`+ppp+`">
                <div class="col-md-11" >
                    `+ttt_out+` 
                </div>
                <div class="col-md-1" style="padding-top:0;"> 
                    <span class="btn btn-danger"style="float: left;margin-top: 28px;" 
                    onclick="remove_line('`+ppp+`')"><i class="fa fa-trash" aria-hidden="true"></i></span>
                </div>
            </div>
    `;

     
     

    $("#"+filler).append(m);
    new Slim(document.getElementById('myCropper_'+ppp),{
        ratio: '1:1',
        minSize: {
            width: 300,
            height: 300,
        }
    });
}
function remove_line(vv) {
    $("#"+vv).remove();
}


$(document).ready(function() {
    $("#mmform").validate();  
    $('.crudseelct2').select2();
    // $('form').submit(function() {
    //     console.log('----dis start---------'); 
    //     $('#submitButton').prop('disabled', true);
    //     console.log('----dis end---------'); 

    //     return true;  
    // }); 



    $('form').submit(function (event) {
        // Check if all required fields are filled
        let isValid = true; // Assume the form is valid initially

        // Iterate over all required fields in the form
        $(this).find('[required]').each(function () {
            if (!$(this).val().trim()) { // Check if the field is empty
                isValid = false; // Mark form as invalid
                $(this).addClass('error'); // Add an error class (optional, for styling)
            } else {
                $(this).removeClass('error'); // Remove error class if valid
            }
        });

        // If form is invalid, prevent submission and show an alert or error message
        if (!isValid) {
            event.preventDefault(); // Prevent form submission
            alert('Please fill in all required fields.');
            return false; // Exit the function
        }

        // console.log('----dis start---------');
        // $('#submitButton').prop('disabled', true); // Disable the button only if valid
        // console.log('----dis end---------');

        return true; // Allow form submission
    });







    CKEDITOR.replaceClass = 'ckeditor';     
    $(".urlmaker_source").each(function() { 
        var source_id = $(this).attr('id');   
        var dest_id = source_id+'_url_dest';  


        $("#"+source_id).keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace('/\s/g','-');
            Text = Text.replace(/ /g,'-');
            Text = Text.replace(/[^\w-]+/g,'');
            Text = Text.replace(/-{2,}/g, '-');
            $("#"+dest_id).val(Text);    
        });
    })
});
