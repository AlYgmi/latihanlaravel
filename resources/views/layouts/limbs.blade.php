<!-- Bootstrap's JavaScript --> 
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 

<!-- Owl carousel --> 
<script src="{{ asset('js/owl.carousel.js') }}"></script> 
<script src="{{ asset('js/owl.carousel2.thumbs.min.js') }}"></script> 

<script src="{{ asset('js/jquery-easyautocomplete/jquery.easy-autocomplete.min.js') }}"></script>

<script src="{{ asset('js/fancybox/jquery.fancybox.js') }}" type="text/javascript"></script> 

<!-- Custom js --> 
<script src="{{ asset('js/script.js') }}"></script>

<script type="text/javascript">
  var options = {

    url: function(phrase) {
      return "/ajax/kota/"+phrase;
    },

    getValue: function(element) {
      return element.text;
    },
    
    list: {
      onChooseEvent: function(){
        valguruid   = $(".easy-autocomplete-container ul li.selected a.guruselect").attr("data-code");
        $("#KodeKota").val(valguruid);
        $(".mapscontent").remove();
        $("#maps").load( "/maps);
        
      }
    },
    
    template: {
      type: "custom",
      method: function(value, item) {
        return "<a href='javascript:;' class='guruselect' data-code='"+ item.code +"'>"+ value +"</a>";
      }
    },

    ajaxSettings: {
      dataType: "json",
      method: "POST",
      data: {
        dataType: "json"
      }
    },
    
    preparePostData: function(data) {
      data.phrase = $("#chooseguru").val();
      return data;
    },

    requestDelay: 1
  };

  $("#chooseguru").easyAutocomplete(options);


  if($(".owl-detailimg .item").length > 1){
    $('.owl-detailimg').owlCarousel({
      loop: true,
      nav: false,
      autoplay: 3000,
      items: 1,
      thumbs: true,
      thumbImage: true,
      thumbContainerClass: 'owl-thumbs',
      thumbItemClass: 'owl-thumb-item',
      dots: true
    });
  }
  $('.fancybox').fancybox();
</script>
<script type="text/javascript" src="{{ asset('js/datetimepicker/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('js/datetimepicker/bootstrap-datetimepicker.id.js') }}" charset="UTF-8"></script>
<script type="text/javascript">
 $('.form_date').datetimepicker({
  language:  'id',
  weekStart: 1,
  todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
});

$(document).on('click','#SearchProp',function(){
  $(".searchpropcontent").show();
  $("#ChoosePropinsi").show();
  $("#ChooseKota").hide();
  $("body").append('<div class="overlay"></div>');
});

$(document).on('click','#CloseSearchProp',function(){
  $(".searchpropcontent").hide();
  $(".overlay").remove();
  $(".listkota").html("");
});

$("#ChoosePropinsi li").click(function(){
  $("#ChoosePropinsi").hide();
  $(".listkota").html("");
  var valkodeprop = $(this).attr("data-id");
  $.ajax({
    type:'GET',
    url: '/ajax/kotasearch',
    data: {"kodepropinsi": valkodeprop},
    cache : false,
    success : function(datasearchkota){
      $(".listkota").html("");
      $("#ChooseKota").show();
      $(".listkota").append(datasearchkota);
    }
    
  });
});
$(document).on('click','#BackToProp',function(){
  $("#ChoosePropinsi").show();
  $("#ChooseKota").hide();
  $(".listkota").html("");
});
$(document).on('click','#ChooseKota li',function(){
  var valkodekota = $(this).attr("data-id");
  var valnamakota = $(this).text();
  $("#KodeKota").val(valkodekota);
  $("#chooseguru").val(valnamakota);
  $("#SearchProp").val(valnamakota);
  $(".listkota").html("");
  $(".searchpropcontent").hide();
  $(".overlay").remove();
  $(".mapscontent").remove();
  $("#maps").load( "/maps);
  });

var heightcat = $(".categorylist").innerHeight();
$(".categorylist>li ul").css("height",heightcat);
</script>
