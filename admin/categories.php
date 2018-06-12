<?php include "includes/admin_header.php"; ?>
    
    <div id="wrapper">

        <!-- Navigation -->
        
    
    <?php include "includes/admin_navigation.php"; ?>

     <?php 
                $query = "SELECT * FROM categories";
                $select_categories = mysqli_query($connection, $query);
                ?>



    
<div id="page-wrapper">

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>   

            <div class="col-xs-6">
                <form action="">
                    <div class="form-group">
                        <label for="cat_title">Category title</label>
                        <input class="form-control" type="text" name="cat_title">  
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">                    
                    </div>                
                </form>
            </div>

            <div class="col-xs-6">
               <table class="table table-bordered table-hover">
                   <thead>
                       <tr>
                           <th>Id</th>
                           <th>Category Title</th>
                       </tr>
                   </thead>
                   <tbody>
                  <!-- Categories dynamically read in a table  --> 
                   <?php while($row = mysqli_fetch_assoc($select_categories)) {
                        $cat_id = $row['cat_id']; 
                        $cat_title = $row['cat_title'];                                    
                                                                                           
                       echo "<tr>";
                       echo "<td>{$cat_id}</td>";
                       echo "<td>{$cat_title}</td>"; 
                       echo "</tr>";  
                                                                         
                    } ?>    

                  <!-- Categories dynamically read in a table END  -->                  
                   </tbody>
               </table>    
            </div>  

        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?> 

