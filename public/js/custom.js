$(function(){

    // item draggable
    $(".item-info").draggable({
        helper: 'clone',
        cursor: "move"
      });
    
    // item droppable
    $("#myList1").droppable({
        accept: ".item-info",
        drop: function(event, ui) {
          $(this).append($(ui.draggable).clone());
          $("#myList1 .item-info").addClass("new_item");
          $(".new_item").removeClass("ui-draggable item-info");
          $(".new_item").resizable({
            handles: "all",
            autoHide: true
          });
          $(".new_item").draggable({});
        }
  
    });
    // reset item
    $( "#reset_item").click(function(e) {
        $(".new_item:last").remove();
    });
  
    //add signature 
    var sign = $('#singPad').signature({
        syncField:'#signature',
        syncFormat:'PNG'
    })

    // clear signature
    $("#clear").on("click", function(e){
        e.preventDefault();
        sign.signature('clear');
        $('#signature').val('');
    });

    // save html input field
    $('#save_item').on('click', function(){
        let content=$('.signature-content').html();
        $('#content').val(content);
    })

    $('.form-check>input').change(function () {
        var chk = $(".form-check>input")
        var IsChecked = chk[0].checked
        if (IsChecked) {
         chk.attr('checked', 'checked')
         console.log('true');
        } 
        else {
         chk.removeAttr('checked');
         console.log('false');                          
        }
        chk.attr('value', IsChecked);
    });

    // save content pdf
    $('#save_content').on('click', function(e){
        // e.preventDefault();
        $('input,checkbox').each(function() {
            if($(this).is("[type='checkbox']") || $(this).is("[type='checkbox']")) {
                let checkMark = $(this).val();
                $(this).attr("value", checkMark);
                console.log("isChecked==>" + $(this).attr("checked"));
            }else{
                let inputVal = $(this).val();
                $(this).attr("value", inputVal);
            }

        });
        let content=$('.content-body').html();
        $('#contents').val(content);
        
    })
    

})

