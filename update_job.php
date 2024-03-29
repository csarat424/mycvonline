<?php session_start(); 
include('conn/conn.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <title>My CV Online</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <style type="text/css">
   .bdy{
      background: #007bff;
      background: linear-gradient(to right, #0062E6, #33AEFF);
   }
   .heig{
      height: 50px;
      padding-right: 20px;
   }

   

   .navbar-collapse{
      border-top: 0px solid;
   }

   .font_style{
      font-weight: bold;

   }

   

   .format_h1{
      text-align: center;
      color: white;
   }

   section.pricing {
     background: #007bff;
     background: linear-gradient(to right, #0062E6, #33AEFF);
   }

   .pricing .card {
     border: none;
     border-radius: 1rem;
     transition: all 0.2s;
     box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
   }

   .pricing hr {
     margin: 1.5rem 0;
   }

   .pricing .card-title {
     margin: 0.5rem 0;
     font-size: 0.9rem;
     letter-spacing: .1rem;
     font-weight: bold;
   }

   .pricing .card-price {
     font-size: 3rem;
     margin: 0;
   }

   .pricing .card-price .period {
     font-size: 0.8rem;
   }

   .pricing ul li {
     margin-bottom: 1rem;
   }

   .pricing .text-muted {
     opacity: 0.7;
   }

   .pricing .btn {
     font-size: 80%;
     border-radius: 5rem;
     letter-spacing: .1rem;
     font-weight: bold;
     padding: 1rem;
     opacity: 0.7;
     transition: all 0.2s;
   }

   /* Hover Effects on Card */

   @media (min-width: 992px) {
     .pricing .card:hover {
       margin-top: -.25rem;
       margin-bottom: .25rem;
       box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
     }
     .pricing .card:hover .btn {
       opacity: 1;
     }
   }
.card{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group:first-child .list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.card>.list-group:last-child .list-group-item:last-child{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.card-body{-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem}.card-title{margin-bottom:.75rem}.card-subtitle{margin-top:-.375rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link:hover{text-decoration:none}.card-link+.card-link{margin-left:1.25rem}.card-header{padding:.75rem 1.25rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-header+.list-group .list-group-item:first-child{border-top:0}.card-footer{padding:.75rem 1.25rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-right:-.625rem;margin-bottom:-.75rem;margin-left:-.625rem;border-bottom:0}.card-header-pills{margin-right:-.625rem;margin-left:-.625rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1.25rem}.card-img{width:100%;border-radius:calc(.25rem - 1px)}.card-img-top{width:100%;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img-bottom{width:100%;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-deck{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.card-deck .card{margin-bottom:15px}@media (min-width:576px){.card-deck{-ms-flex-flow:row wrap;flex-flow:row wrap;margin-right:-15px;margin-left:-15px}.card-deck .card{display:-ms-flexbox;display:flex;-ms-flex:1 0 0%;flex:1 0 0%;-ms-flex-direction:column;flex-direction:column;margin-right:15px;margin-bottom:0;margin-left:15px}}.card-group{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.card-group>.card{margin-bottom:15px}@media (min-width:576px){.card-group{-ms-flex-flow:row wrap;flex-flow:row wrap}.card-group>.card{-ms-flex:1 0 0%;flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:not(:last-child) .card-header,.card-group>.card:not(:last-child) .card-img-top{border-top-right-radius:0}.card-group>.card:not(:last-child) .card-footer,.card-group>.card:not(:last-child) .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:not(:first-child) .card-header,.card-group>.card:not(:first-child) .card-img-top{border-top-left-radius:0}.card-group>.card:not(:first-child) .card-footer,.card-group>.card:not(:first-child) .card-img-bottom{border-bottom-left-radius:0}}.card-columns .card{margin-bottom:.75rem}@media (min-width:576px){.card-columns{-webkit-column-count:3;-moz-column-count:3;column-count:3;-webkit-column-gap:1.25rem;-moz-column-gap:1.25rem;column-gap:1.25rem;orphans:1;widows:1}.card-columns .card{display:inline-block;width:100%}}.accordion>.card{overflow:hidden}.accordion>.card:not(:first-of-type) .card-header:first-child{border-radius:0}.accordion>.card:not(:first-of-type):not(:last-of-type){border-bottom:0;border-radius:0}.accordion>.card:first-of-type{border-bottom:0;border-bottom-right-radius:0;border-bottom-left-radius:0}.accordion>.card:last-of-type{border-top-left-radius:0;border-top-right-radius:0}.accordion>.card .card-header{margin-bottom:-1px}
</style>
   </head>
   <body class="bdy">

      <?php  include('include/menu.php'); ?>
         <h1 class="format_h1">Post a Job</h1>

<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Job</h5>
            <?php 
              $idd=$_GET['id'];
              $iddd=$_SESSION['id'];
              $qq="SELECT * FROM jobs where id='".$idd."' and posted_by='".$iddd."'";
              $qq_exec=mysqli_query($conn,$qq);
              if (mysqli_num_rows($qq_exec)==1){
                $res=mysqli_fetch_array($qq_exec);
                $Title=$res['Title'];
                $Description=$res['Description'];
                $Salary_hr=$res['Salary_hr'];
                $Type=$res['Type'];
                $Required_skills=$res['Required_skills'];
                $Company_Name=$res['Company_Name'];
                $Company_Description=$res['Company_Description'];
                $City=$res['City'];
                $End_Date=$res['End_Date'];
              }
             ?>
            <hr>
            <form action="post_job_update.php" method="POST">
              <div class="form-group">
                <label for="email">Title:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Title" name="title" value="<?php if(isset($Title)){ echo $Title; } ?>">
                <input type="hidden" name="job_id" value="<?php if(isset($idd)){ echo $idd; } ?>">
              </div>
              <div class="form-group">
                <label for="email">Description:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Description" name="description" value="<?php if(isset($Description)){ echo $Description; } ?>">
              </div>
              <div class="form-group">
                <label for="email">Salary / Hour:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Salary / Hour" name="sal_per_hr" value="<?php if(isset($Salary_hr)){ echo $Salary_hr; } ?>">
              </div>
              <div class="form-group">
                <label for="email">Type:</label>
                <select class="form-control" id="sel1" name="type1">
                  <?php if(isset($Type)){ echo "<option value='".$Type."'>".$Type."</option>"; } ?>
                  <option value="Permanent">Permanent</option>
                  <option value="Contract">Contract</option>
                  <option value="Internship">Internship</option>
                  <option value="Freelance">Freelance</option>
                </select>
              </div>
              <div class="form-group">
                <label for="email">Required skills:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Required skills" name="req_skills" value="<?php if(isset($Required_skills)){ echo $Required_skills; } ?>">
              </div>
              <div class="form-group">
                <label for="email">Company Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Company Name" name="cmpn_name" value="<?php if(isset($Company_Name)){ echo $Company_Name; } ?>">
              </div>
              <div class="form-group">
                <label for="email">Company Description:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Company Description" name="cmpn_desc" value="<?php if(isset($Company_Description)){ echo $Company_Description; } ?>">
              </div>
              <div class="form-group">
                <label for="email">City:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter City" name="city" value="<?php if(isset($City)){ echo $City; } ?>">
              </div>
              <div class="form-group">
                <label for="email">End Date:</label>
                <input type="date" class="form-control" id="email"  name="end_date" value="<?php if(isset($End_Date)){ echo $End_Date; } ?>">
              </div>
              <input type="submit" class="btn btn-primary" name='submit'>
            </form>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
</body>
</html>