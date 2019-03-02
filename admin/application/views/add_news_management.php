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
    <title>Add News | BHBC Admin
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
          <h4 class="page-title">Add News Here
          </h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url('home');?>">Home
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">News Management
            </li>
          </ol>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form  method="post" class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">Country
                      </label>
                      <select name="country" class="form-control custom-select">
                        <option value="">Country
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">State
                      </label>
                      <select name="state" class="form-control custom-select">
                        <option value="">State
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">City
                      </label>
                      <select name="city" class="form-control custom-select">
                        <option value="">City
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">Place Name
                      </label>
                      <input type="text" class="form-control" name="example-text-input" placeholder="Place Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">Category
                      </label>
                      <select name="country" class="form-control custom-select">
                        <option value="">Category
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">Sub-category1
                      </label>
                      <select name="state" class="form-control custom-select">
                        <option value="">Sub-category1
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">Sub-category2
                      </label>
                      <select name="city" class="form-control custom-select">
                        <option value="">Sub-category2
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">Select Category
                      </label>
                      <select name="country" class="form-control custom-select">
                        <option value="">Category
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">News Tag
                      </label>
                      <input type="text" class="form-control" name="example-text-input" placeholder="News Tag">
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">Video URL
                      </label>
                      <select name="city" class="form-control custom-select">
                        <option value="">Video URL
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">News Image
                      </label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="example-file-input-custom">
                        <label class="custom-file-label">Choose file
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label class="form-label">News Headline
                      </label>
                      <input type="text" class="form-control" name="example-text-input" placeholder="News Headline">
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label class="form-label">
                      </label>
                      <div class="custom-controls-stacked" style="margin-top:33px;">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                          <span class="custom-control-label">Show in sliding Image
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <label class="form-label">News Headline
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
