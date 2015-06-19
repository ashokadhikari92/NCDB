<div class="col-md-2 sidegrid">
<div class="panel-group">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">

                <div class="panel-left-menu">
                    <table class="table">
                    @foreach($menus as $menu)
                       @if($menu->parent_id == 0)
                       <tr>
                            <td>
                                <a href="{!! $menu->url !!}"
                                   class="btnsidebar btn-primary custom-border-color">{!!$menu->display_name!!}</a>
                            </td>
                        </tr>
                       @endif
                    @endforeach
                    </table>
                </div>

        </div>

    </div>
</div><!-- end sidemenu-->
</div><!-- end sidegrid-->