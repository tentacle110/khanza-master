$("#paste-tab").hide();
function menu_active(){
$("#copy-tab").clone().find(".data-menu").each(function(){
 $(this).appendTo("#paste-tab");
});
$("#copy-tab").hide();
$("#paste-tab").show()
}

function menu_nonactive(){
  $("#searchkey").val("");
  $("#copy-tab").show();
 $("#paste-tab").hide().html("");

}



  var search_open = false;
  function btn_search(){
    var cari = document.getElementById('pencarian');
    var ikon = document.getElementById('ikon-cari');
    if(search_open){
      menu_nonactive();
      cari.style.width = "0";
      ikon.className = "fa fa-search text-primary p-2 border rounded-circle";
      search_open = false;
    }else{
      menu_active();
      cari.style.width = "70%";
      ikon.className = "fa fa-times-circle text-danger p-2 border rounded-circle";
      search_open = true;
    }
  }


          $(document).ready(function () {
              $("#searchkey").on("keyup", function () {
    if (this.value.length > 0) {
        $("#paste-tab").children(".data-menu").hide().filter(function () {
        return $(this).find(".d-block").text().toLowerCase().indexOf($("#searchkey").val().toLowerCase()) >= 0;
      }).show();
    }
    else {
        $("#paste-tab").children(".data-menu").show();
    }
    });

    });
