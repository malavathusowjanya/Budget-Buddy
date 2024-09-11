<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
                <img src="https://th.bing.com/th?id=OIP.8li1g3WASRlQCpV6X54VCQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <?php
            $uid = $_SESSION['detsuid'];
            $ret = mysqli_query($con, "select FullName from tbluser where ID='$uid'");
            $row = mysqli_fetch_array($ret);
            $name = $row['FullName'];
            ?>
            <div class="profile-usertitle-name">
                <a href="user-profile.php"><?php echo $name; ?></a>
            </div>
            <div class="profile-usertitle-status">
                <span class="indicator label-success"></span>Online
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    
    <ul class="nav menu">
        <li class="active"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em>Expenses 
                <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right">
                    <em class="fa fa-plus"></em>
                </span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="add-expense.php">
                    <span class="fa fa-arrow-right">&nbsp;</span> Add Expenses
                </a></li>
                <li><a class="" href="manage-expense.php">
                    <span class="fa fa-arrow-right">&nbsp;</span> Manage Expenses
                </a></li>
            </ul>
        </li>
        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em>Expense Report 
                <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right">
                    <em class="fa fa-plus"></em>
                </span>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a class="" href="expense-datewise-reports.php">
                    <span class="fa fa-arrow-right">&nbsp;</span> Daywise Expenses
                </a></li>
                <li><a class="" href="expense-monthwise-reports.php">
                    <span class="fa fa-arrow-right">&nbsp;</span> Monthwise Expenses
                </a></li>
                <li><a class="" href="expense-yearwise-reports.php">
                    <span class="fa fa-arrow-right">&nbsp;</span> Yearwise Expenses
                </a></li>
            </ul>
        </li>
        <li><a href="change-password.php"><em class="fa fa-clone">&nbsp;</em> Change Password</a></li>
        <li><a href="#" onclick="confirmLogout()"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div>

<script>
function confirmLogout() {
    if (confirm('Are you sure you want to logout?')) {
        window.location.href = 'logout.php';
    }
}
</script>
