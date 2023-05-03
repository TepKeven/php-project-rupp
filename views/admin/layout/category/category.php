<?php

  require_once("./model/Category.php");

  if(isset($_POST) && !empty($_POST)){

      $category_ids = json_decode( $_POST["deleted_category_ids"]);

      $result = Category::delete($category_ids);

      
      
  }

  $stmt = Category::findAll();

?>

<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="/public/assets/admin/img/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="/public/assets/admin/img/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="/public/assets/admin/img/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="/public/assets/admin/img/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="/public/assets/admin/img/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="/public/assets/admin/img/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      
      <?php
      
        require_once("./views/admin/component/sidebar.php");
      
      ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">    
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card form-category" id="form-category">
                <div class="card-body">
                <div class="page-heading d-flex align-items-center justify-content-between">
                  <h3>Category</h3>
                  <div class="pull-right">
                    <a href="/admin/category/add" data-toggle="tooltip" title="New" class="btn btn-info" data-original-title="Save"><i class="ti-plus"></i></a>
                    <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger" data-original-title="Delete" onclick="deleteCategories()"><i class="ti-trash"></i></a>
                  </div>
                </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center align-middle"><input type="checkbox" onchange="checkAllCheckboxes(event)"/> </th>
                          <th scope="col" class="text-center align-middle">#</th>
                          <th scope="col" class="text-center align-middle">Image</th>
                          <th scope="col" class="text-center align-middle">Name</th>
                          <th scope="col" class="text-center align-middle">Description</th>
                          <th scope="col" class="text-center align-middle">Parent Category</th>
                          <th scope="col" class="text-center align-middle">Sort Order</th>
                          <th scope="col" class="text-center align-middle">Status</th>
                          <th scope="col" class="text-center align-middle">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        
                        if ($stmt->rowCount() > 0) {

                          $i = 0;

                          while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                            $i++;
                      ?>          
                            <tr>
                                <td scope="col" class="text-center align-middle"><input type="checkbox" class="table-checkbox" name="category_checkbox[]" value=<?=$row["category_id"]?> /></td>
                                <td scope="row" class="text-center align-middle"><?=$i?></td> 
                                <td class="text-center align-middle">
                                  <img src=<?=$row["image"] == null ? "/public/assets/no_image.png" : "/public/images/category/" . $row["image"]?> width="100" height="100" />
                                </td>
                                <td class="text-center align-middle"><?=$row["name"]?></td>
                                <td class="text-center align-middle"><?=substr(strip_tags(html_entity_decode($row["description"])), 0, 30)?></td>
                                <td class="text-center align-middle"><?=Category::findOne($row["parent_id"])["name"] ?></td>
                                <td class="text-center align-middle"><?=$row["sort_order"]?></td>
                                <td class="text-center align-middle"><?=$row["status"]?></td>
                                <td class="text-center align-middle">
                                    <a href="/admin/category/edit?category_id=<?=$row["category_id"]?>" title="Edit" class="btn btn-primary p-2"><i class="ti-pencil"></i></a>
                                </td>
                            </tr> 
                      <?php 
        
                          }
        
                        } else {
    
                      ?>
                            <tr>
                                <td scope="col" class="text-center align-middle" colspan="9">No Rows</td>
                            </tr> 

                      <?php

                        }
                      ?>    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>