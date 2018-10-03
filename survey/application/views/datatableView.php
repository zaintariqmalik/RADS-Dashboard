
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered" id="posts">
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                </thead>				
            </table>
            </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#posts').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax":{
                "url": "<?php echo base_url('DatatableController/posts') ?>",
                "dataType": "json",
                "type": "POST",
                "data":{  '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>' }
                            },
            "columns": [
                    { "data": "id" },
                    { "data": "title" },
                    { "data": "body" },
                    { "data": "created_at" },
                ]	 

            });
        });
    </script>
