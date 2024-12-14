<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create News</h6>
                    <form action="<?= base_url('admin/news/store'); ?>" method="POST" enctype="multipart/form-data">
                        <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="az-line-tab" data-bs-toggle="tab" href="#az" role="tab"
                                    aria-controls="az" aria-selected="true">
                                    AZ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="en-line-tab" data-bs-toggle="tab" href="#en" role="tab"
                                    aria-controls="en" aria-selected="true">
                                    EN
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ru-line-tab" data-bs-toggle="tab" href="#ru" role="tab"
                                    aria-controls="ru" aria-selected="true">
                                    RU
                                </a>
                            </li>
                        </ul>











                        <div class="tab-content mt-3" id="lineTabContent">
                            <div class="tab-pane fade show active" id="az" role="tabpanel"
                                aria-labelledby="az-line-tab">



                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example
                                            textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3">
                                        <h4 class="card-title">TinyMCE</h4>
                                        <p class="text-secondary mb-3">Read the <a href="https://www.tiny.cloud/docs/"
                                                target="_blank"> Official TinyMCE Documentation </a>for a full list of
                                            instructions and other options.</p>
                                        <textarea class="form-control" name="tinymce" id="tinymceExample"
                                            rows="10"></textarea>
                                    </div>
                                </div>

                                <link rel="stylesheet"
                                    href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">






                                <div class="row">
                                    <div class="mb-3">
                                        <h6 class="card-title">Dropzone</h6>
                                        <p class="text-secondary mb-3">Read the <a href="https://www.dropzonejs.com/"
                                                target="_blank"> Official Dropzone.js Documentation </a>for a full list
                                            of instructions and other options.</p>

                                        <form action="/file-upload" class="dropzone" id="exampleDropzone">
                                            <div class="dz-message ">
                                                Drop files here or click to upload.<BR>
                                                <SPAN class="note needsclick">(This is just a demo dropzone. Selected
                                                    files are <STRONG>not</STRONG> actually uploaded.)</SPAN>
                                            </div>
                                        </form>


                                    </div>
                                </div>


                            </div>































                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter first name">
                                        </div>
                                    </div><!-- Col -->






                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter last name">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->






                            </div>
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter first name">
                                        </div>
                                    </div><!-- Col -->






                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter last name">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->















                            </div>
                        </div>



















                        <button type="submit" class="btn btn-primary submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
<script>
    CKEDITOR.replace("tinymceExample", {
        on: {
            instanceReady: function (e) {
                let editorElement = e.editor.container.$;
                editorElement.style.marginTop = "0.5rem";
                editorElement.style.marginBottom = "0.5rem";
                editorElement.style.boxShadow = "none";
            }
        }
    });
</script>