

<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
<div class="logo">
    <a href="/admin" class="simple-text">
        <img src="{{asset('img/musescore.png')}}"  style="width:50px;height:60px;"> Crash Portal
    </a>
</div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="{{$sdashboard}}">
            <a href={{url('admin/dash')}}>
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="{{$smyprofile}}">
            <a href={{url('admin/myprofile')}}>
                <i class="material-icons">person</i>
                <p>My Profile</p>
            </a>
        </li>
        <li class="{{$scrashes}}">
            <a href={{url('admin/crashes')}}>
                <i class="material-icons">content_paste</i>
                <p>Crashes</p>
            </a>
        </li>
        <li class="{{$smycrashes}}">
            <a href={{url('admin/developer_manager')}}>
                <i class="material-icons">library_books</i>
                <p>Developers Manager</p>
            </a>
        </li>
    </ul>
</div>

