<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <!-- Title -->
    <title>Add Advertisement | BHBC Admin
    </title>
    <?php $this->load->view('common/metalinks');?>
    <!-- WYSIWYG Editor css -->
    <link href="<?php echo base_url('css/richtext.min.css');?>" rel="stylesheet" />
  </head>
  <body class="app sidebar-mini rtl">
    <?php $this->load->view('common/header');?>
    <?php $this->load->view('common/sidebar');?>
    <div class="my-3 my-md-5 app-content">
      <div class="side-app">
        <div class="page-header">
          <h4 class="page-title">Add Advertisement
          </h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url('home');?>">Home
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Advertisement Manage
            </li>
          </ol>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form  method="post" class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Advertisement Title
                      </label>
                      <input name="image_title" class="form-control" placeholder="Image Title">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label class="form-label">External Url
                      </label>
                      <input name="city" class="form-control" placeholder="Credit">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                      <label class="form-label">Upload Advertise Image (max 500KB)
                      </label>
                       <div class="custom-file">
                        <input type="file" class="custom-file-input" name="example-file-input-custom">
                        <label class="custom-file-label">Choose file
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4"></div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                      <label class="form-label">Select Advertisement Category
                      </label>
                       <select name="state" class="form-control custom-select">
                        <option value="460X60">460X60</option>
                        <option value="336X280">336X280</option>
                        <option value="728X90">728X90</option>
                        <option value="Social Advertisement">Social Advertisement</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <label class="form-label">Enter Advertisement Description
                      </label>
                      <textarea class="content" name="example">
                      </textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <div class="d-flex">
                  <button type="submit" class="btn btn-primary ml-auto">Submit
                  </button>
                  <button type="reset" class="btn btn-link">Cancel
                  </button>
                </div>
              </div>
              </div>
            </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- Back to top -->
<a href="#top" id="back-to-top" style="display: inline;">
  <i class="fas fa-angle-up">
  </i>
</a>
<?php $this->load->view('common/footer');?>
<!-- WYSIWYG Editor js -->
<script src="<?php echo base_url('js/jquery.richtext.js');?>">
</script>
<!-- WYSIWYG Editor js -->
<script>
  $(function(e) {
    $('.content').richText();
  }
   );
</script>
</body>
</html>
