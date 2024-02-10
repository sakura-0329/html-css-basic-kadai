
 <?php get_header(); ?>
 
 <?php if(have_posts()) :?>
   <?php while (have_posts()) : the_post() ; ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
          <?php
             $cat = get_the_category();
             $catslug = $cat[0]->slug;
             $catname = $cat[0]->cat_name;
           ?>
             <div><?php echo $catslug; ?></div>
             <div><?php echo $catname; ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Post 部分 -->
    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
              <div class="tab_panel_title"><?php echo $catname; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                            <div class="calendar_month"><?php echo post_custom('month'); ?></div>
                              <div class="calendar_day">
                              <span><?php echo get_the_date('d');
                            </div>
                            </div>
                            </div>
                          <div class="calendar_month"><?php echo get_post_time('F'); ?></div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_header">
                          <img src="<?php echo get_template_directory_uri( );?>/images/tags-solid.png" alt="" /> <?php echo $catname; ?>
                          </div>
                          <div class="news_detail_title">
                          <?php the_title(); ?>
                          </div>
                         
                          <div class="news_post_meta">
                          <?php the_content(); ?>
                          </div>
                          <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt=""/>
                             <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
     <?php endif; ?>

        <!--  Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
           <div class="sidebar">
             <div class="category">
               <div class="section_title_container category_title">
                 <h2>CATEGORY</h2>
                 <div class="section_subtitle">カテゴリー</div>
               </div>
               <div class="sidebar_categories">
                 <ul>
                   <li><a href="#">News ニュース</a></li>
                   <li><a href="#">Event イベント</a></li>
                   <li><a href="#">CampusLife 侍の学生</a></li>
                 </ul>
               </div>
             </div>
             <div class="category">
               <div class="section_title_container category_title">
                 <h2>Latest Post</h2>
                 <div class="section_subtitle">最新記事</div>
               </div>
               <div class="sidebar_categories">
                 <ul>
                   <li><a href="#">AWS ハンズオンセミ…</a></li>
                   <li><a href="#">AWS ハンズオンセミ…</a></li>
                   <li><a href="#">AWS ハンズオンセミ…</a></li>
                 </ul>
               </div>
             </div>
           </div>
           <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
     <!-- footer.php ここから -->
     <footer class="footer">
       <div class="row footer_row">
         <div class="col">
           <div class="footer_content">
             <div class="row">
               <div class="col-lg-4 footer_col">
                 <div class="footer_section footer_about">
                   <div class="footer_logo_container">
                     <img src="images/logo_big.png" alt="" />
                     <a href="">
                       <div class="footer_logo_text">Samurai University</div>
                     </a>
                   </div>
                   <div class="footer_contact_info">
                     <div>〒150-0043</div>
                     <div>東京都渋谷区道玄坂2丁目11-1 Gスクエア渋谷道玄坂4F</div>
                     <ul>
                       <li><span>TEL: </span>03-2222-11</li>
                       <li><span>MAIL: </span>: sample@sejuku.net</li>
                     </ul>
                   </div>
                   <div class="footer_social">
                     <ul>
                       <li>
                         <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                       </li>
                       <li>
                         <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                       </li>
                     </ul>
                   </div>
                 </div>
               </div>
               <div class="col-lg-3 footer_col">
                 <div class="footer_section footer_links">
                   <div class="footer_links_container">
                     <ul>
                       <li><a href="news.html">ニュース</a></li>
                       <li><a href="events.html">イベント</a></li>
                       <li><a href="courses.html">コース</a></li>
                       <li><a href="about.html">侍大学について</a></li>
                     </ul>
                   </div>
                 </div>
               </div>
               <div class="col-lg-5 footer_col clearfix">
                 ※ここにTwitterのタイムラインを埋め込みます
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="row copyright_row">
         <div class="col">
           <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
             <div class="cr_text">
               Copyright &copy; Samurai University All Rights Reserved.
             </div>
           </div>
         </div>
       </div>
     </footer>
   </div>
 
   <!--jQuery-->
   <script src="js/jquery-3.2.1.min.js"></script>
   <script src="styles/bootstrap4/popper.js"></script>
   <script src="styles/bootstrap4/bootstrap.min.js"></script>
   <script type="text/javascript">
     $(".carousel").carousel();
   </script>
 
 </body>
 
 </html>
 <!-- footer.php ここまで -->
     <?php get_footer(); ?>


                          <hr />
                          <div class="social_share">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt=""/>
                             <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
     <?php endif; ?>

        <!--  Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
        <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>