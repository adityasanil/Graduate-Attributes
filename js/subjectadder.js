var numberse = numberte = numberbe = 0;

$(document).ready(function(){

  //add table row SEIT
  $(".add-subject-se").click(function(){
    ++numberse;
    $('#seittable').append('<tr><td>' + numberse +'</td><td><input type="text" class="form-control" placeholder="Enter the subject for SE" name="subject' + numberse + '"/></td><td><input type="button" class="btn btn-secondary btn-sm" value="Delete" id="subjectSE" /></td></tr>')
  });

  //add table row TEIT
  $(".add-subject-te").click(function(){
    ++numberte;
    $('#teittable').append('<tr><td>' + numberte +'</td><td><input type="text" class="form-control" placeholder="Enter the subject for TE" name="subject' + numberte + '"/></td><td><input type="button" class="btn btn-secondary btn-sm" value="Delete" id="subjectTE" /></td></tr>')
  });

  //add table row TEIT
  $(".add-subject-be").click(function(){
    ++numberbe;
    $('#beittable').append('<tr><td>' + numberbe +'</td><td><input type="text" class="form-control" placeholder="Enter the subject for BE" name="subject' + numberbe + '"/></td><td><input type="button" class="btn btn-secondary btn-sm" value="Delete" id="subjectBE" /></td></tr>')
  });

//remove table row SEIT
$('#seittable').on('click', 'input[id="subjectSE"]', function () {
$(this).closest('tr').remove();
})

//remove table row TEIT
$('#teittable').on('click', 'input[id="subjectTE"]', function () {
$(this).closest('tr').remove();
})

//remove table row BEIT
$('#beittable').on('click', 'input[id="subjectBE"]', function () {
$(this).closest('tr').remove();
})

});
