        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar-alt"></i>Bookings</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
							 <li>
                                    <a href="add_booking.php">Add New</a>
                                </li>
                             
								<li>
                                    <a href="bookings.php">Bookings</a></a>
                                </li>
                               
                               
                            </ul>
                        </li>
						  
						  
                       <?php if($u_type=='admin'){ ?>
                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-map-marker-alt"></i>Locations</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="locations.php">Locations</a></a>
                                </li>
                                <li>
                                    <a href="add_location.php">Add New</a>
                                </li>
                               
                            </ul>
                        </li>
						 <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-map-marker-alt"></i>Attractions</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="atttractions.php">Attractions</a></a>
                                </li>
                                <li>
                                    <a href="add_atttraction.php">Add New</a>
                                </li>
                               
                            </ul>
                        </li> <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building "></i>Hotels</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="hotels.php">Hotels</a></a>
                                </li>
                                <li>
                                    <a href="add_hotel.php">Add New</a>
                                </li>
                               
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-car "></i>Vehicles</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="vehicles.php">Vehicles</a></a>
                                </li>
                                <li>
                                    <a href="add_vehicle.php">Add New</a>
                                </li>
                               
                            </ul>
                        </li>
                      <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>User Management</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="users.php">Users</a>
                                </li>
                                <li>
                                    <a href="user_register.php">Register</a>
                                </li>
                               
                            </ul>
                        </li>
                      
					   <?php } ?>
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->