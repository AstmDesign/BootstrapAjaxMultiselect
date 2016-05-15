$(document).ready(function () {
  $(".btnSubmit").on('click',(function(event) {
    var formData = new FormData($('#myForm')[0]);
    $.ajax({
      url: "action.php",
      type: "POST",
      data: formData,
      contentType: false,
      cache: false,
      processData:false,
      success: function(data)
      {
        $("#result").html(data);

        // To clear the selected options
        var select = $("#example-getting-started");
        select.children().remove();
        if (data.d) {
          $(data.d).each(function(key,value) {
            $("#example-getting-started").append($("<option></option>").val(value.State_id).html(value.State_name));
          });
        }
        $('#example-getting-started').multiselect({includeSelectAllOption: true});
        $("#example-getting-started").multiselect('refresh');

      },
      error: function()
      {
        console.log("failed to send the data");
      }
    });
  }));
});
