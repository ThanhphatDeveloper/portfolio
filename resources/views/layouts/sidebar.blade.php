<div class="sidebar">
    <!-- start with head -->
    <div class="head">
      <div class="logo">
        <img src="{{asset('assets/backend/img/logo-admin.png')}}" alt="">
      </div>
      <a href="#" class="btn btn-danger">{{Auth::user()->name}}</a>
    </div>
    <!-- end with head -->
    <!-- start the list -->
    <div id="list">
      <ul class="nav flex-column">
        <li class="nav-item"><a href="index.html" class="nav-link active" ><i class="fa fa-adjust"></i>Dashboard</a></li>
        <!-- end user interface submenu -->
        <!-- start with charts -->
        <li class="nav-item"><a href="#menu3" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-fire"></i>ui<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <!-- start charts submenue -->
        <li class="sub collapse" id="menu3">
            <a href="ui-alerts.html" class="nav-link" data-parent="#menu3">alerts</a>
            <a href="ui-btns.html" class="nav-link" data-parent="#menu3">buttons</a>
            <a href="ui-cards.html" class="nav-link" data-parent="#menu3">cards</a>
            <a href="ui-list.html" class="nav-link" data-parent="#menu3">list</a>
            <a href="ui-progress-bars.html" class="nav-link" data-parent="#menu3">progress</a>
        </li>
        <!-- end charts submenue -->
        <!-- end with charts -->
        <li class="nav-item"><a href="inbox.html" class="nav-link"><i class="fa fa-inbox"></i>inbox</a></li>
        <li class="nav-item"><a href="contacts.html" class="nav-link"><i class="fa fa-user"></i>contact</a></li>
        <li class="nav-item"><a href="forms.html" class="nav-link"><i class="fa fa-edit"></i>forms</a></li>
        <li class="nav-item"><a href="tabels.html" class="nav-link"><i class="fa fa-table"></i>tables</a></li>
        <li class="nav-item"><a href="profile.html" class="nav-link"><i class="fa fa-users"></i>profile</a></li>
        <li class="nav-item"><a href="invoice.html" class="nav-link"><i class="fa fa-money-bill-alt"></i>invoice</a></li>
        <li class="nav-item"><a href="price.html" class="nav-link"><i class="fa fa-dollar-sign"></i>price</a></li>
        <li class="nav-item"><a href="support.html" class="nav-link"><i class="fa fa-life-ring"></i>support</a></li>
      </ul>
    </div>
    <!-- end the list -->
  </div>