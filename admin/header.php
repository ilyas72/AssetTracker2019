  <div id="header">Welcome : <?php echo $_SESSION['name'] ?></div>
<nav>
	<ul>
    <li><a href="index_admin.php">Home</a></li>
    <li><a href="#">Administrator</a>
     <ul>
        <li><a href="admin_view.php">View Admin</a></li>
        <li><a href="admin_add.php">Add Admin</a></li>
      </ul>
     </li>
     <li><a href="#">Staff</a>
     <ul>
         <li><a href="staff_view.php">View Staff</a></li>
         <li><a href="staff_add.php">Add Staff</a></li>
     </ul>
    </li> 
    <li><a href="#">Location</a>
        <ul>
            <li><a href="#">Classroom</a>
                <ul>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Add</a></li>
                </ul>
            </li>
             <li><a href="#">STEM Labs</a>
                <ul>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Add</a></li>
                </ul>
            </li>
             <li><a href="#">COMP Labs</a>
                <ul>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Add</a></li>
                </ul>
            </li>
             <li><a href="#">Meeting Room</a>
                <ul>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Add</a></li>
                </ul>
            </li>
             <li><a href="#">MPR</a>
                <ul>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Add</a></li>
                </ul>
            </li>
             <li><a href="#">Hall</a>
                <ul>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Add</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li><a href="#">Loan Items</a>
        <ul>
            <li><a href="#">Ipad</a>
                <ul>
                    <li><a href="ipad_view.php">View</a></li>
                    <li><a href="ipad_add.php">Add</a></li>
                </ul>
            </li>
             <li><a href="#">Laptop</a>
                <ul>
                    <li><a href="laptop_view.php">View</a></li>
                    <li><a href="laptop_add.php">Add</a></li>
                </ul>
            </li>
             <li><a href="#">Netbook</a>
                <ul>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Add</a></li>
                </ul>
            </li>
             <li><a href="#">Visualiser</a>
                <ul>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Add</a></li>
                </ul>
            </li>
             <li><a href="#">Tablet</a>
                <ul>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Loan</a></li>
                </ul>
            </li>
             <li><a href="#">Projector</a>
                <ul>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Loan</a></li>
                </ul>
            </li>
        </ul>
    </li>
 <li><a href="../logout.php">Logout</a></li>
</ul>
</nav>
<br/> 