<style>
    #sub-children{
        padding: 10px;
    }

    </style>
<div class="sections nav-sections">
                <div class="section-items nav-sections-items">
                     <div class="section-item-title nav-sections-item-title">
                    <a class="nav-sections-item-switch"
                       data-toggle="switch" href="#store.menu">
                        Menu                    </a>
                </div>
                <div class="section-item-content nav-sections-item-content" id="store.menu">
                    <div class="container">
    <div class="row">
        <div class="efom-megamenu-wrapper col-md-7">
            <nav class="efom-megamenu navigation p-0 m-0" role="navigation" data-action="navigation">

                <div id="defaultmenu" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                        @foreach ($categoies as $loai)
                        <li class ="level0 dropdown category-item">
                            <img src="{{$loai->image}}" alt="">
                            <b><a class="level-top ui-corner-all" href="{{url('/product',[$loai->id])}}"><span>{{$loai->name}}</span></a></b>
                            @if (count($loai->children) > 0)

                            <ul class="groupmenu-drop ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" aria-expanded="false" style="display: none; top: 64.1094px; left: 0px;" aria-hidden="true">
                                @foreach ($loai->children as $ls)
                                <li class="sub-child ui-menu-item" id="sub-children" role="presentation">
                                <ol>
                                <li><a href="{{url('/product',[$ls->id])}}" value="1">{{$ls->name}}</a></li>
                                </ol>
                                </li>
                                @endforeach
                            </ul>


                            @endif
                        </li>
                        @endforeach
                     </ul>
                </div>

            </nav>

        </div>
        <div class="menu-functions-wrapper col-md-5">
        <a href="" class="menu-function menu-item-promotion float-right">
                <div class="wrapper">
                    <span class="title font-caption">Khuyến mãi<br/>Tháng 09</span>
                </div>
            </a>
            <a href="" class="menu-function hand-book float-right">
                <div class="wrapper">
                    <i class="fa fa-hand-book"></i>
                    <span class="title font-caption">Công nghệ<br/>24h</span>
                </div>
            </a>
            <a href="{{url('/thucu')}}" class="menu-function trade-in float-right">
                <div class="wrapper">
                    <i class="fa fa-swap"></i>
                    <span class="title font-caption">Thu cũ<br/>đổi mới</span>
                </div>
            </a>
            <a href="" class="menu-function installment float-right">
                <div class="wrapper">
                    <i class="fa fa-installment"></i>
                    <span class="title font-caption">Trả góp</span>
                </div>
            </a>
        </div>
    </div>
</div>                </div>
                    </div>
    </div>
