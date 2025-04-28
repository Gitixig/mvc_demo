<?php 
                        if (isset($_SESSION['user_id']))
                        {
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" 
                                        id="navbarDropdown" href="#" role="button" 
                                        data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#!"><?= $_SESSION['username'] ?></a></li>
                                    <li><a class="dropdown-item" href="#!">Lịch sử đơn hàng</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="<?=$baseURL?>user/logout">Logout</a></li>
                                </ul>
                            </li>

                        <?php
                        }
                        else
                        {
                            ?>
                                <li><a class="nav-link" href="<?=$baseURL?>user/login">Login</a></li>
                            <?php
                        }
                        
                        ?>