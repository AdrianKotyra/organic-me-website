
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Me</title>
    <meta name="description" content="Organic Products by Organic Me " />
    <link rel="icon" type="image/x-icon" href="./icons/logo_test.svg">

    <link rel="stylesheet" href="./css/stylesheet.css">
</head>
<body>


    <div class="modalWindowContainer">
        <div class="modal_window_all">
        <img class="modal_window_cross"src="./icons/cross.svg" alt="" id="php_message_window_cross">
        <div class="modal_window">
            <div class="modal_window_content" id="php_message_window">
                <div class="modal_wrapper">

                    <div class="modal_window_content_text">

                        <h3>
                            <?php
                                $name = $_POST["Fullname"];
                                $to = "adriankotyra@yahoo.com";
                                $subject = $_POST["Subject"];
                                $email_field = $_POST["Email"];
                                $message = $_POST["message"];
                                $confirmation = "Confirmation";
                                $body = "From: E-Mail: $email_field\n Name: $name\n  Message:\n $message\n ";
                                $body_confirmation = "Thank you  $name, your message has been sent to $to";
                                echo ("Thank you $name <br> Your message has been send to $to");
                                mail($to, $subject, $body);
                                mail($email_field, $confirmation, $body_confirmation);

                            ?>
                        </h3>

                    </div>

                </div>

            </div>



    </div>
    </div>

    </div>
    <div class="top_slider_text">
        <p>Good Reviews</p>
        <div class="container_top_slider_phone">
            <img class="phone_number" src="./icons/phone.png" alt="">
            <div class="number">080099343242</div>
        </div>
        <div class="links">

            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a class="active_mobile_link" href="contact.html">Contact</a>
            <a class="top_drop">Courses
                <div class="top_courser_dropdown">
                    <div class="top_courser_dropdown_container">
                        <div class="container_top_links">
                            <a href="adults_courses.html">Adults</a>
                            <a href="children_courses.html">Children</a>
                        </div>


                    </div>
                </div>

            </a>
            <a href="feedback.html">Feedback</a>

        </div>

    </div>
    <div class="nav_mobile">
        <div class="nav_mobile_content">
            <div class="mobile_nav_top_content">
                <img class="cross_nav_mobile" src="./icons/cross.svg" alt="">
                <div class="logo_nav_mobile_container">
                    <div class="container_logo_mobile">
                        <img class="logo_company" src="./icons/logo_test.svg" alt="">
                        <p>rganic Me</p>
                    </div>
                </div>


            </div>
            <div class="mobile_nav_mid_content">

                <div class="content_mobile_nav honey_button2"><p >Organic Honey</p> <img class="honey_button"src="./icons/arrow_right.svg" alt=""></div>
                <div class="content_mobile_nav pork_button2"> <p >Organic Pork</p>  <img class="pork_button"src="./icons/arrow_right.svg" alt=""></div>
                <div class="content_mobile_nav beef_button2"> <p >Organic Beef</p>  <img class="beef_button"src="./icons/arrow_right.svg" alt=""></div>
                <div class="content_mobile_nav chicken_button2"><p >Organic Chicken</p>  <img class="chicken_button"src="./icons/arrow_right.svg" alt=""></div>
                <div class="content_mobile_nav veal_button2"> <p >Organic Veal</p>  <img class="veal_button"src="./icons/arrow_right.svg" alt=""></div>
                <div class="content_mobile_nav lamb_button2"><p>Organic Lamb</p>  <img class="lamb_button"src="./icons/arrow_right.svg" alt=""></div>
                <div class="content_mobile_nav turkey_button2"> <p>Organic Turkey</p> <img class="turkey_button"src="./icons/arrow_right.svg" alt=""></div>
                <div class="content_mobile_nav duck_button2"> <p>Organic Duck</p> <img class="duck_button"src="./icons/arrow_right.svg" alt=""></div>
            </div>

        </div>


    </div>
    <div class="ObjectLiteralCategoryMeat">
        <div class="content_meat_category">
            <div class="mobile_nav_top_content">
                <img class="arrow_left"src="./icons/arrow_left.svg" alt="">
                <img class="cross_nav_mobile" id="meat_content_cross"src="./icons/cross.svg" alt="">
                <div class="logo_nav_mobile_container">
                    <div class="container_logo_mobile">
                        <img class="logo_company" src="./icons/logo_test.svg" alt="">
                        <p>rganic Me</p>
                    </div>
                </div>

            </div>
            <div class="content_meat">
                <h3>Meat Category</h3>
                <div class="content_meat_container">
                    <img class="content_meat_img1"src="./img/ran4.jpg" alt="">
                    <p class="meat_content_img_desc_1">lorem</p>
                </div>
                <div class="content_meat_container">
                    <img class="content_meat_img2"src="./img/ran4.jpg" alt="">
                    <p class="meat_content_img_desc_2">lorem</p>
                </div>
                <div class="content_meat_container">
                    <img class="content_meat_img3"src="./img/ran4.jpg" alt="">
                    <p class="meat_content_img_desc_3">lorem</p>
                </div>
                <div class="content_meat_container">
                    <img class="content_meat_img4"src="./img/ran4.jpg" alt="">
                    <p class="meat_content_img_desc_4">lorem</p>
                </div>
                <div class="content_meat_container">
                    <img class="content_meat_img5"src="./img/ran4.jpg" alt="">
                    <p class="meat_content_img_desc_5">lorem</p>
                </div>
                <div class="content_meat_container">
                    <img class="content_meat_img6"src="./img/ran4.jpg" alt="">
                    <p class="meat_content_img_desc_6">lorem</p>
                </div>


                <div class="content_meat_desc_container_text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, pariatur.
                </div>
                <a target="_blank"  class="nav_meat_cat_link_button" href=""> <button class="button_main slider_button">
                    Check Now
                </button></a>







            </div>

        </div>



    </div>

    <div class="nav_container">


        <div class="phone_logo_links_container">
            <div class="col phone_img">
                <div class="container">
                    <img class="phone_number" src="./icons/phone_contact.svg" alt="">
                    <p>080099343242</p>
                </div>



            </div>

            <div class="col Logo_company" >
                <img class="logo_company" id="logo_nav_main"src="./icons/logo_test.svg" alt="">
                <p>rganic Me</p>



            </div>

            <div class="col links_button_container">
                <div class="container">
                    <div class="links">
                        <div class="links_cont_hr">
                            <a  href="index.html">Home</a>
                            <div class="hr_container_links_cont">
                                <hr class="active_links_hr">
                                <hr class="default_links_hr">
                            </div>

                        </div>
                        <div class="links_cont_hr">
                            <a href="about.html">About</a>
                            <div class="hr_container_links_cont">
                                <hr class="active_links_hr">
                                <hr class="default_links_hr">
                            </div>
                        </div>
                        <div class="links_cont_hr courses_links_cont">
                            <a>Courses</a>
                            <div class="hr_container_links_cont">

                                <hr class="active_links_hr">
                                <hr class="default_links_hr">
                                <div class="drop_down_courses">
                                    <div class="cont_drop_down">
                                        <p> <a href="adults_courses.html">Adults</a></p></a>
                                        <p> <a href="children_courses.html">Children</a></p>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="links_cont_hr">
                            <a href="contact.html">Contact</a>
                            <div class="hr_container_links_cont">
                                <hr class="active_links_hr current_link" >
                                <hr class="default_links_hr">
                            </div>
                        </div>
                        <div class="links_cont_hr">
                            <a href="feedback.html">Feedback</a>
                            <div class="hr_container_links_cont">
                                <hr class="active_links_hr">
                                <hr class="default_links_hr">
                            </div>
                        </div>




                    </div>
                </div>

            </div>

        </div>
        <!-- <div class="links_button">
            <div class="col-50 container">
                <div class="links" id="links2">

                    <a href="">link</a><a href="">link</a><a href="">link</a>
                </div>

            </div>
            <div class="col-50 button">
                <button class="button_main">
                    <p>    random text</p>

                </button>
            </div>
        </div> -->








    </div>



    <div class="navigation_sticky_links">
        <div class="logo_company_cont_mobile">
            <img class="logo_company nav_logo" src="./icons/logo_test.svg" alt="">
            <p>rganic Me</p>
        </div>
        <div class="container_nav_sticky">

            <div class="container_nav_sticky_wrapper">
                <div class="link_img" id="img_link1">
                    <p>Honey</p>
                    <img class="arrow_down" id="arrow1"src="./icons/arrow_down.svg" alt="">
                    <hr class="arrow_link">
                </div>
                <div class="link_img" id="img_link2">
                    <p>Duck</p>
                    <img class="arrow_down" id="arrow2"src="./icons/arrow_down.svg" alt="">
                    <hr class="arrow_link">
                </div>
                <div class="link_img" id="img_link3">
                    <p>Pork</p>
                    <img class="arrow_down" id="arrow3"src="./icons/arrow_down.svg" alt="">
                    <hr class="arrow_link">
                </div>
                <div class="link_img" id="img_link4">
                    <p>Beef</p>
                    <img class="arrow_down" id="arrow4"src="./icons/arrow_down.svg" alt="">
                    <hr class="arrow_link">
                </div>
                <div class="link_img" id="img_link5">
                    <p>Chicken</p>
                    <img class="arrow_down" id="arrow5"src="./icons/arrow_down.svg" alt="">
                    <hr class="arrow_link">
                </div>
                <div class="link_img" id="img_link6">
                    <p>Veal</p>
                    <img class="arrow_down" id="arrow6"src="./icons/arrow_down.svg" alt="">
                    <hr class="arrow_link">
                </div>
                <div class="link_img" id="img_link7">
                    <p>Lamb</p>
                    <img class="arrow_down" id="arrow7"src="./icons/arrow_down.svg" alt="">
                    <hr class="arrow_link">
                </div>
                <div class="link_img" id="img_link8">
                    <p>Turkey</p>
                    <img class="arrow_down" id="arrow8"src="./icons/arrow_down.svg" alt="">
                    <hr class="arrow_link">
                </div>
            </div>


            <img src="./icons/hamburger.svg" alt="" class="hamb_icon">


        </div>

        <div class="dropodown_menu_nav">

        </div>



    </div>

    <div class="blackbackground_container">

    </div>
    <div class="img_bg_contact_container">
        <h3 class="title" id="title_contact_bg_container">Contact Us</h3>
        <img class="img_bg_contact"src="./img/contact_bg_test.jpg" alt="">
    </div>
    <div class="web_wrapper_sub">


        <div class="contact_section">

            <div class="contact_content_2_col">
                <div class="container_contact">
                    <form action="mail.php" method="post">
                        <div class="full_name_email_col">
                            <div class="col_input_container_default col_input_cont">
                                <div class="input_box">
                                    <p>Fullname</p>
                                    <input type="text" name="Fullname" id=""placeholder = "Name" required>
                                </div>
                                <div class="input_box">
                                    <p>Email Adress</p>
                                    <input type="text" name="Email" id="" placeholder="Email" required>
                                </div>

                            </div>
                            <div class="col_input_container_default col_input">
                                <p>SUBJECT</p>
                                <input type="text" name="Subject" id=""placeholder = "Subject" required>

                            </div>
                            <div class="col_input_container_default col_input">
                                <p>MESSAGE</p>
                                <textarea name="message" id="message_container" cols="30" rows="10" required></textarea>

                            </div>


                        </div>

                        <input type="submit" class="button_main button_form" value="Send!">






                    </form>

                </div>

                <div class="container_contact map_container">
                    <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2234.319327492467!2d-3.1010989233437267!3d55.94383707726111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887b9a7365fccff%3A0x52629bc613f4b94b!2sEdinburgh%20College!5e0!3m2!1spl!2suk!4v1698584810877!5m2!1spl!2suk"  style="border:0;" allowfullscreen="" width="100%" height="100%" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>





            </div>


            <div class="contact_3_cols">
                <div class="container_3_cols">
                    <div class="contact_3_cols_col">
                        <img src="./icons/map_pin.svg" alt="">

                    </div>
                    <p><strong>Address:</strong> Milton Rd E, Edinburgh EH15 2PQ</p>
                </div>
                <div class="container_3_cols">

                    <div class="contact_3_cols_col">
                        <img src="./icons/phone_contact.svg" alt="">

                    </div>
                    <p><strong>Phone:</strong> 080099343242</p>

                </div>
                <div class="container_3_cols">
                    <div class="contact_3_cols_col">
                        <img src="./icons/email.svg" alt="">

                    </div>
                    <p> <strong>Email:</strong>  Orgniacmeat@yahoo.com</p>
                </div>



            </div>














        </div>





    </div>
















    <footer>
        <div class="footer_section">
            <div class="footer_section_content">
                <div class="footer_col_main">
                    <div class="col_footer_minor">
                        <p>Explore Our Organic Meat Selection</p>
                        <p>Discover Sustainable Farming</p>
                        <p>Join Our Newsletter for Delicious Recipes</p>
                        <p>Connect with Our Community</p>
                    </div>

                    <div class="col_footer_minor">
                        <p>Our Commitment to Quality</p>
                        <p>Shop Responsibly Sourced Ingredients</p>
                        <p>Learn About Beekeeping Practices</p>
                        <p>Support a Healthier Planet</p>
                    </div>

                    <div class="col_footer_minor">
                        <p>Stay Updated on Sustainability</p>
                        <p>Explore Organic Cooking Tips</p>
                        <p>Read Our Blog for Eco-Friendly Living</p>
                        <p>Contact Us for More Information</p>
                    </div>
                </div>

                <div class="footer_col_main2">
                    <p>Learn more about our commitment to organic meat and sustainable practices.</p>
                    <p>Delight your taste buds with our premium organic meat and honey products.</p>
                    <p>Follow us on social media for the latest updates and mouthwatering recipes:</p>
                    <hr>
                    <div class="social_container">
                        <img src="./icons/facebook-round-color-icon.svg" alt="Facebook">
                        <img src="./icons/black-instagram-icon.svg" alt="Instagram">
                        <img src="./icons/linkedin-square-icon.svg" alt="LinkedIn">
                    </div>
                </div>
            </div>
        </div>
    </footer>































    </section>








    <?php echo '<script src="./js/custom.js"></script>'?>
    <script>

        function closeModalWindow(modalObject) {

            const modalWindowHTMLContainer = document.querySelector(".modal_window_all")
            const crossModal = document.querySelector(".modal_window_cross");
            crossModal.addEventListener("click", function() {
                document.querySelector("body").style.overflowY="scroll";
                modalWindowHTMLContainer.style.display="none"
                var stopVideos = function () {
                    var videos = document.querySelectorAll('iframe, video');
                    Array.prototype.forEach.call(videos, function (video) {
                        if (video.tagName.toLowerCase() === 'video') {
                            video.pause();
                        } else {
                            var src = video.src;
                            video.src = src;
                        }
                    });
                };
                stopVideos()
            })

        /**
         * Stop all iframes or HTML5 <video>'s from playing
         */
        }
    closeModalWindow();
    </script>


</body>
</html>
