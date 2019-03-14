<header class="header_area">
           	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="img/logo-1.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                                <li class="dropdown-submenu nav-item" style="padding-top: 37px;">
                                    <a class="dropdown-toggle" style="color: black; font-weight: 400;" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  ACTIVITIES
                                </a>
                                

                                        <?php

                                            $db = mysqli_connect('localhost', 'root', '', 'intern');

                                            $result = $db->query("SELECT * FROM category");
                                                            
                                            if($result->num_rows > 0){
                                                echo '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';
                                                while($row = $result->fetch_assoc()){
                                                
                                                    echo ' <li class="dropdown-submenu">';
                                                    echo '<a  class="dropdown-item" tabindex="-1" href="#">'.$row["category"].'</a>';
                                                    $sql = "SELECT * FROM subcategory WHERE categoryid='".$row['id']."' ";
                                                    $collec = $db->query($sql);
                                                    if($collec->num_rows > 0){
                                                        echo '<ul class="dropdown-menu" style="margin-left:120px;">';
                                                        while($r=$collec->fetch_assoc()){
                                                            echo '<li class="dropdown-item"><a href="webactivites.php?sub='.$r["id"].'">'.$r["subcategory"].'</a></li>';
                                                        }
                                                        echo '</ul>';
                                                    }
                                                    echo ' </li>';
                                                } 
                                                echo '</ul>';
                                            }

                                        ?>
                                      
                                      
                                        
                                   
                                  
                                </li> 
								<li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>
                                
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>