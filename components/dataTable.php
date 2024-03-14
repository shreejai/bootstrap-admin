<?php include("./components/api/2024-data.php");?>


<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                      <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Pickup</th>
                                          <th>Age</th>
                                          <th>Due date</th>
                                          <th>Price</th>
                                      </tr>
                                  </thead>
                                  <tfoot>
                                      <tr>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Pickup</th>
                                          <th>Age</th>
                                          <th>Due date</th>
                                          <th>Price</th>
                                      </tr>
                                  </tfoot>
                                  <tbody>
                                    <?php 
                                    // Loop through the data
                                    foreach ($data as $key => $value) {
                                      foreach($value as $dataKey => $dataValue){
                                       // print_r($value);
                                        if($dataKey == 0){
                                          echo "<p style='font-weight: bold; color: red'>". $dataValue['Cake Description']."</p>";
                                          echo "<p style='font-weight: bold; color: red'> Due Dates showing 1 day early </p>";
                                        }else{
                                    ?>
                                     <tr>
                                        <td><?php echo $dataValue['Name']; ?></td>
                                        <td><?php echo $dataValue['Cake Description']; ?></td>
                                        <td><?php echo $dataValue['Pickup Time']; ?></td>
                                        <td>61</td>
                                        <td>
                                          <?php
                                          $dateString = $dataValue['Due on'];
                                          $date = new DateTime($dateString);
                                          $formattedDate = $date->format('Y/M/d');
                                          echo $formattedDate; 
                                          //echo $dataValue['Due on'];
                                          ?>
                                        </td>
                                        <td><?php echo $dataValue['Price']; ?></td>
                                      </tr>
                                    <?php
                                        }
                                      }
                                    }
                                    ?>
                                      
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>