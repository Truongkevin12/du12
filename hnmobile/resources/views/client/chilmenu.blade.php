@if($loai->children && $loai->children->count()>0)
                            @foreach ($loai->children as $ls)
                            <ul class="groupmenu-drop ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" aria-expanded="false" style="display: none; top: 64.1094px; left: 0px;" aria-hidden="true"><li class="sub-child ui-menu-item" role="presentation"><ol>
                                <li><a href="https://didongviet.vn/dien-thoai-iphone.html">{{$ls->name}}</a></li>
                                <li><a href="https://didongviet.vn/samsung">Samsung</a></li>
                                <li><a href="https://didongviet.vn/dien-thoai-vertu.html">Vertu</a></li>
                            
                                </ol></li></ul>
                                @endforeach
                            @endif