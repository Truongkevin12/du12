
@extends('layout')
@section('content')
<body class="innovation-index-index page-layout-1column">
<div class="container"><div class="innovation-top"> <link rel="stylesheet" type="text/css" href="https://didongviet.vn/statics/css/remarkinnovation.css?1664357594">
   <div class="modal-innovation" id="modal_step">
       <div class="bg"></div>
       <div class="box">
           <div class="box-head">
               <span class="title-1">Chọn dòng máy bạn đang sử dụng</span>
               <span class="title-2">Báo giá thu máy cũ theo tình trạng máy</span>
               <span class="title-3">Chọn dòng máy bạn cần lên đời</span>
               <span class="title-4">Đăng ký lên đời</span>
               <button onclick="return removeModal();" class="box-close">&nbsp;</button>
           </div>
           <div class="box-body">
               <div class="group-box-modal" id="group-step-1"></div>
               <div class="group-box-modal" id="group-step-2"></div>
               <div class="group-box-modal" id="group-step-3"></div>
               <div class="group-box-modal" id="group-step-4"></div>
               <div class="group-box-modal" id="group-step-5"></div>
           </div>
       </div>
   </div><div class="tradein-top-banner">
       <div class="row mt-16">
           <div class="bottom-banner bottom-banner-left col-md-8">
                                           <div class="item text-center">
                       <a href="https://didongviet.vn/dchannel/trade-in-thu-cu-doi-moi-tai-di-dong-viet-gia-thu-tot-nhat-thi-truong-tang-them-den-1-trieu-dong-nhan-thu-tat-ca-cac-doi-may-tham-dinh-may-chi-3-5-phut/">
                           <img alt="" src="https://cdn.didongviet.vn/pub/media/mageplaza/bannerslider/banner/image/t/r/tradein-1trieu.jpg">
                       </a>
                   </div>
                       </div>
           <div class="banner-left col-md-4">
                                           <div class="item text-center">
                       <a href="https://didongviet.vn/iphone-13">
                           <img alt="" src="https://cdn.didongviet.vn/pub/media/mageplaza/bannerslider/banner/image/4/8/480x157_26.jpg">
                       </a>
                   </div>
                                                       <div class="item text-center mt-16">
                       <a href="https://didongviet.vn/trade-in#iphone">
                           <img alt="" src="https://cdn.didongviet.vn/pub/media/mageplaza/bannerslider/banner/image/4/8/480x157---2.jpg">
                       </a>
                   </div>
                       </div>
       </div>
   </div></div><div class="innovation-content"><div id="step" class="step-wrapper mt-16">
       <h1 class="title-wrapper">3 bước để thu cũ đổi mới</h1>
       <hr>
       <div class="content-box">
        
             
           <div class="bn-ld"><img src="https://didongviet.vn/assets/images/tradein/tradein1x-min.png"></div>
          
       </div>
   </div><!-- <div id="return-product hidden">
        
        <div class="box-note"> <h2>Định giá máy cũ tham khảo</h2>
   <p>Định giá máy cũ giúp bạn dễ dàng tính toán xem máy của mình bán lại được bao nhiêu. Hãy chọn danh mục và sản phẩm bạn muốn định giá cùng tình trạng máy hiện tại của bạn. Hệ thống sẽ tự động gửi mức giá tương ứng, lưu ý mức giá này chỉ mang tính tham khảo. Nếu không tìm thấy máy của mình trong danh sách, vui lòng gửi yêu cầu định giá tại đây.</p>
   <p><a class="btn" href="#">Yêu cầu định giá</a></p></div> 
   
       <div class="grid-product">
               <div class="grid-header">
                                                       <a class="tab-product" href="#" data-product="1">
   
                                   <span class="image"><img src="https://didongviet.vn/pub/media/efw/landingpage/image//t/r/tradein-cat-iphone.png"/></span>
                                   <span class="text">iPhone</span></a>
   
                                                       <a class="tab-product" href="#" data-product="2">
   
                                   <span class="image"><img src="https://didongviet.vn/pub/media/efw/landingpage/image//t/r/tradein-cat-samsung.png"/></span>
                                   <span class="text">Samsung</span></a>
   
                                                       <a class="tab-product" href="#" data-product="3">
   
                                   <span class="image"><img src="https://didongviet.vn/pub/media/efw/landingpage/image//t/r/tradein-cat-macbook.png"/></span>
                                   <span class="text">Macbook</span></a>
   
                                                       <a class="tab-product" href="#" data-product="4">
   
                                   <span class="image"><img src="https://didongviet.vn/pub/media/efw/landingpage/image//t/r/tradein-cat-ipad.png"/></span>
                                   <span class="text">iPad </span></a>
   
                                                       <a class="tab-product" href="#" data-product="5">
   
                                   <span class="image"><img src="https://didongviet.vn/pub/media/efw/landingpage/image//t/r/tradein-cat-aw.jpg"/></span>
                                   <span class="text">Apple Watch</span></a>
   
                                       </div>
               <div class="grid-body grid-return box-flex grid-lp-1">
                   
               </div>
       </div>
   
   </div> -->
   
   
   
   
   
   <script type="text/template" id="template-suggest">
       <li>
           <div class="item-product item "><div class="inner">
               <a href="javascript:void(0)" onclick="nextCalculator(this);return false;">
               
                   {{-- <img src="{{thumb}}" alt="{{name}}">
              
                   <h4 class="name" title="{{name}}">{{name}}</h4> --}}
   
                   {{-- <input type="hidden" name="price_full" value="{{price_full}}"/>
                   <input type="hidden" name="criteria" value="{{criteria}}"/>
                   <input type="hidden" name="price" value="{{price_origin}}"/>
                   <input type="hidden" name="product_id" value="{{product_id}}"/> --}}
               </a>
           </div></div>
       </li>
   </script>
   <div id="box-setting">
       <div class="title-inside">
           <h2 class="innovation-title uppercase">Tình trạng máy bạn đang sử dụng</h2>
       </div>
       <div class="setting-body">
           <div id="calculator">
               <div class="cal-product">
                   <div class="cal-image">
                       <img src="">
                       <input type="hidden" name="price">
                       <input type="hidden" name="criteria">
                       <input type="hidden" name="product_id">
                       <input type="hidden" name="is_iphone">
                       <input type="hidden" name="price_full">
                   </div>
                   <div class="cal-info">
                       <h4></h4>
                       <div class="list-option">
                           <div class="setting-product">
                                                   </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   </div>
   <script type="text/javascript">
       var clickOpen=0;
       var clicking=0;
       function calculatorItem(obj)
       {
          
           $this=jQuery(obj);
           clicking=1; 
   
           jQuery(".setting-product .item-option").removeClass("active");
   
           jQuery(".setting-product").find("input[type='checkbox']").attr("checked",false);
   
           $this.addClass("active");
   
           $this.find("input").attr("checked",true);
    
           $percent=$this.data("percent");
           $price=jQuery(".cal-product input[name='price']").val();
           $product_id=jQuery(".cal-product input[name='product_id']").val();
           $price_full=jQuery(".cal-product input[name='price_full']").val();
           $criteria=jQuery(".cal-product input[name='criteria']").val();
           jQuery("#frmSubmit input[name='setting']").val(jQuery(obj).data("setting"));
           jQuery("#frmSubmit input[name='setting_name']").val(jQuery(obj).data("name"));
           jQuery("#frmSubmit input[name='percent']").val($percent);
           $setting_ids="";
           $i=0;
           jQuery(".setting-product").find(".active").each(function(){
               if($i) $setting_ids+=",";
               $setting_ids+=jQuery(obj).find('input[name="setting"]').val();
               $i++;
           });
           if(!$i)
           {
               resetCalculator(0);
               return ;
           }
           jQuery.ajax({
               url:"https://didongviet.vn/innovation/ajax/calculator",
               type:"POST",
               beforeSend:function(){
                   jQuery('.box-help').remove();
               },
               data:{price_full:$price_full,pid:jQuery(obj).data("pid"),product_id:$product_id,price:$price,percent:$percent,setting:$setting_ids,criteria:$criteria},
               dataType:"json",
   
               success:function(data){
                   if(data.price=="0") {
                       $price='Liên hệ';
                                   //jQuery("#price-calc").html('Liên hệ');
                   } else {
                       $price=data.price;
                       //jQuery("#price-calc").html(data.price);
                   }
                   jQuery("#frmSubmit input[name='price']").val(data.price);
                   jQuery("#frmSubmit input[name='price_origin']").val(data.price_origin);
   
                   {
                       //jQuery(".tab-product-renew:eq(0)").trigger("click");
                       //clickOpen=1;
                   }
                   $html_note='';
                   $toolbar='<div class="toolbar">';
                   
                   if(!isDirectTradein())
                       $toolbar+='<a onclick="return buttonSellProduct();" href="#">Bán máy</a>';
                       $toolbar+='<a onclick="return buttonTradein();" class="btn-tradein" href="#">Lên đời máy</a>';    
                   $toolbar+='</div>';
                   $html='<div class="box-product-tradein"><div class="image"><img src="'+data.image+'"/></div><div class="info"><h3>'+data.name+'</h3><p>Giá thu tham khảo: <strong>'+$price+'</strong></p>'+$toolbar+'</div></div>';
   
                   if(data.note)
                   {
   
                       $heading='<h4>Tiêu chí đánh giá '+$this.find('span').html()+'</h4>';
                       $html_note+='<div class="box-help"><div class="inner">'+$heading+data.note+'</div></div>';
                   }
   
                   
   
                   //jQuery("#price-calc").show();
                   //jQuery("#renew-product").show();
                   jQuery("#result-price").html($html).fadeIn();
                   jQuery(".setting-product").after($html_note);
                   jQuery('.box-body').animate({scrollTop:300},500);
   
               }
           })
           return false;
       } 
       function btnTradein()
       {
   
       }
       /*require(['jquery'],function(){
           jQuery(document).ready(function($){
               var clickOpen=0;
               var clicking=0;
                $("#calculator").on('click','.item-option',function(){
                   $(this).click(function(e){
                        
                       e.preventDefault();
                       clicking=1; 
                       if($(this).hasClass("active"))
                       { 
                           $(this).removeClass("active");
                           $(this).find("input").attr("checked",false);
                       }
                       else
                       { 
                           $(this).addClass("active");
                           $(this).find("input").attr("checked",true);
                       }
                       
                       $percent=$(this).data("percent");
                       $price=jQuery(".cal-product input[name='price']").val();
                       $product_id=jQuery(".cal-product input[name='product_id']").val();
                       $price_full=jQuery(".cal-product input[name='price_full']").val();
                       $criteria=jQuery(".cal-product input[name='criteria']").val();
                       jQuery("#frmSubmit input[name='setting']").val($(this).data("setting"));
                       jQuery("#frmSubmit input[name='setting_name']").val($(this).data("name"));
                       jQuery("#frmSubmit input[name='percent']").val($percent);
                       $setting_ids="";
                       $i=0;
                       $(".setting-product").find(".active").each(function(){
                           if($i) $setting_ids+=",";
                           $setting_ids+=$(this).find('input[name="setting"]').val();
                           $i++;
                       });
                       if(!$i)
                       {
                           resetCalculator(0);
                           return ;
                       }
                       jQuery.ajax({
                           url:"https://didongviet.vn/innovation/ajax/calculator",
                           type:"POST",
                           data:{price_full:$price_full,product_id:$product_id,price:$price,percent:$percent,setting:$setting_ids,criteria:$criteria},
                           dataType:"json",
   
                           success:function(data){
                               if(data.price=="0") 
                                   jQuery("#price-calc").html('Liên hệ');
                               else
                                   jQuery("#price-calc").html(data.price);
                               jQuery("#frmSubmit input[name='price']").val(data.price);
                               jQuery("#frmSubmit input[name='price_origin']").val(data.price_origin);
                                
                               {
                                   jQuery(".tab-product-renew:eq(0)").trigger("click");
                                   clickOpen=1;
                               }
                               jQuery("#price-calc").show();
                               jQuery("#renew-product").show();
                               jQuery('html,body').animate({scrollTop:jQuery("#result-price").offset().top},500);
   
                           }
                       })
                       return false;
                   });
                });
           });
       })*/
      
   </script>
   <form id="frmSubmit">
       <input type="hidden" name="product_return">
       <input type="hidden" name="product_return_name">
       <input type="hidden" name="product_return_price">
       <input type="hidden" name="product_renew">
       <input type="hidden" name="product_renew_name">
       <input type="hidden" name="setting">
       <input type="hidden" name="setting_name">
       <input type="hidden" name="percent">
       <input type="hidden" name="price">
       <input type="hidden" name="price_origin">
   </form>
   <div id="modal-result"></div>
   <script type="text/javascript">
       function removePopup()
       {
           jQuery("body").removeClass("fix-body");
           jQuery('#modal-result').html('');
           return false;
       }
       function submitInnovation(obj)
       {
            jQuery.ajax({
                   url:"https://didongviet.vn/innovation/innovation/save",
                   type:"POST",
                   beforeSend:function(){
                       jQuery(obj).find("button").after("<i class='fa fa-spin fa-spinner'></i>");
                       jQuery(obj).find("button").hide();
                   },
                   data:jQuery(obj).serialize(),
                   dataType:"json",
                   success:function(data){
                        
                        
                       jQuery("#modal-popup").html(data.output);
                        
                   }
           });
           return false;
       }
   </script><div id="modal-request" class="modal-innovation">
           <div class="bg"></div>
           <div class="box">
               <div class="box-head">
                   <span class="title">Gửi yêu cầu định giá</span>
                   <button onclick="return hiddenRequest();" class="box-close"></button>
               </div>
               <div class="box-body">
                        <div class="box-request">
                    
                   <div class="form-request">
                       <form id="frmRequest">
                           <p><label><input type="radio" checked="checked" name="prefix" value="Anh">Anh</label><label><input type="radio" name="prefix" value="Chị">Chị</label></p>
                           <p><input type="text" required="required" autocomplete="off" name="fullname" placeholder="Họ và tên"></p>
                           <p><input type="text" required="required" autocomplete="off" name="telephone" placeholder="Số điện thoại"></p>
                           <p><input type="text" required="required" autocomplete="off" name="product" placeholder="Tên máy đang dùng"></p>
                           <p><input type="text" required="required" autocomplete="off" name="product_upgrade" placeholder="Tên máy muốn lên đời"></p>
                           <p>
                               <textarea name="note" placeholder="Ghi chú"></textarea>
                           </p>
                           <p>
                               <button type="submit">Gửi yêu cầu</button>
                           </p>
                       </form>
                   </div></div>
           </div>
       </div>
   </div>
   <script type="text/javascript">
       function hiddenRequest()
       {
           jQuery("body").removeClass("modal-request");
           return false;
       }
       require(['jquery'],function($){
           $("#frmRequest").submit(function(){
               $form=$(this);
               $telephone=$form.find('input[name="telephone"]').val();
                
               if($telephone[0]!='0' || $telephone.length>10 || $telephone.length < 9 || $telephone=='0123456789')
               {
                   alert("Số điện thoại không hợp lệ");
                   return false;
               }
               $.ajax({
                   url:"https://didongviet.vn/innovation/innovation/request",
                   beforeSend:function(){
                           $form.find("button").after('<i class="fa fa-spin fa-spinner"></i>');
                           $form.find("button").hide();
                   },
                   data:$(this).serialize(),
                   type:"POST",
                   complete:function(){
                       $form.find("button").next().remove();
                           $form.find("button").show();
                   },
                   success:function(){
                           alert("Thông tin gửi yêu cầu định giá được gửi thành công");
                           $("body").removeClass("modal-request");
                           $("#frmRequest input,#frmRequest textarea").each(function(){
                               $(this).val("");
                           });
                   }
               });
               return false;
           });
           $(".innovation-note a").click(function(e){
               e.preventDefault();
               $("html,body").animate({scrollTop:$("#return-product").offset().top},500);
           });
           $(".box-note .btn").click(function(){
               if($("body").hasClass("modal-request"))
                       $("body").removeClass("modal-request");
               else
                   $("body").addClass('modal-request');	
               return false;
           });
            
       })
   </script></div><div class="innovation-footer"><div id="faqs" class="mt-16">
       <div class="faq-content">
           <div class="body-faqs row">
               <div class="faqs-left col-md-8">
                               <div class="faqs-intro">
                           <strong class="desc-header">Vì sao nên chọn Trade-in thu cũ đổi mới tại Hoan Nam Mobile</strong>
                       
                       <div class="full-text">
                           <p>Chương trình <strong>Trade - in thu cũ đổi mới</strong>&nbsp;cho phép người dùng&nbsp;<strong>đổi</strong>&nbsp;những thiết bị&nbsp;<strong>cũ</strong>&nbsp;mình đang sử dụng để nâng cấp lên thế hệ&nbsp;<strong>mới</strong> với chi phí <strong>tiết kiệm</strong> hơn, cam kết <strong>giá thu cao nhất</strong> và <strong>thủ tục nhanh chóng</strong>, nhiều ưu đãi hấp dẫn.</p>
   <p>Hoan Nam Mobile chấp nhận thu đổi cả ngay cả trong trường hợp máy của khách hàng&nbsp;<strong>không hoạt động được</strong>, không có phụ kiện... và không quan trọng xuất xứ.</p>
   <p>Tất cả những gì khách hàng cần làm, là mang máy cũ đến, chọn một chiếc máy mình muốn lên đời tại Hoan Nam Mobile rồi mang máy mới về nhà. Đơn giản, nhanh gọn, chỉ trong 10 phút là có máy mới sử dụng ngay mà&nbsp;<strong>KHÔNG CẦN BÙ TIỀN.</strong></p>
   <p><strong>3 Bước Trade-in thu cũ đổi mới</strong></p>
   <ul>
   <li>Định giá máy cũ online</li>
   <li>Đến CH gần nhất kiểm tra thực tế</li>
   <li>Thực hiện đổi máy hoặc bán lại máy cũ</li></ul>
   <p style="display: none;"><strong>Tại sao nên chọn Thu cũ đổi mới?</strong></p>
   <ul style="display: none;">
   <li>Lên đời smartphone sang với chi chí thấp.</li>
   <li>Tiết kiệm hơn việc mua smartphone mới.</li>
   <li>Xử lý được chiếc smartphone cũ đã không còn nhu cầu sử dụng.</li>
   <li>Quá trình thu đổi nhanh gọn, đơn giản.</li>
   <li>Vẫn được hưởng các khuyến mãi,ưu đãi tại hệ thống Hoan Nam Mobile.</li>
   </ul>
   <p style="display: none;"><strong>Máy nào được áp dụng chính sách Thu cũ đổi mới?</strong></p>
   <ul style="display: none;">
   <li>Máy còn hoạt động tốt, ngoại hình còn mới hoặc trầy xước ít</li>
   <li>Máy còn hoạt động, màn hình bị ám, trầy xước nhiều</li>
   <li>Máy còn hoạt động, màn hình bị lỗi</li>
   <li>Máy trần, không có phụ kiện, không có hộp</li>
   <li>Máy đã hết bảo hành, là hàng chính hãng công ty hay chính hãng xách tay</li>
   </ul>
   <p style="display: none;"><strong>Chính sách 5 KHÔNG khi thu cũ đổi mới điện thoại iPhone tại Hoan Nam Mobile</strong></p>
   <ul style="display: none;">
   <li>Không hoạt động</li>
   <li>Không bảo hành</li>
   <li>Không hộp, phụ kiện</li>
   <li>Không xuất xứ</li>
   <li>Không bù thêm tiền</li>
   </ul>                    </div>
                   </div>
                           </div>
               <div class="faqs-right col-md-4">
                   <div class="promotion-info">
                       <div class="inner">
                                                       <h4>Bảng trợ giá lên đời tại Hoan Nam Mobile </h4>
                                                                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <script>
       function hiddenModelInfo()
       {
           jQuery("body").removeClass("pop-faqs");
           return false;
       }   
       require(
           [
           'jquery',
           'etheme/mcustomscroll'
           ],
           function(
               $,
               modal
               ) {
   
               $(".btn-more-faqs").click(function(){
                   if($("body").hasClass("pop-faqs"))
                       $("body").removeClass("pop-faqs");
                   else
                       $("body").addClass("pop-faqs");
   
                   return false;
               });
   
   
   
           }
           );
       </script>
       </div></div>
</body>
    @endsection